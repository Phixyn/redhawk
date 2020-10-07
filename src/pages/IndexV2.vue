<template>
  <Layout>
    <section class="section">
      <ContentBanner v-bind:banner="$page.customPage.banner"/>
      <div class="container" v-html="$page.customPage.content"></div>
    </section>
  </Layout>
</template>

<page-query>
query HomePage {
  customPage (path: "/") {
    title
    banner
    content
  }
}
</page-query>

<script>
import ContentBanner from "@/components/ContentBanner.vue";

export default {
  components: {
    ContentBanner
  },
  metaInfo() {
    return {
      title: this.$page.customPage.title,
    };
  },
};
</script>
