import axios from "axios";
import ApiResponse from "./ApiResponse";

class ApiRequest {
  static async post(
    url,
    data = null,
    component,
    config = {
      hideLoadingOverlay: true,
      showLoadingOverlay: true,
      showAlert: true,
    }
  ) {
    try {
      if (config.showLoadingOverlay) {
        component.$root.loadingOverlayShow();
      }

      const response = await axios.post(url, data);

      if (!response) {
        if (config.hideLoadingOverlay) {
          component.$root.loadingOverlayHide();
        }
        if (config.showAlert) {
          component.$root.addAlert({
            title: "Error",
            text: "Something went wrong.",
            type: "error",
          });
        }
        return ApiResponse.error();
      }

      if (!response.data) {
        if (config.hideLoadingOverlay) {
          component.$root.loadingOverlayHide();
        }
        if (config.showAlert) {
          component.$root.addAlert({
            title: "Error",
            text: "Something went wrong.",
            type: "error",
          });
        }
        return ApiResponse.error();
      }

      if (response.data.status != "done") {
        if (config.hideLoadingOverlay) {
          component.$root.loadingOverlayHide();
        }
        if (config.showAlert) {
          component.$root.addAlert({
            title: "Error",
            text: "Something went wrong.",
            type: "error",
          });
        }
        const responseData = response.data.data ?? [];

        return ApiResponse.error(responseData);
      }

      const responseData = response.data.data ?? [];
      const redirect = response.data.redirect ?? null;

      const reload = responseData.reload;

      if (reload) {
        window.location.reload();
        return ApiResponse.done(responseData);
      }

      if (redirect) {
        window.open(redirect, "_self");
        return ApiResponse.done(responseData);
      }

      if (config.hideLoadingOverlay) {
        component.$root.loadingOverlayHide();
      }
      return ApiResponse.done(responseData);
    } catch (e) {}
    if (config.hideLoadingOverlay) {
      component.$root.loadingOverlayHide();
    }
    if (config.showAlert) {
      component.$root.addAlert({
        title: "Error",
        text: "Something went wrong.",
        type: "error",
      });
    }
    return ApiResponse.error();
  }
}

export default ApiRequest;
