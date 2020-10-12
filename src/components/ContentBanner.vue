<template>
  <header>
    <h1 class="content-banner subtitle mb-5 py-3 is-size-4">
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
  border-color: map-get($custom-colors, "primary-separator-color");
  border-style: solid none;
  text-align: center;
}
</style>