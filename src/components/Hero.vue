<template>
  <!-- TODO: Make background very dark grey, maybe with scoped style? -->
  <section class="hero is-medium is-dark">
    <div class="hero-body">
      <div class="container has-text-centered">
        <figure class="image is-inline-block">
            <img
              class="is-rounded"
              src="https://cdn.phixyn.com/portfolio/me3.png"
              alt="Profile picture"
            />
          </figure> <!-- .image -->

        <!-- TODO pass via props -->
        <p class="title">Alpeche Pancha</p>
        <p class="subtitle mt-2">Full Stack Developer</p>
        <!-- Prop "bodyText" -->
        <p>
          My name is Alpeche Pancha. I am a Full Stack Developer based in Suffolk, England. I have over 10 years of experience, including 5 years of professional experience, in software and web development. I have previously worked at a software consultancy company based at Adastral Park, Suffolk. I am currently looking for new opportunities in web development.
        </p>
        <!-- Prop "bodyFooter" ? -->
        <!-- TODO make sure links are styled -->
        <p><a href="#">Portfolio</a> // <a href="#">Download CV</a> // <a href="#">Contact me</a></p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Hero",
};
</script>
