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
        baseDir: "./temp-content",
        path: "**/*.md",
        remark: {
          // Remark options
        }
      },
    },
    {
      use: "@gridsome/source-filesystem",
      options: {
        typeName: "Project",
        baseDir: "./temp-content/projects",
        path: "**/*.md",
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
