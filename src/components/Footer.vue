<template>
  <footer class="footer">
    <div class="content">
      <p class="copyright-msg">
        &copy; {{ fromYear }} - {{ currentYear }} Alpeche Pancha. All rights
        reserved. <br />
        {{ version }}
      </p>
    </div> <!-- .content -->
  </footer>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      version: "v0.5.0",
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
  border-top: 1px solid map-get($custom-colors, "separator-bis");
  padding-top: 0.85rem;
  font-size: 0.8rem;
  text-align: right;
}
</style>