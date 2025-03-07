define(['uiComponent'], function (component) {
    'use strict';
    console.log('Basic Free shipping component UI is loaded');
    return component.extend({
        defaults: {
            subtotal : 30.00,
            template: 'Luisdev_FreeShippingPromo/free-shipping-banner'
        },
        initialize: function () {
            this._super();
            console.log(this.message);
        },
        formatCurrency : function (value){
            return '$'+ value.toFixed(2);
        }
    });
});
