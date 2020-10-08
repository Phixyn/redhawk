<template>
  <Layout>
    <section class="section">
      <div class="container">
        <div class="level">
          <!-- Left side -->
          <div class="level-left">
            <div class="level-item">
              <!-- TODO substitute with h1 once we reset its style -->
              <p class="subtitle is-5">{{ $page.project.title }}</p>
            </div>
          </div>
          <!-- Right side -->
          <div class="level-right">
            <!-- TODO: use for loop? but have to handle the comma -->
            <!-- TODO substitute with h2 once we reset its style -->
            <p class="title is-6 level-item">
              {{ $page.project.categories[0] }},
              {{ $page.project.categories[1] }}
            </p>
          </div>
        </div>

        <p class="block" v-html="$page.project.summary"></p>

        <div class="columns is-mobile">
          <div class="column is-3">
            <h3 class="has-text-weight-bold">Programming Language</h3>
            <p>{{ $page.project.programming_language }}</p>
            <h3 class="has-text-weight-bold">Technologies</h3>
            <p>{{ $page.project.technologies }}</p>
            <h3 class="has-text-weight-bold">Status</h3>
            <p>{{ $page.project.status }}</p>
            <h3 class="has-text-weight-bold">GitHub</h3>
            <p>
              <a v-bind:href="$page.project.github">{{
                $page.project.github
              }}</a>
            </p>
            <h3 class="has-text-weight-bold">Category</h3>
            <p>{{ $page.project.categories }}</p>
            <h3 class="has-text-weight-bold">Date Started</h3>
            <p>{{ $page.project.date_started }}</p>
          </div>

          <div class="column is-8 is-offset-1">
            <Carousel :carousels="carousels" />
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="columns" v-if="$page.project.has_video">
          <hr/>
          <div class="column is-10 is-offset-2">
            <p class="block">Here's a quick demo video.</p>
            <figure class="image is-16by9">
              <iframe class="has-ratio" :src="$page.project.video_link" frameborder="0" allowfullscreen></iframe>
            </figure>
          </div>
        </div>
      </div>
    </section>
  </Layout>
</template>

<page-query>
query ($path: String!) {
  project (path: $path) {
    title
    summary
    status
    categories
    main_technology
    programming_language
    technologies
    date_started
    preview_images
    image_path
    has_video
    github
    video_link
  }
}
</page-query>

<script>
import Carousel from "@/components/Carousel.vue";

export default {
  components: {
    Carousel,
  },
  data() {
    return {
      carousels: [],
    };
  },
  created() {
    // Fetch preview images (make method for this?)
    this.carousels = this.$page.project.preview_images.map((val, index) => {
      return { title: `Preview image ${index}`, image: val };
    });
  },
  metaInfo() {
    return {
      title: this.$page.project.title,
    };
  },
};
</script>