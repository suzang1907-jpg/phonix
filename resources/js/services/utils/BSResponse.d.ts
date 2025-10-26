interface BSResponseData {
    status: string;
    data?: any;
    redirect?: string | URL | undefined;
}
declare class BSResponse {
    response: BSResponseData;
    constructor(response: BSResponseData);
    static error(response: BSResponseData): BSResponse;
    static done(response: BSResponseData): BSResponse;
    ok(): boolean;
    data(key?: null): any;
    redirect(target?: string, features?: undefined): Window | null | undefined;
}
export default BSResponse;
