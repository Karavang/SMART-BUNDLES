<script setup>
import { useProfileStore } from "~/store";

defineOptions({
  name: "Hero",
});
const profile = useProfileStore();

onMounted(async () => {
  await profile.loadProfile();
});
</script>
<template>
  <div class="hero defBorder">
    <div class="quad"><p>Test R</p></div>
    <div class="camera">
      <svg
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        width="32"
        height="32"
        viewBox="0 0 32 32"
      >
        <path
          d="M9.5 19c0 3.59 2.91 6.5 6.5 6.5s6.5-2.91 6.5-6.5-2.91-6.5-6.5-6.5-6.5 2.91-6.5 6.5zM30 8h-7c-0.5-2-1-4-3-4h-8c-2 0-2.5 2-3 4h-7c-1.1 0-2 0.9-2 2v18c0 1.1 0.9 2 2 2h28c1.1 0 2-0.9 2-2v-18c0-1.1-0.9-2-2-2zM16 27.875c-4.902 0-8.875-3.973-8.875-8.875s3.973-8.875 8.875-8.875c4.902 0 8.875 3.973 8.875 8.875s-3.973 8.875-8.875 8.875zM30 14h-4v-2h4v2z"
        />
      </svg>
    </div>
    <div style="width: 100%">
      <ul class="listData">
        <li>
          <input-hero title="country" />
        </li>
        <li>
          <input-hero title="address" />
        </li>
        <li>
          <input-hero title="postcode" />
        </li>
        <li>
          <input-hero title="idCode" />
        </li>
        <li>
          <input-hero title="birthday" />
        </li>
        <li>
          <p>ID Photo</p>
          <p>
            <svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 20 20"
            >
              <path d="M0 11l2-2 5 5 11-11 2 2-13 13z" />
            </svg>
          </p>
        </li>
        <li>
          <input-hero title="facebook" />
        </li>
        <li>
          <input-hero title="linkedin" />
        </li>
        <li></li>
        <li>
          <input-hero title="phones" />
        </li>
        <li>
          <input-hero title="mobile" />
        </li>
        <li>
          <input-hero title="home" />
        </li>
      </ul>
      <ul class="list-check">
        <p>Interests</p>
        <li
          v-for="(value, key) in profile.interests"
          :key="key"
        >
          <input
            type="checkbox"
            :id="key"
            v-model="profile.interests[key]"
          />
          <label :for="key">{{
            key.charAt(0).toUpperCase() + key.slice(1)
          }}</label>
        </li>
        <button @click="profile.saveToServer()">Save</button>
      </ul>
    </div>
  </div>
</template>
