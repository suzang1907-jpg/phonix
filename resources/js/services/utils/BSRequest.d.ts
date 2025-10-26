import BSResponse from "./BSResponse";
interface BSRequestConfig {
    redirect?: BSRequestConfigRedirect;
    loadingOverlay: any;
}
interface BSRequestConfigRedirect {
    target: string;
    features: any;
}
declare class BSRequest {
    static post(url: string, data: null | undefined, component: any, config?: BSRequestConfig): Promise<BSResponse>;
}
export default BSRequest;
