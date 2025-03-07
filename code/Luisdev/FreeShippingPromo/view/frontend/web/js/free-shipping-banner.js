define(['uiComponent'], function (component) {
    'use strict';
    console.log('Basic Free shipping component UI is loaded');
    return component.extend({
        defaults: {
            template: 'Luisdev_FreeShippingPromo/free-shipping-banner'
        },
        initialize: function () {
            this._super();
            console.log(this.message);
        }
    });
});
