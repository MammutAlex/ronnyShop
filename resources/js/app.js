/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import store from './store';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('product-cart-checkout-component', require('./components/CartCheckout'));
Vue.component('product-add-page-component', require('./components/ProductAddPage'));
Vue.component('product-add-list-component', require('./components/ProductAddList'));
Vue.component('cart-header-component', require('./components/CartHeader'));
Vue.component('product-review-component', require('./components/ProductReview'));

new Vue({
    el: '#app',
    store
});
