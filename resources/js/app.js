require('./bootstrap');

import App from './App.vue'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import axios from 'axios'
import Vue from 'vue/dist/vue'
import { routes } from './routes'

window.Vue = Vue

Vue.use(VueRouter)
Vue.use(VueAxios, axios)

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
})
