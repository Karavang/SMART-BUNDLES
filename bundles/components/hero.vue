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
          <p>Country</p>
          <input-hero title="country" />
        </li>
        <li>
          <p>Address</p>
          <input-hero title="address" />
        </li>
        <li>
          <p>Postcode</p>
          <input-hero title="postcode" />
        </li>
        <li>
          <p>ID Code</p>
          <input-hero title="idCode" />
        </li>
        <li>
          <p>Birthday</p>
          <input-hero title="birthday" />
        </li>
        <li>
          <p>ID Photo</p>
          <input-hero title="idPhoto" />
        </li>
        <li>
          <p>Facebook</p>
          <input-hero title="facebook" />
        </li>
        <li>
          <p>Linkedin</p>

          <input-hero title="linkedin" />
        </li>
        <li></li>
        <li>
          <p>Phones</p>
          <input-hero title="phones" />
        </li>
        <li>
          <p>Mobile</p>
          <input-hero title="mobile" />
        </li>
        <li>
          <p>Home</p>
          <input-hero title="home" />
        </li>
      </ul>
      <ul class="list-check">
        <p>Interests</p>
        <li>
          <input
            type="checkbox"
            id="tech"
          />
          <label for="tech">High-Tech</label>
        </li>
        <li>
          <input
            type="checkbox"
            id="medicine"
          />
          <label for="medicine">Medicine</label>
        </li>
        <li>
          <input
            type="checkbox"
            id="money"
          />
          <label for="money">Money</label>
        </li>
        <li>
          <input
            type="checkbox"
            id="sentences"
          />
          <label for="sentences">Sentences</label>
        </li>
        <li>
          <input
            type="checkbox"
            id="independent"
          />
          <label for="independent">Independent</label>
        </li>
        <li>
          <input
            type="checkbox"
            id="other"
          />
          <label for="other">Other</label>
        </li>
        <button @click="profile.saveToServer()">Save</button>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Hero",
};
</script>
<script setup>
import { useProfileStore } from "~/store";

const profile = useProfileStore();
</script>
