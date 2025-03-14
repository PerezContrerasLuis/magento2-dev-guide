define(['uiComponent','Magento_Customer/js/customer-data'], function (component,customerData) {
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
                self.subtotal = parseFloat(cart().subtotalAmount);
            });
        },
        formatCurrency : function (value){
            return '$'+ value.toFixed(2);
        }
    });
});
