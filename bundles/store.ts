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
  }),

  actions: {
    updateField<K extends keyof ProfileState>(
      field: K,
      value: ProfileState[K],
    ) {
      this[field] = value;
    },

    async loadProfile() {
      const { data } = await useFetch("/api/profile/1");
      if (data.value) {
        this.$patch(data.value as Partial<ProfileState>);
      }
    },

    async saveToServer() {
      const data = toRaw(this.$state);
      console.log(data);
      // await $fetch("/api/profile/1", {
      //   method: "PUT",
      //   body: this.$state,
      // });
    },
  },
});
