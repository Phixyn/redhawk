// Server API makes it possible to hook into various parts of Gridsome
// on server-side and add custom data to the GraphQL data layer.
// Learn more: https://gridsome.org/docs/server-api/

// Changes here require a server restart.
// To restart press CTRL + C in terminal and run `gridsome develop`

module.exports = function(api) {
  api.loadSource(({ addCollection }) => {
    // Use the Data Store API here: https://gridsome.org/docs/data-store-api/
  });

  api.createPages(async ({ createPage, graphql }) => {
    // Fetch all Strapi projects with GraphQL
    const { data } = await graphql(`
      {
        strapi {
          projects {
            slug
          }
        }
      }
    `);

    /* Create a page for each project and add the slug to the context, so that
     * it can be accessed in '<page-query>' and '$context'. This is useful for
     * filtering projects like so:
     *
     * query ($slug: String!) {
     *   strapi {
     *     projects (where: { slug: $slug }) {
     *       name
     *       etc
     *     }
     *   }
     * }
     *
     * Notice that 'slug' from the 'context' object can be referenced directly
     * using the '$' operator inside '<page-query>'. Outside of <page-query>,
     * use $context.slug.
     *
     * For more information see:
     * https://gridsome.org/docs/pages-api/
     */
    data.strapi.projects.forEach((project) => {
      createPage({
        path: `/project/${project.slug}`,
        component: "./src/templates/Project.vue",
        context: {
          slug: project.slug,
        },
      });
    });
  });
};
