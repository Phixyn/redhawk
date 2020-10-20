// This is the main.js file. Import global CSS and scripts here.
// The Client API can be used here. Learn more: gridsome.org/docs/client-api

import Buefy from "buefy";
import DefaultLayout from "~/layouts/Default.vue";

import "~/assets/styles.scss";

export default function(Vue, { router, head, isClient }) {
  Vue.use(Buefy);

  // Set default layout as a global component
  Vue.component("Layout", DefaultLayout);

  // Set global meta tags
  head.meta.push({
    property: "og:type",
    content: "website",
  });

  head.meta.push({
    name: "twitter:card",
    content: "summary_large_image",
  });

  head.meta.push({
    name: "twitter:site",
    content: "@phixyn",
  });

  head.meta.push({
    name: "twitter:creator",
    content: "@phixyn",
  });

  head.meta.push({
    name: "twitter:image:alt",
    content: "Alpeche Pancha's portfolio and blog.",
  });
}
