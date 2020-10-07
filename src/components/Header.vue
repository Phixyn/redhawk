<template>
  <b-navbar type="is-black" shadow="true">
    <template slot="brand">
      <b-navbar-item tag="router-link" :to="{ path: '/' }">
        <img
          src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
          alt="Lightweight UI components for Vue.js based on Bulma"
        />
      </b-navbar-item>
    </template>

    <template slot="end">
      <!--
        tag - Set tag type to <g-link> to make sure Gridsome routing works
        to - part of <g-link> tag, like href but for routing
      -->
      <b-navbar-item tag="g-link" to="/"> Home </b-navbar-item>
      <b-navbar-item tag="g-link" to="/projects/"> Projects </b-navbar-item>
      <b-navbar-item tag="g-link" to="/about/"> About </b-navbar-item>
      <b-navbar-item tag="g-link" to="/contact/"> Contact </b-navbar-item>
      <!--
        hoverable - Users can hover to see dropdown items
        right - Anchor dropdown to right-side, should be true for dropdowns
          used at "end"
        collapsible - Make dropdown collapsible on mobile/small screens
      -->
      <b-navbar-dropdown label="Social Media" hoverable="true" right="true" collapsible="true">
        <b-navbar-item href="#"> About </b-navbar-item>
        <b-navbar-item href="#"> Contact </b-navbar-item>
      </b-navbar-dropdown>
    </template>
  </b-navbar>
</template>
