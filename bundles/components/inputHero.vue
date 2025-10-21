<script setup>
import { ref, computed } from "vue";
import { useProfileStore } from "~/store";

const props = defineProps(["title"]);
const { title } = props;
const profile = useProfileStore();

const isValid = ref(true);

const isLinkField = computed(() => {
  return title === "facebook" || title === "linkedin";
});

const isPhoneField = computed(() => {
  return title === "phones" || title === "mobile" || title === "home";
});

function validateLink(value) {
  if (!value) return true;
  const urlPattern =
    /^(https?:\/\/)?(localhost|[\da-z\.-]+\.[\da-z\.]{2,}|(\d{1,3}\.){3}\d{1,3})(:\d+)?(\/[^\s]*)?$/i;
  return urlPattern.test(value);
}

function validatePhone(value) {
  if (!value) return true;
  const phonePattern = /^[\d\s\+\-\(\)]+$/;
  return phonePattern.test(value) && value.replace(/\D/g, "").length >= 9;
}

function validateValue(value) {
  if (isLinkField.value) {
    return validateLink(value);
  }
  if (isPhoneField.value) {
    return validatePhone(value);
  }
  return true;
}

function changeValue(value) {
  isValid.value = validateValue(value);

  profile.updateField(title, value);
}
</script>

<template>
  <li
    :style="{
      'border-bottom': isValid ? 'none' : '1px solid #DBDCDD',
      padding: isValid ? '8px 0' : '7px 0',
    }"
  >
    <p :style="{ color: isValid ? '#13275f' : '#D77431' }">
      {{
        title === "idCode" ? "ID Code" : title[0].toUpperCase() + title.slice(1)
      }}
    </p>
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
  </li>
</template>
