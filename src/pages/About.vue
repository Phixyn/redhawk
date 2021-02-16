<template>
  <Layout>
    <section id="push-footer" class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.strapi.about.banner" />

        <h2
          class="block has-text-centered is-size-5"
          v-html="$page.strapi.about.hero_text"
        ></h2>

        <BiographyCard v-bind:biography="$page.strapi.about.biography" />

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
import BiographyCard from "@/components/BiographyCard.vue";

export default {
  components: {
    ContentBanner,
    BiographyCard,
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
