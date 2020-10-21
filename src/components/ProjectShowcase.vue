<template>
  <div class="columns is-multiline">
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