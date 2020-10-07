<template>
  <div class="container">
    <div v-bind:key="projectEdge.node.id" v-for="projectEdge in projects.edges">
      <ProjectCard v-bind:project="projectEdge.node" />
    </div>
  </div>
</template>

<script>
import ProjectCard from "@/components/ProjectCard.vue";

export default {
  components: {
    ProjectCard,
  },
  name: "ProjectPreview",
  props: ["projects"],
};
</script>