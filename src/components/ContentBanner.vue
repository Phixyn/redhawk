<template>
  <header>
    <h1
      class="content-banner subtitle mb-5 py-3 is-size-4"
      v-html="banner"
    ></h1>
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
  border-color: map-get($custom-colors, "separator-primary");
  border-style: solid none;
  text-align: center;
}
</style>