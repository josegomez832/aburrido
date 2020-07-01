require('./bootstrap');

window.Vue = require('vue');

Vue.component('member', require('./components/MembersListings.vue').default);
Vue.component('birthdays', require('./components/Birthdays.vue').default);
const app = new Vue({
    el: '#table-view'
});
