<template>
  <div class="columns">
    <div v-bind:key="projectEdge.node.id" v-for="projectEdge in projects.edges">
      <div class="column">
        <ProjectCard v-bind:project="projectEdge.node" />
      </div>
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