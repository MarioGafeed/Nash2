require('./bootstrap');

window.Vue = require('vue');

import VeeValidate, { Validator } from 'vee-validate';
import ar from 'vee-validate/dist/locale/ar';

// Localize takes the locale object as the second argument (optional) and merges it.
Validator.localize('ar', ar);

// Install the Plugin.
Vue.use(VeeValidate);

Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};
