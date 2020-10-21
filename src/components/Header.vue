<template>
  <b-navbar class="mb-2" shadow>
    <!-- Logo/site name -->
    <template slot="brand">
      <b-navbar-item tag="g-link" :to="{ path: '/' }">
        <h1 class="px-5 py-0 my-0 is-size-5 is-uppercase">P h i x y n</h1>
      </b-navbar-item>
    </template> <!-- /brand -->

    <!-- Navigation links -->
    <template slot="end">
      <!--
        tag - Set tag type to <g-link> to make sure Gridsome routing works
        to - part of <g-link> tag, like href but for routing
      -->
      <!-- TODO #73: Use 'active' property and a class to style active items -->
      <b-navbar-item tag="g-link" :to="{ path: '/' }" exact>
        Home
      </b-navbar-item>
      <b-navbar-item tag="g-link" :to="{ path: '/portfolio/' }">
        Portfolio
      </b-navbar-item>
      <!-- <b-navbar-item tag="g-link" :to="{ path: '/blog/' }">
        Blog
      </b-navbar-item> -->
      <b-navbar-item tag="g-link" :to="{ path: '/about/' }">
        About
      </b-navbar-item>
      <b-navbar-item tag="g-link" :to="{ path: '/contact/' }">
        Contact
      </b-navbar-item>
      <!--
        hoverable - Users can hover to see dropdown items (doesn't work with
          collapsible attribute)
        right - Anchor dropdown to right-side, should be true for dropdowns
          used at "end"
      -->
      <b-navbar-dropdown label="Social Media" hoverable right arrowless>
        <b-navbar-item href="https://github.com/Phixyn" target="_blank">
          GitHub
        </b-navbar-item>
        <b-navbar-item href="https://www.twitter.com/Phixyn" target="_blank">
          Twitter
        </b-navbar-item>
        <b-navbar-item
          href="https://uk.linkedin.com/in/alpechepancha"
          target="_blank"
        >
          LinkedIn
        </b-navbar-item>
      </b-navbar-dropdown>
    </template> <!-- /end -->
  </b-navbar>
</template>

<script>
export default {
  name: "Header",
};
</script>