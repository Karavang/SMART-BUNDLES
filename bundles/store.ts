interface ProfileState {
  country: string;
  address: string;
  postcode: string;
  idCode: string;
  birthday: string;
  facebook: string;
  linkedin: string;
  phones: string;
  mobile: string;
  home: string;
  interests: {
    tech: boolean;
    medicine: boolean;
    money: boolean;
    sentences: boolean;
    independent: boolean;
    other: boolean;
  };
}

export const useProfileStore = defineStore("profile", {
  state: (): ProfileState => ({
    country: "",
    address: "",
    postcode: "",
    idCode: "",
    birthday: "",
    facebook: "",
    linkedin: "",
    phones: "",
    mobile: "",
    home: "",
    interests: {
      tech: false,
      medicine: false,
      money: false,
      sentences: false,
      independent: false,
      other: false,
    },
  }),

  actions: {
    updateField<K extends keyof ProfileState>(
      field: K,
      value: ProfileState[K],
    ) {
      this.$state[field] = value;
    },
    toggleInterest(key: keyof ProfileState["interests"]) {
      this.interests[key] = !this.interests[key];
    },
    async loadProfile() {
      const { data, execute, pending } = await useFetch<
        ProfileState & { interests: string }
      >("http://localhost:8000/api/profile/1", {
        immediate: false,
      });
      await execute();
      while (pending.value) {
        await new Promise((r) => setTimeout(r, 10));
      }

      if (data.value) {
        this.$patch({
          ...data.value,
          interests: JSON.parse(data.value.interests),
        });
      }
      console.log(this.$state);
    },

    async saveToServer() {
      const data = toRaw(this.$state);
      console.log({ ...data, interests: JSON.stringify(data.interests) });
      await $fetch("http://localhost:8000/api/profile/1", {
        method: "PUT",
        body: { ...data, interests: JSON.stringify(data.interests) },
      });
    },
  },
});
