define(['uiComponent'], function (component) {
    'use strict';
    console.log('Basic Free shipping component UI is loaded');
    return component.extend({
        defaults: {
            message: 'Default Message',
            template: 'Luisdev_FreeShippingPromo/free-shipping-banner'
        },
        initialize: function () {
            this._super();
            console.log(this.message);
        }
    });
});
