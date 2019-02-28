
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
Vue.config.devtools = true;
import Sidebar from './components/admin/Sidebar.vue'
import Dashboard from './components/admin/Dashboard.vue'
import Couponcreate from './components/admin/Couponcreate.vue'
import Createshopkeeper from './components/admin/Createshopkeeper.vue'
import AdminRouter from './components/admin/AdminRouter'
import Banner from './components/admin/Banner'
import Datepicker from 'vuejs-datepicker';


const routes = [
    {
        path: '/admin',
        component: AdminRouter,
        children: [
            { path: 'dashboard', component: Dashboard },
            { path: 'create-coupon', component: Couponcreate },
            { path: 'create-shopkeeper',component: Createshopkeeper},
            { path: 'manage-banner', component:Banner}
        ]
    },
    // {path : '/admim/createcoupon',component:Couponcreate}
]


const router = new VueRouter({
    routes // short for `routes: routes`
})

Vue.component('sidebar', Sidebar);

new Vue({
    el: '.wrapper',
    //components: {Sidebar},
    router,
    mounted() {
        console.log('Component mounted.')
    }

});



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('adminsidebar-component',require('./components/admin/sidebar.vue').default)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//let MysidebarComponent = Vue.component(require('./components/admin/Sidebar.vue'));
// const app = new Vue({
//     el: '#app'
// });