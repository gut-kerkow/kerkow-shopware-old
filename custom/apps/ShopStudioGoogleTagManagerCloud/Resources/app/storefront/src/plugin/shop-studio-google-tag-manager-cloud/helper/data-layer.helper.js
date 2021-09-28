import Console from './console.helper';

/**
 * @since 1.0.0
 */
export default class DataLayer {

    /**
     * @since 1.0.0
     *
     * @param {object} data
     * @param {boolean} debugEnabled
     */
    static push(data, { debugEnabled = false }) {
        if (!window.dataLayer) {
            Console.error('No data GTM layer found. Maybe the container ID is missing?');
            return;
        }

        if (debugEnabled) {
            Console.log(`Pushed data to GTM data layer:`, data);
        }

        window.dataLayer.push(data);
    }
}
