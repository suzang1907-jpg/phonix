import _ from "lodash";

export default {
  install(app) {
    const componentFiles = import.meta.glob("../views/**/*.vue", {
      eager: true,
    });

    Object.entries(componentFiles).forEach(([path, m]) => {
      var componentName = _.lowerCase(
        _.camelCase(
          path
            .split("/")
            .pop()
            .replace(/\.\w+$/, "")
        )
      );

      var componentPath = path;

      if (componentPath.startsWith("../views/")) {
        componentPath = componentPath.split("../views/").pop();
      }

      const splittedPath = componentPath.split("/");

      splittedPath.pop();

      var resolvedPath = "";

      for (const p of splittedPath) {
        resolvedPath += p + "-";
      }

      resolvedPath += componentName;

      const component = m.default ?? m;

      app.component(`${resolvedPath}`, component);
    });
  },
};
