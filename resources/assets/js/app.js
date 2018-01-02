import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VeeValidate from 'vee-validate'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
window.Vue = require('vue');
**/

Vue.use(VueRouter);
Vue.use(VeeValidate);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar', require('./components/Layouts/Navbar.vue'));

const router = new VueRouter({
  mode: 'history',
  routes: [
    {path: '/', component: require('./components/Top.vue') },
    {path: '/index', component: require('./components/Artists/Index.vue') },
    {path: '/about', component: require('./components/About.vue') },
    {path: '/new', component: require('./components/Artists/New.vue') },
    {name: 'Show', path: '/show/:artist_id', component: require('./components/Artists/Show.vue') }
  ],
  scrollBehavior (to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  }
});

var app = new Vue({
    router
}).$mount('#vueApp');
