<template>
  <Layout>
    <section class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.about.banner" />

        <h2
          class="block has-text-centered is-size-5"
          v-html="$page.about.hero_text"
        ></h2>

        <div class="card">
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <h2 class="title is-4">{{ $page.about.bio_header }}</h2>
                <div class="content" v-html="$page.about.bio"></div>
                <div
                  class="content has-text-centered"
                  v-html="$page.about.social_links"
                ></div>
              </div> <!-- .media-content -->

              <div class="media-right">
                <figure class="image is-128x128 ml-4">
                  <img v-bind:src="$page.about.about_profile_pic" />
                </figure> <!-- .image -->
              </div> <!-- .media-right -->
            </div> <!-- .media -->
          </div> <!-- .card-content -->
        </div> <!-- .card -->

        <div class="content mt-6" v-html="$page.about.content"></div>
      </div> <!-- .container -->
    </section>
  </Layout>
</template>

<page-query>
query {
  about: customPage (path: "/temp-content/pages/about") {
    title
    banner
    hero_text
    bio_header
    about_profile_pic
    bio
    social_links
    content
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
      title: this.$page.about.title,
    };
  },
};
</script>
