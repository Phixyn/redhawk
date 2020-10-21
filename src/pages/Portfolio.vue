<template>
  <Layout>
    <section id="push-footer" class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.strapi.portfolio.banner" />
        <ProjectShowcase v-bind:projects="$page.strapi.projects" />
      </div> <!-- .container -->
    </section>
  </Layout>
</template>

<page-query>
query {
  metadata {
    siteName
    siteUrl
  }

  strapi {
    portfolio {
      title
      banner
      meta_info {
        description
        image
      }
    }

    projects (sort: "date_started:DESC") {
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
import ContentBanner from "@/components/ContentBanner.vue";
import ProjectShowcase from "@/components/ProjectShowcase.vue";

export default {
  components: {
    ContentBanner,
    ProjectShowcase,
  },
  metaInfo() {
    return {
      title: this.$page.strapi.portfolio.title,
      meta: [
        {
          property: "og:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          property: "og:title",
          content: `${this.$page.strapi.portfolio.title} - ${this.$page.metadata.siteName}`,
        },
        {
          property: "og:description",
          content: this.$page.strapi.portfolio.meta_info.description,
        },
        {
          property: "og:image",
          content: this.$page.strapi.portfolio.meta_info.image,
        },
        {
          name: "twitter:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          name: "twitter:title",
          content: `${this.$page.strapi.portfolio.title} - ${this.$page.metadata.siteName}`,
        },
        {
          name: "twitter:description",
          content: this.$page.strapi.portfolio.meta_info.description,
        },
        {
          name: "twitter:image",
          content: this.$page.strapi.portfolio.meta_info.image,
        },
      ],
    };
  },
};
</script>