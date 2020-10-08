<template>
  <!-- <b-carousel
    :indicator="indicator"
    :indicator-background="indicatorBackground"
    :indicator-inside="indicatorInside"
    :indicator-mode="indicatorMode"
    :indicator-position="indicatorPosition"
    :indicator-style="indicatorStyle"
    :pause-hover="pauseHover"
  > -->
  <b-carousel
    indicator-custom
    :indicator-inside="indicatorInside"
    :interval="interval"
    :pause-hover="pauseHover"
  >
    <b-carousel-item v-for="(carousel, i) in carousels" :key="i">
      <figure class="image is-5by3">
        <img :src="carousel.image" />
      </figure>
    </b-carousel-item>
    <template slot="indicators" slot-scope="props">
      <figure class="al image">
        <!-- TODO alt property -->
        <img
          :src="carousels[props.i].image"
          :title="carousels[props.i].title"
        />
      </figure>
    </template>
  </b-carousel>
</template>

<script>
// TODO use props instead of data

export default {
  name: "Carousel",
  props: {
    indicator: {
      type: Boolean,
      default: true
    },
    indicatorBackground: {
      type: Boolean,
      default: true,
    },
    indicatorInside: {
      type: Boolean,
      default: false,
    },
    indicatorMode: {
      type: String,
      default: "click",
    },
    indicatorPosition: {
      type: String,
      default: "is-bottom",
    },
    indicatorStyle: {
      type: String,
      default: "is-dots",
    },
    interval: {
      type: Number,
      default: 5000,
    },
    pauseHover: {
      type: Boolean,
      default: false,
    },
    carousels: {
      type: Array,
      required: true
    }
  },
};
</script>

<style>
.is-active .al img {
  filter: grayscale(0%);
}
.al img {
  filter: grayscale(100%);
}
</style>