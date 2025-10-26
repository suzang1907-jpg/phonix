class ApiResponse {
  constructor(status, data) {
    this.status = status;
    this.data = data;
  }
  static error(data) {
    return new ApiResponse("error", data);
  }

  static done(data) {
    return new ApiResponse("done", data);
  }

  ok() {
    return this.status == "done";
  }

  getData(key) {
    return this.data[key] ?? null;
  }
}

export default ApiResponse;
