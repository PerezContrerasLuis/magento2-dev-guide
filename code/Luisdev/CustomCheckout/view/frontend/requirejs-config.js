let config = {
    deps: [
        'Luisdev_CustomCheckout/js/mask-telephone-inputs'
    ],
    map: {
        '*': {
            'Magento_Checkout/template/sidebar.html':
                'Luisdev_CustomCheckout/template/sidebar.html'
        }
    },
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'Luisdev_CustomCheckout/js/action/set-shipping-information-mixin': true
            },
            'Magento_Checkout/js/view/billing-address': {
                'Luisdev_CustomCheckout/js/view/billing-address-mixin': true
            }
        }
    }  
};