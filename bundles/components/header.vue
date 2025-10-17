<template>
  <div class="header">
    <div class="top">
      <ul class="menu">
        <li>
          <svg
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            viewBox="0 0 28 28"
          >
            <path
              d="M14 0c7.734 0 14 6.266 14 14 0 7.688-6.234 14-14 14-7.75 0-14-6.297-14-14 0-7.734 6.266-14 14-14zM23.672 21.109c1.453-2 2.328-4.453 2.328-7.109 0-6.609-5.391-12-12-12s-12 5.391-12 12c0 2.656 0.875 5.109 2.328 7.109 0.562-2.797 1.922-5.109 4.781-5.109 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c2.859 0 4.219 2.312 4.781 5.109zM20 11c0-3.313-2.688-6-6-6s-6 2.688-6 6 2.688 6 6 6 6-2.688 6-6z"
            />
          </svg>
          <a href="#">Test</a>
        </li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
      <ul class="language">
        <li><a href="#">HE</a></li>
        <li>
          <a
            href="#"
            class="active"
            >EN</a
          >
        </li>
      </ul>
    </div>
    <div class="bottom">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Active investment</a></li>
        <li><a href="#">Fundraising</a></li>
        <li><a href="#">Smart Club</a></li>
        <li><a href="#">How it works</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <b class="logo">SMART BUNDLES</b>
    </div>
  </div>
</template>
<script default>
export default {
  name: "Header",
};
</script>
