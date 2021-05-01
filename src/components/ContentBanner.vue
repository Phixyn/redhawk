<template>
  <header>
    <!-- TODO Not sure how I feel about mt-2 here, but we do
    need to remove mb-2 from Header for the Hero to look
    good on the homepage -->
    <h1
      class="content-banner subtitle mt-2 mb-5 py-3 is-size-4"
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