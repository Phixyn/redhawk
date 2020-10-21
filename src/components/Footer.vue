<template>
  <footer class="footer">
    <div class="content">
      <p class="copyright-msg">
        &copy; {{ $static.metadata.fromYear }} - {{ currentYear }} Alpeche
        Pancha. All rights reserved. <br />
        {{ $static.metadata.version }}
      </p>
    </div> <!-- .content -->
  </footer>
</template>

<static-query>
query {
  metadata {
    version
    fromYear
  }
}
</static-query>

<script>
export default {
  name: "Footer",
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