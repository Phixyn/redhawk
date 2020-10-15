<template>
  <Layout>
    <!-- Intro -->
    <section class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.strapi.homepage.banner"/>

        <div class="content">
          <h2>{{ $page.strapi.homepage.biography.header }}</h2>
          <span v-html="$page.strapi.homepage.biography.content"></span>

          <!-- TODO move to CMS at some point -->
          <h2>My projects</h2>
          <p>These are just some of my game projects. You can view the rest in the <a href="#">projects page</a>.</p>
        </div>

        <ProjectShowcase v-bind:projects="$page.strapi.projects"/>
      </div> <!-- .container -->
    </section>
  </Layout>
</template>

<page-query>
query {
  strapi {
    homepage {
      title
      banner
      biography {
        header
        excerpt
        content
        profile_picture {
          url
          alt
          caption
        }
      }
    }

    projects (limit: 3) {
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
      }
      preview_media {
        id
        url
        alt
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
import ContentBanner from "@/components/ContentBanner.vue";
import ProjectShowcase from "@/components/ProjectShowcase.vue";

export default {
  components: {
    ContentBanner,
    ProjectShowcase
  },
  metaInfo() {
    return {
      title: this.$page.strapi.homepage.title,
    };
  },
};
</script>
