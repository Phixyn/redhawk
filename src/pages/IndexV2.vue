<template>
  <Layout>
    <section class="section">
      <div class="container">
        <!-- TODO maybe put banner in its own section+container -->
        <ContentBanner v-bind:banner="$page.customPage.banner"/>
        <div class="content" v-html="$page.customPage.content"></div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <ProjectPreview v-bind:projects="$page.projects"/>
      </div>
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
