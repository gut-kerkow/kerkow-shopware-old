/**
 * @since 1.0.0
 */
export default class Console {

    /**
     * @since 1.0.0
     */
    static pluginName = 'Google Tag Manager (Cloud)';

    /**
     * @since 1.0.0
     *
     * @param {string} message
     * @param {any} data
     */
    static log(message, ...data) {
        console.log(`[${this.pluginName}] ${message}`, ...data);
    }

    /**
     * @since 1.0.0
     *
     * @param {string} message
     * @param {any} data
     */
    static warn(message, ...data) {
        console.warn(`[${this.pluginName}] ${message}`, ...data);
    }

    /**
     * @since 1.0.0
     *
     * @param {string} message
     * @param {any} data
     */
    static error(message, ...data) {
        console.error(`[${this.pluginName}] ${message}`, ...data);
    }
}
