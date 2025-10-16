<template>
  <input
    :value="value"
    type="text"
    readonly
    placeholder="need to add"
    @click="
      (e) => {
        e.target.removeAttribute('readonly');
        $event.target.style.border = 'none';
        $event.target.style.background = 'transparent';
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
    @change="(e) => sendMessage(e.target.value)"
  />
</template>
<script setup>
const emit = defineEmits(["sentData"]);

defineProps(["value", "title"]);

function sendMessage(msg) {
  emit("sentData", { value: msg, title: props.title });
}
</script>
