require('./bootstrap');

// window.Vue = require('vue')
import Vue from 'vue';
import router from './router'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

Vue.component('Dashboardapp', require('./asset/views/dashboard/dashboard.vue').default);
const app = new Vue({
    el: '#app',
    router,

})