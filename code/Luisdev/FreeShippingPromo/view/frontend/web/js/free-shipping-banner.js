define(['uiComponent','Magento_Customer/js/customer-data','underscore'], function (component,customerData,_) {
    'use strict';
    console.log('Basic Free shipping component UI is loaded');
    return component.extend({
        defaults: {
            subtotal : 0.00,
            template: 'Luisdev_FreeShippingPromo/free-shipping-banner',
            tracks: {
                subtotal: true
            }
        },
        initialize: function () {
            this._super();

            var self = this;
            var cart = customerData.get('cart');

            customerData.getInitCustomerData().done(function() {
                if (!_.isEmpty(cart()) && !_.isUndefined(cart().subtotalAmount)) {
                    self.subtotal = parseFloat(cart().subtotalAmount);
                }
            });
            cart.subscribe(function(cart) {
                if (!_.isEmpty(cart) && !_.isUndefined(cart.subtotalAmount)) {
                    self.subtotal = parseFloat(cart.subtotalAmount);
                }
            });
        },
        formatCurrency : function (value){
            return '$'+ value.toFixed(2);
        }
    });
});
