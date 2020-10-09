<template>
  <Layout>
    <section class="section">
      <div class="container">
        <!-- Project header -->
        <div class="level">
          <!-- Left side -->
          <div class="level-left">
            <div class="level-item">
              <h1 class="title is-5">{{ $page.project.title }}</h1>
            </div> <!-- .level-item -->
          </div> <!-- .level-left -->

          <!-- Right side -->
          <div class="level-right">
            <!-- TODO consider making these labels/tags under the
              title instead. -->
            <h2 class="subtitle is-6 level-item">
                {{ $page.project.categories.join(", ") }}
            </h2> <!-- .level-item -->
          </div> <!-- .level-right -->
        </div> <!-- .level -->

        <!-- Project summary -->
        <p class="block" v-html="$page.project.summary"></p>

        <div class="columns is-mobile">
          <!-- Project details -->
          <div class="column is-3">
            <h3 class="has-text-weight-bold">Programming Language</h3>
            <p>{{ $page.project.programming_language }}</p>
            <h3 class="has-text-weight-bold">Technologies</h3>
            <p>{{ $page.project.technologies.join(", ") }}</p>
            <h3 class="has-text-weight-bold">Status</h3>
            <p>{{ $page.project.status }}</p>
            <h3 class="has-text-weight-bold">GitHub</h3>
            <p>
              <a v-bind:href="$page.project.github">{{
                $page.project.github
              }}</a>
            </p>
            <h3 class="has-text-weight-bold">Category</h3>
            <p>{{ $page.project.categories.join(", ") }}</p>
            <h3 class="has-text-weight-bold">Date Started</h3>
            <p>{{ $page.project.date_started }}</p>
          </div> <!-- .column -->

          <!-- Project carousel (preview images/videos) -->
          <div class="column is-8 is-offset-1">
            <Carousel :carousels="carousels" />
          </div> <!-- .column -->
        </div> <!-- .columns -->
      </div> <!-- .container -->
    </section>

    <!-- Project demo video (if it has one) -->
    <section class="section">
      <div class="container">
        <div class="columns" v-if="$page.project.has_video">
          <hr/>
          <div class="column is-10 is-offset-2">
            <p class="block">Here's a quick demo video.</p>

            <figure class="image is-16by9">
              <iframe class="has-ratio" :src="$page.project.video_link" frameborder="0" allowfullscreen></iframe>
            </figure> <!-- .image -->
          </div> <!-- .column -->
        </div> <!-- .columns -->
      </div> <!-- .container -->
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