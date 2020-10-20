<template>
  <Layout>
    <section id="push-footer" class="section">
      <div class="container">
        <!-- Project header -->
        <div class="level">
          <!-- Left side -->
          <div class="level-left">
            <div class="level-item">
              <h1 class="title is-5">{{ $page.strapi.projects[0].name }}</h1>
            </div> <!-- .level-item -->
          </div> <!-- .level-left -->

          <!-- Right side -->
          <div class="level-right">
            <!-- TODO #101: Consider making these labels/tags under the
              title instead. -->
            <h2 class="subtitle is-6 level-item">
              {{
                $page.strapi.projects[0].project_categories
                  .map((category) => category.name)
                  .join(", ")
              }}
            </h2> <!-- .level-item -->
          </div> <!-- .level-right -->
        </div> <!-- .level -->

        <!-- Project summary -->
        <div class="content" v-html="$page.strapi.projects[0].summary"></div>
        <hr />

        <div class="columns">
          <!-- Project details -->
          <div class="column is-3">
            <h3 class="has-text-weight-bold">Programming Language</h3>
            <p>{{ $page.strapi.projects[0].programming_language }}</p>
            <h3 class="has-text-weight-bold">Technologies</h3>
            <p>
              {{
                $page.strapi.projects[0].project_technologies
                  .map((technology) => technology.name)
                  .join(", ")
              }}
            </p>
            <h3 class="has-text-weight-bold">Status</h3>
            <p class="is-capitalized">
              {{ $page.strapi.projects[0].status.split("_").join(" ") }}
            </p>
            <h3
              class="has-text-weight-bold"
              v-if="$page.strapi.projects[0].repository_url"
            >
              GitHub
            </h3>
            <p v-if="$page.strapi.projects[0].repository_url">
              <a
                :href="$page.strapi.projects[0].repository_url"
                title="Project repository"
                target="_blank"
              >
                {{ $page.strapi.projects[0].repository_url }}
              </a>
            </p>
            <h3 class="has-text-weight-bold">Category</h3>
            <p>
              {{
                $page.strapi.projects[0].project_categories
                  .map((category) => category.name)
                  .join(", ")
              }}
            </p>
            <h3 class="has-text-weight-bold">Date Started</h3>
            <p>{{ $page.strapi.projects[0].date_started }}</p>
          </div> <!-- .column -->

          <!-- Project carousel (preview images/videos) -->
          <div class="column is-8 is-offset-1">
            <Carousel :carousels="carousels" />
          </div> <!-- .column -->
        </div> <!-- .columns -->

        <!-- Project demo video (if it has one) -->
        <hr v-if="$page.strapi.projects[0].has_demo_video" />
        <div class="columns" v-if="$page.strapi.projects[0].has_demo_video">
          <div class="column is-10 is-offset-2">
            <p class="block">Here's a quick demo video.</p>

            <figure class="image is-16by9">
              <iframe
                class="has-ratio"
                :src="$page.strapi.projects[0].demo_video_url"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </figure> <!-- .image -->
          </div> <!-- .column -->
        </div> <!-- .columns -->

        <!-- Breadcrumbs -->
        <hr class="mb-4" />
        <nav class="breadcrumb is-small is-uppercase" aria-label="breadcrumbs">
          <ul>
            <li><g-link to="/">Home</g-link></li>
            <li><g-link to="/portfolio/">Portfolio</g-link></li>
            <li class="is-active">
              <a href="#" aria-current="page">{{
                $page.strapi.projects[0].name
              }}</a>
            </li>
          </ul>
        </nav> <!-- .breadcrumb -->
      </div> <!-- .container -->
    </section>
  </Layout>
</template>

<page-query>
query ($slug: String!) {
  strapi {
    projects (where: { slug: $slug }) {
      id
      name
      description
      summary
      status
      main_technology
      programming_language
      repository_url
      date_started
      has_demo_video
      demo_video_url
      slug
      cover_image {
        id
        url
        alt
        caption
      }
      preview_media {
        id
        url
        alt
        caption
      }
      project_categories {
        id
        name
        description
      }
      project_technologies {
        id
        name
        description
      }
    }
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
    // Fetch preview images (TODO #108: make separate method for this?)
    this.carousels = this.$page.strapi.projects[0].preview_media.map(
      (val, index) => {
        return { title: val.caption, image: val.url, alt: val.alt };
      }
    );
  },
  metaInfo() {
    return {
      title: this.$page.strapi.projects[0].name,
    };
  },
};
</script>