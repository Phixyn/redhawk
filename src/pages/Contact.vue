<template>
  <Layout>
    <section class="section">
      <div class="container">
        <ContentBanner :banner="$page.contact.banner" />
        <article class="media px-4 py-4" id="contact-details">
          <div class="media-content">
            <div class="content">
              <p>
                <span class="title is-5">{{ $page.contact.name }}</span
                ><br />
                <span class="title is-5">{{ $page.contact.email }}</span>
              </p>
            </div>
            <div class="content">
              <p>
                {{ $page.contact.town }}<br />
                {{ $page.contact.country }}
              </p>
            </div>
            <div class="content has-text-centered">
              <hr />
              <figure
                class="is-inline-flex image is-32x32 mx-3 my-0"
                :key="smIcon.name"
                v-for="smIcon in $page.contact.social_media_icons"
              >
                <a :href="smIcon.sm_url"
                  ><img :src="smIcon.icon_path" :title="smIcon.name"
                /></a>
              </figure>
            </div>
          </div>
        </article>
      </div>
    </section>
  </Layout>
</template>

<page-query>
query {
  contact: customPage (path: "/temp-content/pages/contact") {
    title
    banner
    name
    email
    town
    country
    social_media_icons {
      name
      sm_url
      icon_path
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
      title: this.$page.contact.title,
    };
  },
};
</script>

<style lang="scss">
$phix-button-main-color: #333333;

#contact-details {
  border: 1px dashed $phix-button-main-color;
}
</style>