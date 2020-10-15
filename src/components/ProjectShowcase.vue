<template>
  <!-- TODO not sure if I like is-mobile here...
    prefer stacked on mobile maybe -->
  <div class="columns is-mobile is-multiline">
    <div class="column is-4" :key="project.id" v-for="project in projects">
      <ProjectCard v-bind:project="project" />
    </div> <!-- .column -->
  </div> <!-- .columns -->
</template>

<script>
import ProjectCard from "@/components/ProjectCard.vue";

export default {
  components: {
    ProjectCard,
  },
  name: "ProjectShowcase",
  props: ["projects"],
};
</script>