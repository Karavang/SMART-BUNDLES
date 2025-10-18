<script setup>
import { useProfileStore } from "~/store";
const props = defineProps(["title"]);
const { title } = props;
const profile = useProfileStore();
console.log(profile);
function changeValue(value) {
  profile.updateField(title, value);
}
</script>

<template>
  <input
    :value="profile[title]"
    type="text"
    readonly
    placeholder="need to add"
    @focus="
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
