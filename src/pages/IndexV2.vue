<template>
  <Layout>
    <section class="section">
      <ContentBanner v-bind:banner="$page.customPage.banner"/>
      <div class="container" v-html="$page.customPage.content"></div>
    </section>
    <section>
      <ProjectPreview v-bind:projects="$page.projects"/>
    </section>
  </Layout>
</template>

<page-query>
query {
  customPage (path: "/") {
    title
    banner
    content
  }

  projects: allProject {
    edges {
      node {
        id
        path
        content
        excerpt
        title
        banner
        image_path
      }
    }
  }
}
</page-query>

<script>
import ContentBanner from "@/components/ContentBanner.vue";
import ProjectPreview from "@/components/ProjectPreview.vue";

export default {
  components: {
    ContentBanner,
    ProjectPreview
  },
  metaInfo() {
    return {
      title: this.$page.customPage.title,
    };
  },
};
</script>
