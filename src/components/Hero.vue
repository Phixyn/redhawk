<template>
  <!-- TODO: Make background very dark grey, maybe with scoped style? -->
  <section class="hero is-medium is-dark">
    <div class="hero-body">
      <div class="container has-text-centered">
        <!-- TODO pass via props -->
        <figure class="image is-inline-block">
          <img
            v-bind:class="{ 'is-rounded': imageIsRound }"
            v-bind:src="imageSrc"
            v-bind:alt="imageAlt"
          />
        </figure> <!-- .image -->

        <p class="title">{{ title }}</p>
        <p class="subtitle mt-2">{{ subtitle }}</p>
        <!-- Prop "bodyText" -->
        <p>
          My name is Alpeche Pancha. I am a Full Stack Developer based in
          Suffolk, England. I have over 10 years of experience, including 5
          years of professional experience, in software and web development. I
          have previously worked at a software consultancy company based at
          Adastral Park, Suffolk. I am currently looking for new opportunities
          in web development.
        </p>
        <!-- Prop "bodyFooter" ? -->
        <!-- TODO make sure links are styled -->
        <p>
          <a href="#">Portfolio</a> // <a href="#">Download CV</a> //
          <a href="#">Contact me</a>
        </p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Hero",
  props: {
    imageSrc: {
      type: String,
      required: true,
    },
    imageAlt: {
      type: String,
      default: "Hero image",
    },
    imageIsRound: {
      type: Boolean,
      default: true,
    },
    title: {
      type: String,
      required: true,
    },
    subtitle: {
      type: String,
      required: true,
    },
    bodyText: {
      type: String,
    },
  },
};
</script>
