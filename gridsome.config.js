// This is where project configuration and plugin options are located.
// Learn more: https://gridsome.org/docs/config

// Changes here require a server restart.

module.exports = {
  siteName: "Redhawk",
  plugins: [
    {
      use: "@gridsome/source-filesystem",
      options: {
        typeName: "CustomPage",
        path: "./temp-content/pages/*.md",
        remark: {
          // Remark options
        }
      },
    },
    {
      use: "@gridsome/source-filesystem",
      options: {
        typeName: "Project",
        path: "./temp-content/projects/*.md",
        remark: {
          // Remark options
        }
      },
    },
  ],
  transformers: {
    remark: {
      // Global remark options
    }
  },
};
