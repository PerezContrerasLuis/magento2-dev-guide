define(['uiComponent'],function (component){
    'use strict';
    console.log('Basic Free shipping component UI is loaded');
    return component.extend({
        initialize : function () {
            this._super();
            console.log('Extend uiComponet class');
        }
    });
});
