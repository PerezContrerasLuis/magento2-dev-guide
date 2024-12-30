var config = {
    "map": {
        "*": {
            "fadeInElement": "Luisdev_JsFun/js/fade-in-element",
            "Magento_Review/js/submit-review": "Luisdev_JsFun/js/submit-review"
        }
    },
    "paths": {
        "vue": "https://unpkg.com/vue@3.5.13/dist/vue.global.prod"
    },
    "shim": {
        "Luisdev_JsFun/js/jquery-log": ["jquery"],
        "vue": {
            "exports": "Vue"
        }
    },
    "deps": ["Luisdev_JsFun/js/every-page"]
};

console.log("with PATHS vue prod");
