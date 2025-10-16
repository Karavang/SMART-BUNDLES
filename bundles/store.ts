export const useProfileStore = defineStore("profile", {
  state: () => ({
    country: "",
    address: "",
    postcode: "",
    idCode: 0,
    birthday: new Date(),
    idPhoto: "",
    facebook: "",
    linkedin: "",
    phones: "",
    mobile: "",
    home: "",
  }),

  getters: {
    fullAddress: (state) => {
      return `${state.address}, ${state.country} ${state.postcode}`;
    },
    isProfileComplete: (state) => {
      return state.country && state.address && state.mobile;
    },
  },

  actions: {
    async updateField(field: keyof typeof this.$state, value: string) {
      this[field] = value;

      // Авто-сохранение на сервер
      await this.saveToServer();
    },

    async loadProfile() {
      const { data } = await useFetch("/api/profile");
      if (data.value) {
        this.$patch(data.value);
      }
    },

    async saveToServer() {
      const { $state } = this;
      await $fetch("/api/profile", {
        method: "PUT",
        body: $state,
      });
    },

    reset() {
      this.$reset();
    },
  },
});
