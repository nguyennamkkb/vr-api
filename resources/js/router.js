import Vue from "vue"
import Router from 'vue-router'
// import { component } from "vue/types/umd"
const homeapp = '/home'
const dashboardapp = '/ddashboard'

Vue.use(Router)

import indexdashboard from './asset/views/dashboard/index.vue';

const routes = [
    // dashboard
    {
        path: dashboardapp + '/index',
        component: indexdashboard
    },
    {
        path: dashboardapp + '/hook',
        component: () =>
            import ('./asset/views/dashboard/pages/hook.vue'),
        meta: 'dashboard'
    },
    {
        path: dashboardapp + '/user',
        component: () =>
            import ('./asset/views/dashboard/user/index.vue'),
        meta: 'User'
    },
    {
        path: dashboardapp + '/reader',
        component: () =>
            import ('./asset/views/dashboard/reader/index.vue'),
        meta: 'reader'
    }
]

export default new Router({
    mode: 'history',
    routes
})