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
        <!-- TODO add status field to projects
        remember you can use v:bind:class={conditional}
        -->
        <span class="block tag is-success">Completed</span>
        <p class="block">{{ project.excerpt }}</p>
        <!-- TODO: GitHub links and topics -->
        <div class="block">
          <a href="#">GitHub</a> &bull; <a href="#">#css </a>
          <a href="#">#responsive</a>
        </div> <!-- .block -->

        <button class="button is-dark">View Details</button>
      </div> <!-- .content -->
    </div> <!-- .card-content -->
  </div> <!-- .card -->
</template>

<script>
export default {
  name: "ProjectCard",
  props: ["project"],
};
</script>
