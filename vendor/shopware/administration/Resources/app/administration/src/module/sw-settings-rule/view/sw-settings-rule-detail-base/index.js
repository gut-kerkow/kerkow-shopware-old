import { mapPropertyErrors } from 'src/app/service/map-errors.service';
import template from './sw-settings-rule-detail-base.html.twig';

Shopware.Component.register('sw-settings-rule-detail-base', {
    template,

    inject: [
        'ruleConditionDataProviderService',
        'acl'
    ],

    props: {
        rule: {
            type: Object,
            required: true
        },
        conditions: {
            type: Array,
            required: false,
            default: null
        },
        conditionRepository: {
            type: Object,
            required: true
        }
    },

    data() {
        return {
            currentConditions: null
        };
    },

    computed: {
        availableModuleTypes() {
            return this.ruleConditionDataProviderService.getModuleTypes(moduleType => moduleType);
        },

        moduleTypes: {
            get() {
                if (!this.rule || !this.rule.moduleTypes) {
                    return [];
                }
                return this.rule.moduleTypes.types;
            },
            set(value) {
                if (value === null || value.length === 0) {
                    this.rule.moduleTypes = null;
                    return;
                }
                this.rule.moduleTypes = { types: value };
            }
        },

        ...mapPropertyErrors('rule', ['name', 'priority'])
    },

    methods: {
        onConditionsChanged(event) {
            this.$emit('conditions-changed', event);
        }
    }
});
