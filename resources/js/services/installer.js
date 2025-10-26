import _ from "lodash";
export default {
  install(app, modules) {
    Object.entries(modules).forEach(([path, m]) => {
      const name = "bs-" + _.kebabCase(path);

      const component = m.default ?? m;

      app.component(`${name}`, component);
    });
  },
};
