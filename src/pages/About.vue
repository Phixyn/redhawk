<template>
  <Layout>
    <section id="push-footer" class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.strapi.about.banner" />

        <h2
          class="block has-text-centered is-size-5"
          v-html="$page.strapi.about.hero_text"
        ></h2>

        <!-- TODO #106: BiographyCard component -->
        <div class="card">
          <div class="card-content">
            <div class="columns">
              <div class="column is-narrow is-pulled-right">
                <figure class="image is-128x128">
                  <img
                    :src="$page.strapi.about.biography.profile_picture.url"
                    :alt="$page.strapi.about.biography.profile_picture.alt"
                  />
                </figure> <!-- .image -->
              </div> <!-- .column -->

              <div class="column">
                <h2 class="title is-4">
                  {{ $page.strapi.about.biography.header }}
                </h2>
                <div
                  class="content"
                  v-html="$page.strapi.about.biography.content"
                ></div>
              </div> <!-- .column -->
            </div> <!-- .columns -->
          </div> <!-- .card-content -->
        </div> <!-- .card -->

        <div
          class="content mt-5"
          v-html="$page.strapi.about.projects_summary"
        ></div>
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
    about {
      title
      banner
      hero_text
      biography {
        header
        excerpt
        content
        profile_picture {
          url
          alt
        }
      }
      projects_summary
      meta_info {
        description
        image
      }
    }
  }
}
</page-query>

<script>
import ContentBanner from "@/components/ContentBanner.vue";

export default {
  components: {
    ContentBanner,
  },
  metaInfo() {
    return {
      title: this.$page.strapi.about.title,
      meta: [
        {
          property: "og:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          property: "og:title",
          content: `${this.$page.strapi.about.title} - ${this.$page.metadata.siteName}`,
        },
        {
          property: "og:description",
          content: this.$page.strapi.about.meta_info.description,
        },
        {
          property: "og:image",
          content: this.$page.strapi.about.meta_info.image,
        },
        {
          name: "twitter:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          name: "twitter:title",
          content: `${this.$page.strapi.about.title} - ${this.$page.metadata.siteName}`,
        },
        {
          name: "twitter:description",
          content: this.$page.strapi.about.meta_info.description,
        },
        {
          name: "twitter:image",
          content: this.$page.strapi.about.meta_info.image,
        },
      ],
    };
  },
};
</script>
