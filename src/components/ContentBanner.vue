<template>
  <div class="container">
    <!-- <h1 class="content-banner" v-html="banner"></h1> -->
    <h1 class="content-banner mb-5">&bull; <span v-html="banner"></span> &bull;</h1>
  </div>
</template>

<script>
export default {
  name: "ContentBanner",
  props: ["banner"],
};
</script>

<style lang="scss">
// TODO: See if we can move this somewhere global
$phix-separator-main-color: #424242;

.content-banner {
  border-width: 1px;
  border-color: $phix-separator-main-color;
  border-style: solid none;
  padding: 1rem 0;
  text-align: center;
}
</style>