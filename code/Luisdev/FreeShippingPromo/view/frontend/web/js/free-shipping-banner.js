define(['uiComponent'],function (component){
    'use strict';
    console.log('Basic Free shipping component UI is loaded');
    return component.extend({
        defaults : {
          message : 'Default Message' + '^_^'
        },
        initialize : function () {
            this._super();
            console.log(this.message);
        }
    });
});
