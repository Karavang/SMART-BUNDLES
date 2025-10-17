<template>
  <input
    :value="profile[title]"
    type="text"
    readonly
    placeholder="need to add"
    @click="
      (e) => {
        e.target.removeAttribute('readonly');
        e.target.style.border = 'none';
        e.target.style.background = 'transparent';
        e.target.focus();
      }
    "
    @blur="
      (e) => {
        e.target.setAttribute('readonly', '');
        e.target.style.border = 'none';
        e.target.style.background = 'transparent';
      }
    "
    @keyup.enter="(e) => e.target.blur()"
    @change="(e) => changeValue(e.target.value)"
  />
</template>
<script setup>
import { useProfileStore } from "~/store";
const props = defineProps(["title"]);
const { title } = props;
const profile = useProfileStore();
function changeValue(value) {
  console.log(props);
  profile.updateField(title, value);
  console.log(profile);
}
</script>
