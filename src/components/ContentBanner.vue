<template>
  <header>
    <h1 class="content-banner mb-5 py-2 is-size-4 has-text-centered">
      &bull; <span v-html="banner"></span> &bull;
    </h1>
  </header>
</template>

<script>
export default {
  name: "ContentBanner",
  props: ["banner"],
};
</script>

<style lang="scss">
.content-banner {
  border-width: 1px;
  border-color: map-get($custom-colors, "phix-separator-main-color");
  border-style: solid none;
}
</style>