<template>
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        {{ project.name }}
      </p>
    </header> <!-- .card-header -->

    <div class="card-image">
      <figure class="image is-3by2">
        <img :src="project.cover_image.url" :alt="project.cover_image.alt" />
      </figure>
    </div> <!-- .card-image -->

    <div class="card-content">
      <div class="content">
        <span class="block tag is-capitalized" :class="tags[project.status]">
          {{ project.status.split("_").join(" ") }}
        </span> <!-- .block .tag -->

        <p class="block">{{ project.description }}</p>

        <div class="block">
          <span v-if="project.repository_url">
            <a :href="project.repository_url">GitHub</a> &bull;
          </span>
          <span>{{ project.programming_language }} &bull; </span>
          <span>
            {{
              project.project_technologies
                .map((technology) => technology.name)
                .join(", ")
            }}
          </span>
        </div> <!-- .block -->

        <!-- Can't make tag="g-link" work without warning, and this
          seems to work -->
        <b-button
          tag="router-link"
          :to="`/project/${project.slug}`"
          type="is-dark"
        >
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
        completed: "is-success",
        in_development: "is-info",
        on_hold: "is-light",
        planned: "is-link",
      },
    };
  },
};
</script>
