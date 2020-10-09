<template>
  <!-- TODO rename this component to ProjectShowcase -->
  <!-- TODO not sure if I like is-mobile here...
    prefer stacked on mobile maybe -->
  <div class="columns is-mobile is-multiline">
    <div
      class="column is-4"
      :key="projectEdge.node.id"
      v-for="projectEdge in projects.edges"
    >
      <ProjectCard v-bind:project="projectEdge.node" />
    </div> <!-- .column -->
  </div> <!-- .columns -->
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