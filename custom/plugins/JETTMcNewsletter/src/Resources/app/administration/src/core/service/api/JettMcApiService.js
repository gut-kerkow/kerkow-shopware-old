const ApiService = Shopware.Classes.ApiService;

class JettMcApiService extends ApiService {
    constructor(httpClient, loginService, apiEndpoint = 'jettmcnewsletter') {
        super(httpClient, loginService, apiEndpoint);
    }

    getLists(params) {
        const apiRoute = `${this.getApiBasePath()}/get-lists`;
        return this.httpClient.post(
            apiRoute,
            {
                params: params,
            },
            {
                headers: this.getBasicHeaders()
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        });
    }

    getList(params) {
        const apiRoute = `${this.getApiBasePath()}/get-list`;
        return this.httpClient.post(
            apiRoute,
            {
                params: params,
            },
            {
                headers: this.getBasicHeaders()
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        });
    }

    getLogs(params) {
        const apiRoute = `${this.getApiBasePath()}/get-logs`;
        return this.httpClient.get(
            apiRoute,
            {
                params: params,
                headers: this.getBasicHeaders()
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        });
    }

    save(params) {
        const apiRoute = `${this.getApiBasePath()}/save-setting`;
        return this.httpClient.post(
            apiRoute,
            {
                params: params
            },
            {
                headers: this.getBasicHeaders()
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        });
    }

    getSettings(params) {
        const apiRoute = `${this.getApiBasePath()}/get-settings`;
        return this.httpClient.get(
            apiRoute,
            {
                params: params,
                headers: this.getBasicHeaders()
            }
        ).then((response) => {
            return ApiService.handleResponse(response);
        });
    }
}

export default JettMcApiService;
