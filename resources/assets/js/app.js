
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('sidebar-component', require('./components/snippets/SideBar.vue'));
Vue.component('navbar-component', require('./components/snippets/NavBar.vue'));
Vue.component('footer-component', require('./components/snippets/Footer.vue'));
Vue.component('main-component', require('./components/Main.vue'));
Vue.component('home-component', require('./components/dashboard/Home.vue'));
Vue.component('invoices-component', require('./components/dashboard/Invoices.vue'));

const app = new Vue({
    el: '#app'
});
