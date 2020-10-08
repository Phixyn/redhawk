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
  data() {
    return {
      indicator: true,
      indicatorBackground: true,
      indicatorInside: false,
      indicatorMode: "click",
      indicatorPosition: "is-bottom",
      indicatorStyle: "is-dots",
      interval: 5000,
      pauseHover: false,
      carousels: [
        { title: "Slide 1", image: "http://phixyn.com/img/mc_1.PNG" },
        { title: "Slide 2", image: "http://phixyn.com/img/mc_2.PNG" },
        { title: "Slide 3", image: "http://phixyn.com/img/mc_3.PNG" },
        { title: "Slide 4", image: "http://phixyn.com/img/mc_game_over.PNG" },
      ],
    };
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