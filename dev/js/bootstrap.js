import Vue from 'vue';

window.Vue = Vue;
import lodash from './utils/lodash';

window._ = lodash;
require("./utils/filters/global_filters");
Vue.config.productionTip = false;
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['X-WP-Nonce'] = globals.token;
