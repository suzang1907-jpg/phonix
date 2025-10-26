import { library } from "@fortawesome/fontawesome-svg-core";

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

import {
  faEye,
  faEyeSlash,
  faCog,
  faPen,
  faBars,
  faXmark,
  faHouse,
  faSquare,
  faGlobe,
  faTrash,
  faTag,
  faRotate,
  faSitemap,
  faNewspaper,
  faFont,
  faBolt,
  faLocationPin,
  faStore,
  faCheck,
  faPhone,
  faFilter,
  faCloud,
  faSignOut,
  faSearch,
  faUpRightFromSquare,
  faLink,
  faKey,
  faUsers
} from "@fortawesome/free-solid-svg-icons";

export default {
  install(app) {
    library.add(
      faEye,
      faEyeSlash,
      faCog,
      faPen,
      faBars,
      faXmark,
      faHouse,
      faSquare,
      faGlobe,
      faTrash,
      faTag,
      faRotate,
      faSitemap,
      faNewspaper,
      faFont,
      faBolt,
      faLocationPin,
      faStore,
      faCheck,
      faPhone,
      faFilter,
      faCloud,
      faSignOut,
      faSearch,
      faUpRightFromSquare,
      faLink,
      faKey,
      faUsers
    );

    app.component("font-awesome-icon", FontAwesomeIcon);
  },
};
