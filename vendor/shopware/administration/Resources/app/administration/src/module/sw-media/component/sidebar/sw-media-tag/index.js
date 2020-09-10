import template from './sw-media-tag.html.twig';
import './sw-media-tag.scss';

Shopware.Component.register('sw-media-tag', {
    template,

    inject: ['repositoryFactory'],

    props: {
        media: {
            type: Object,
            required: true
        }
    },

    computed: {
        mediaRepository() {
            return this.repositoryFactory.create('media');
        }
    },
    methods: {
        handleChange() {
            this.mediaRepository.save(this.media, Shopware.Context.api);
        }
    }
});