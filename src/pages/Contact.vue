<template>
  <Layout>
    <section id="push-footer" class="section">
      <div class="container">
        <ContentBanner :banner="$page.strapi.contact.banner" />

        <article class="contact-details media px-4 py-4">
          <div class="media-content">
            <div class="content">
              <p>
                <span class="subtitle is-5">
                  {{ $page.strapi.contact.full_name }}
                </span>
                <br />
                <span class="subtitle is-5">
                  {{ $page.strapi.contact.email_address }}
                </span>
              </p>
            </div> <!-- .content -->

            <div class="content">
              <p>
                {{ $page.strapi.contact.city }}
                <br />
                {{ $page.strapi.contact.country }}
              </p>
            </div> <!-- .content -->

            <div class="content has-text-centered">
              <hr />
              <figure
                class="sm-icon is-inline-flex image is-32x32 mx-3 my-0"
                :key="smLink.id"
                v-for="smLink in $page.strapi.contact.social_media_links"
              >
                <a :href="smLink.url" target="_blank">
                  <img
                    :src="smLink.icon.url"
                    :title="smLink.name"
                    :alt="smLink.icon.alt"
                  />
                </a>
              </figure> <!-- .image -->
            </div> <!-- .content -->
          </div> <!-- .media-content -->
        </article> <!-- .media .contact-details -->
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
    contact {
      title
      banner
      full_name
      email_address
      city
      country
      social_media_links {
        id
        name
        url
        icon {
          url
          alt
        }
      }
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
      title: this.$page.strapi.contact.title,
      meta: [
        {
          property: "og:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          property: "og:title",
          content: `${this.$page.strapi.contact.title} - ${this.$page.metadata.siteName}`,
        },
        {
          property: "og:description",
          content: this.$page.strapi.contact.meta_info.description,
        },
        {
          property: "og:image",
          content: this.$page.strapi.contact.meta_info.image,
        },
        {
          name: "twitter:url",
          content: `${this.$page.metadata.siteUrl}${this.$route.fullPath}`,
        },
        {
          name: "twitter:title",
          content: `${this.$page.strapi.contact.title} - ${this.$page.metadata.siteName}`,
        },
        {
          name: "twitter:description",
          content: this.$page.strapi.contact.meta_info.description,
        },
        {
          name: "twitter:image",
          content: this.$page.strapi.contact.meta_info.image,
        },
      ],
    };
  },
};
</script>

<style lang="scss">
.contact-details {
  border: 1px dashed map-get($custom-colors, "border-bis");
}

.sm-icon a img {
  opacity: 0.85;
}
.sm-icon a:hover img {
  opacity: 1;
}
</style>