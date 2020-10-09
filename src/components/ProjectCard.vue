<template>
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        {{ project.title }}
      </p>
    </header> <!-- .card-header -->

    <div class="card-image">
      <figure class="image is-3by2">
        <img :src="project.image_path" alt="Placeholder image" />
      </figure>
    </div> <!-- .card-image -->

    <div class="card-content">
      <div class="content">
        <span class="block tag" :class="tags[project.status]">
          {{project.status}}
        </span> <!-- .tag -->

        <p class="block">{{ project.excerpt }}</p>

        <div class="block">
          <a :href="project.github">GitHub</a> &bull;
          <a href="#">#{{ project.programming_language }} </a>
          <a href="#" :key="tech" v-for="tech in project.technologies">
            #{{ tech }}
          </a>
        </div> <!-- .block -->

        <!-- Can't make tag="g-link" work without warning, and this
          seems to work -->
        <b-button tag="router-link" :to="project.path" type="is-dark">
          View Details
        </b-button>
      </div> <!-- .content -->
    </div> <!-- .card-content -->
  </div> <!-- .card -->
</template>

<script>
export default {
  name: "ProjectCard",
  props: ["project"],
  data() {
    return {
      tags: {
        "Completed": "is-success",
        "In development": "is-info",
        "On hold": "is-light",
      },
    };
  },
};
</script>
