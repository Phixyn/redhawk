<template>
  <Layout>
    <section class="section">
      <div class="container">
        <ContentBanner v-bind:banner="$page.about.banner" />

        <!-- TODO should be a h2 cause it comes after h1 -->
        <h3 class="block has-text-centered" v-html="$page.about.hero_text"></h3>

        <article class="message is-dark">
          <!-- <div class="message-header">
            <p>Hello World</p>
          </div> -->
          <div class="message-body">
            <figure class="image is-128x128 is-pulled-right ml-4">
              <img v-bind:src="$page.about.about_profile_pic">
            </figure>
            <h2> {{ $page.about.bio_header }} </h2>
            <div class="content" v-html="$page.about.bio"></div>
            <div class="content has-text-centered" v-html="$page.about.social_links"></div>
          </div>

        </article>

        <div class="content" v-html="$page.about.content"></div>
      </div>
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
