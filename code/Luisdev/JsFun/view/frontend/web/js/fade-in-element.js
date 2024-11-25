define(['jquery'], function($) {
    'use strict'

    // This means keep things generic, use arguments, ...
    return function (className, duration) {
        // ...and define defaults for unpassed arguments.
        $(className).hide().fadeIn(duration || 2000);
    };
});
