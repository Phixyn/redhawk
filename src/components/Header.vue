<template>
  <b-navbar class="mb-5" type="is-black" shadow>
    <!-- Logo/site name -->
    <template slot="brand">
      <b-navbar-item tag="g-link" :to="{ path: '/' }">
        <img
          src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
          alt="Lightweight UI components for Vue.js based on Bulma"
        />
      </b-navbar-item>
    </template> <!-- /brand -->

    <!-- Navigation links -->
    <template slot="end">
      <!--
        tag - Set tag type to <g-link> to make sure Gridsome routing works
        to - part of <g-link> tag, like href but for routing
      -->
      <!-- TODO Use 'active' property and a class to style active items -->
      <b-navbar-item tag="g-link" :to="{ path: '/' }"> Home </b-navbar-item>
      <b-navbar-item tag="g-link" :to="{ path: '/projects/' }">
        Projects
      </b-navbar-item>
      <b-navbar-item tag="g-link" :to="{ path: '/blog/' }">
        Blog
      </b-navbar-item>
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
        <b-navbar-item href="#"> GitHub </b-navbar-item>
        <b-navbar-item href="#"> Twitter </b-navbar-item>
        <b-navbar-item href="#"> LinkedIn </b-navbar-item>
      </b-navbar-dropdown>
    </template> <!-- /end -->
  </b-navbar>
</template>

<script>
export default {
  name: "Header",
};
</script>