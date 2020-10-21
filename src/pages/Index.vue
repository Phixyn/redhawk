<template>
  <Layout>
    <!-- Intro -->
    <section id="push-footer" class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.strapi.homepage.banner" />

        <!-- TODO #106: BiographyCard component -->
        <div class="card">
          <div class="card-content">
            <div class="columns">
              <div class="column is-narrow is-pulled-right">
                <figure class="image is-128x128">
                  <img
                    :src="$page.strapi.homepage.biography.profile_picture.url"
                    :alt="$page.strapi.homepage.biography.profile_picture.alt"
                  />
                </figure> <!-- .image -->
              </div> <!-- .column -->

              <div class="column">
                <h2 class="title is-4">
                  {{ $page.strapi.homepage.biography.header }}
                </h2>
                <div
                  class="content"
                  v-html="$page.strapi.homepage.biography.content"
                ></div>
              </div> <!-- .column -->
            </div> <!-- .columns -->
          </div> <!-- .card-content -->
        </div> <!-- .card -->

        <div class="content mt-5">
          <!-- TODO #107: Move to CMS at some point -->
          <h2>My projects</h2>

          <p>
            These are just some of my game projects. You can view the rest on
            the <g-link to="/portfolio/">portfolio page</g-link>.
          </p>

          <hr />
        </div> <!-- .content -->

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
      meta_info {
        description
        image
      }
    }

    projects (sort: "date_started:DESC", limit: 3) {
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
      title: this.$page.strapi.homepage.title,
      meta: [
        {
          property: "og:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          property: "og:title",
          content: `${this.$page.strapi.homepage.title} - ${this.$page.metadata.siteName}`,
        },
        {
          property: "og:description",
          content: this.$page.strapi.homepage.meta_info.description,
        },
        {
          property: "og:image",
          content: this.$page.strapi.homepage.meta_info.image,
        },
        {
          name: "twitter:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          name: "twitter:title",
          content: `${this.$page.strapi.homepage.title} - ${this.$page.metadata.siteName}`,
        },
        {
          name: "twitter:description",
          content: this.$page.strapi.homepage.meta_info.description,
        },
        {
          name: "twitter:image",
          content: this.$page.strapi.homepage.meta_info.image,
        },
      ],
    };
  },
};
</script>
