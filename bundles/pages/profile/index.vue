<script setup lang="ts">
import Header from "~/components/header.vue";
</script>

<template>
  <Header />
  <div class="container">
    <Hero />
    <div class="auth-messages">
      <Authdata />
      <Messages />
    </div>
  </div>
</template>
