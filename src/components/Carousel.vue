<template>
  <!-- Normal indicators, no "gallery"
    TODO #105: Maybe make this a separate component -->
  <!-- <b-carousel
    :indicator="indicator"
    :indicator-background="indicatorBackground"
    :indicator-inside="indicatorInside"
    :indicator-mode="indicatorMode"
    :indicator-position="indicatorPosition"
    :indicator-style="indicatorStyle"
    :pause-hover="pauseHover"
  > -->

  <!-- Custom indicators (gallery-like carousel) -->
  <b-carousel
    indicator-custom
    :indicator-inside="indicatorInside"
    :autoplay="autoplay"
    :interval="interval"
    :pause-hover="pauseHover"
  >
    <b-carousel-item v-for="(carousel, i) in carousels" :key="i">
      <!-- TODO #116: Pass aspect ratio as a prop -->
      <!-- <figure class="image is-5by3"> -->
      <figure class="image is-fullwidth">
        <img
          :src="carousel.image"
          :alt="carousel.alt"
        />
      </figure> <!-- .image .is-fullwidth -->
    </b-carousel-item>
    <template slot="indicators" slot-scope="props">
      <figure class="al image">
        <img
          :src="carousels[props.i].image"
          :title="carousels[props.i].title"
          :alt="carousels[props.i].alt"
        />
      </figure> <!-- .al .image -->
    </template>
  </b-carousel>
</template>

<script>
export default {
  name: "Carousel",
  props: {
    indicator: {
      type: Boolean,
      default: true,
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
    autoplay: {
      type: Boolean,
      default: false,
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
      required: true,
    },
  },
};
</script>

<style lang="scss">
.is-active .al img {
  filter: grayscale(0%);
}
.al img {
  filter: grayscale(100%);
}
</style>