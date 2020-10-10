<template>
  <footer class="footer">
    <div class="content has-text-right">
      <p class="copyright-msg">
        &copy; {{ fromYear }} - {{ currentYear }} Alpeche Pancha. All rights
        reserved. <br />
        v0.5.0
      </p>
    </div> <!-- .content -->
  </footer>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      fromYear: 2012,
    };
  },
  computed: {
    currentYear() {
      return new Date().getFullYear();
    },
  },
};
</script>

<style lang="scss">
.copyright-msg {
  border-top: 1px solid map-get($custom-colors, "phix-separator-dark-color");
  padding-top: 0.85rem;
  font-size: 0.8em;
  text-align: right;
}
</style>