import template from './sendcloud-welcome.html.twig';

const { Component } = Shopware;

Component.register('sendcloud-welcome', {
    template,

    inject: [
        'sendcloudService'
    ],

    data() {
        return {
            isLoading: false,
        };
    },

    methods: {
        startAuthProcess: function () {
            return this.sendcloudService.getRedirectUrl()
                .then((apiResponse) => {
                    this.redirectToConnectionScreenAndStartChecking(apiResponse.redirectUrl);
                }).catch(error => {
                    console.log(error);
                });
        },

        redirectToConnectionScreenAndStartChecking: function (redirectUrl) {
            this.isLoading = true;
            var win = window.open(redirectUrl, '_blank');
            win.focus();
            this.checkStatus();
        },

        checkStatus: function () {
            this.sendcloudService.checkConnectionStatus()
                .then((apiResponse) => {
                    if (apiResponse.isConnected) {
                        window.location.reload();
                    } else {
                        var handler = this.checkStatus;
                        setTimeout(handler, 250);
                    }
                }).catch(error => {
                console.log(error);
            });
        }
    }
});