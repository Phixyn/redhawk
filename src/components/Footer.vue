<template>
  <footer class="footer">
    <div class="content has-text-right">
      <!-- TODO do this programmatically -->
      <p class="copyright-msg">
        &copy; 2012 - 2020 Alpeche Pancha. All rights reserved. <br />
        v0.5.0
      </p>
    </div> <!-- .content .has-text-right -->
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style lang="scss">
// TODO: See if we can move this somewhere global
$phix-separator-dark-color: #252525;
$phix-text-dark-color: #777777;

.copyright-msg {
  border-top: 1px solid $phix-separator-dark-color;
  margin: 1.18rem 5.967rem;
  padding-top: 0.85rem;
  color: $phix-text-dark-color;
  font-size: 0.8em;
  text-align: right;
}
</style>