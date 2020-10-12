<template>
  <Layout>
    <div v-html="$page.customPage.content"></div>
  </Layout>
</template>

<page-query>
query CustomPage ($path: String!) {
  customPage: customPage (path: $path) {
    title
    content
  }
}
</page-query>

<script>
export default {
  // Has to be a function because of `this` I think
  // `this` points to the vm instance
  metaInfo() {
    return {
      title: this.$page.customPage.title
    }
  }
}
</script>