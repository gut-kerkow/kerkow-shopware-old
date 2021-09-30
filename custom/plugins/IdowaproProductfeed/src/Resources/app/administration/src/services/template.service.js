
const ApiService = Shopware.Classes.ApiService;

/**
 * @class
 * @property {AxiosInstance} httpClient
 */
export default class TemplateService extends ApiService {
    
    constructor(httpClient, loginService, apiEndpoint = 'productfeed') {
        super(httpClient, loginService, apiEndpoint);
        this.fetchGoogleTemplate();
        // this.fetchIdealoTemplate();
    }

    async fetchDefaults(name) {
        switch(name) {
            case 'google':
                return (await this.fetchGoogleTemplate()).data;
            case 'idealo':
                return (await this.fetchIdealoTemplate()).data;
            case 'empty':
                return "";
            default:
                throw 'no template found';
        }
    }

    async fetchGoogleTemplate() {
        let headers = this.getBasicHeaders();
        let response = await this.httpClient.get(
            `_action/${this.getApiBasePath()}/googleTemplate`,
            {
                headers
            }
        )
        return response;
    }

    async fetchIdealoTemplate() {
        let headers = this.getBasicHeaders();
        let response = await this.httpClient.get(
            `_action/${this.getApiBasePath()}/idealoTemplate`,
            {
                headers
            }
        )
        return response;
    }
}