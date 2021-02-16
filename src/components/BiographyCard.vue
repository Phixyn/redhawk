<template>
  <div class="card">
    <div class="card-content">
      <div class="columns">
        <div class="column is-narrow is-pulled-right">
          <figure class="image is-128x128">
            <img
              :src="biography.profile_picture.url"
              :alt="biography.profile_picture.alt"
            />
          </figure> <!-- .image -->
        </div> <!-- .column -->

        <div class="column">
          <h2 class="title is-4">
            {{ biography.header }}
          </h2>
          <div class="content" v-html="biography.content"></div>
        </div> <!-- .column -->
      </div> <!-- .columns -->
    </div> <!-- .card-content -->
  </div> <!-- .card -->
</template>

<script>
export default {
  name: "BiographyCard",
  props: ["biography"],
};
</script>
