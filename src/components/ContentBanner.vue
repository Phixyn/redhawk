<template>
  <header>
    <h1 class="content-banner mb-5 py-2 is-size-4">
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
// TODO: See if we can move this somewhere global (default?)
$phix-separator-main-color: #424242;

.content-banner {
  border-width: 1px;
  border-color: $phix-separator-main-color;
  border-style: solid none;
  text-align: center;
}
</style>