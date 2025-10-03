define([], function() {
    'use strict';

    return function(subject) {
        return subject.extend({
            defaults: {
                detailsTemplate: 'Luisdev_CustomCheckout/billing-address/details'
            }
        });
    };
});