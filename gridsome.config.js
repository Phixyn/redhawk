// This is where project configuration and plugin options are located.
// Learn more: https://gridsome.org/docs/config

// Changes here require a server restart.

const path = require("path");

// Load global sass/scss pre-processor files. See:
// https://gridsome.org/docs/assets-css/#global-preprocessor-files-ie-variables-mixins
function addStyleResource(rule) {
  rule
    .use("style-resource")
    .loader("style-resources-loader")
    .options({
      patterns: [
        // Be careful to use the correct path(s)
        // path.resolve(__dirname, './src/assets/sass/*.sass'),
        // path.resolve(__dirname, './src/assets/sass/_globals.scss'),
        // path.resolve(__dirname, './src/assets/sass/_globals.scss'),
        path.resolve(__dirname, "./src/assets/*.scss"),
      ],
    });
}

module.exports = {
  siteName: "Alpeche Pancha",
  siteUrl: "http://www.phixyn.com",
  chainWebpack(config) {
    // https://gridsome.org/docs/assets-css/#global-preprocessor-files-ie-variables-mixins
    // Load variables for all vue-files
    const types = ["vue-modules", "vue", "normal-modules", "normal"];

    // types.forEach(type => {
    //   addStyleResource(config.module.rule('sass').oneOf(type))
    // })

    types.forEach((type) => {
      addStyleResource(config.module.rule("scss").oneOf(type));
    });
  },
  plugins: [
    {
      use: "@gridsome/source-graphql",
      options: {
        url: (process.env.STRAPI_URL || "http://localhost:1337") + "/graphql",
        fieldName: "strapi",
        typeName: "strapiTypes",
      },
    },
  ],
};
