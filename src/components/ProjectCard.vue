<template>
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        {{ project.title }}
      </p>
    </header>
    <div class="card-image">
      <figure class="image is-3by2">
        <img :src="project.image_path" alt="Placeholder image" />
      </figure>
    </div>
    <div class="card-content">
      <div class="content">
        <!-- TODO add status field to projects
        remember you can use v:bind:class={conditional}
        -->
        <span class="block tag is-success">Completed</span>
        <p class="block">{{ project.excerpt }}</p>
        <!-- TODO: GitHub links and topics -->
        <div class="block">
          <a href="#">GitHub</a> &bull; <a href="#">#css </a>
          <a href="#">#responsive</a>
        </div>

        <button class="button is-dark">View Details</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProjectCard",
  props: ["project"],
};
</script>
