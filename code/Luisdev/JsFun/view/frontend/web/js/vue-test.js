define(['vue'], function (Vue) {
    'use strict';

    return function (config, element) {
        if (typeof Vue !== 'undefined' && Vue.createApp) {
            const {createApp} = Vue;

            // Crear y montar la aplicación de Vue
            return createApp({
                el: '#' + element.id,
                data() {
                    return {
                        message: config.message
                    };
                }
            }).mount('#app');
        } else {
            console.error('Vue.js failed to load. Check the Vue.js URL in requirejs-config.js.');
        }
    }

});
