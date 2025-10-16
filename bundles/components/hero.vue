<template>
  <div class="hero">
    <div class="quad"></div>
    <img
      src=""
      alt=""
      class="photo"
    />
    <div class="">
      <ul class="listData">
        <li>
          <p>Country</p>
          <input
            type="text"
            placeholder="need to add"
            :value="country"
            readonly
            @click="
              $event.target.removeAttribute('readonly');
              $event.target.style.border = 'none';
              $event.target.style.background = 'transparent';
              $event.target.focus();
            "
            @blur="
              $event.target.setAttribute('readonly', '');
              $event.target.style.border = 'none';
              $event.target.style.background = 'transparent';
            "
            @keyup.enter="$event.target.blur()"
            @change=""
          />
        </li>
        <li>
          <p>Address</p>
          <input-hero
            :value="address"
            title="address"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Postcode</p>
          <input-hero
            :value="postcode"
            title="postcode"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>ID Code</p>
          <input-hero
            :value="idCode"
            title="idCode"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Birthday</p>
          <input-hero
            :value="birthday"
            title="birthday"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>ID Photo</p>
          <input-hero
            :value="idPhoto"
            title="idPhoto"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Facebook</p>
          <input-hero
            :value="facebook"
            title="facebook"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Linkedin</p>

          <input-hero
            :value="linkedin"
            title="linkedin"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Phones</p>
          <input-hero
            :value="phones"
            title="phones"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Mobile</p>
          <input-hero
            :value="mobile"
            title="mobile"
            @sentData="handleChange"
          />
        </li>
        <li>
          <p>Home</p>
          <input-hero
            :value="home"
            title="home"
            @sentData="handleChange"
          />
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
        <button @click="">Save</button>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Hero",

  setup(props) {
    console.log(props.title);
  },
};
function handleChange(msg) {
  console.log(msg);
}
function sendData(msg) {}
</script>
