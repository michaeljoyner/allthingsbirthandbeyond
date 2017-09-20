

require('./bootstrap');

window.Vue = require('vue');

import Datepicker from "vuejs-datepicker";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('password-email', require('./components/PasswordEmailRequest.vue'));
Vue.component('modal', require('./components/Modal.vue'));
Vue.component('add-user', require('./components/AddUser.vue'));
Vue.component('delete-button', require('./components/SlideDeleteButton.vue'));
Vue.component('user-app', require('./components/UsersApp.vue'));
Vue.component('article-form', require('./components/ArticleInfoForm.vue'));
Vue.component('articles-list', require('./components/ArticlesList.vue'));
Vue.component('article-page', require('./components/Article.vue'));
Vue.component('single-upload', require('./components/Singleupload.vue'));
Vue.component('article-publisher', require('./components/ArticlePublisher.vue'));
Vue.component('date-picker', Datepicker);
Vue.component('editor', require('./components/Editor.vue'));
Vue.component('delete-modal', require('./components/DeleteModal.vue'));
Vue.component('testimonial-form', require('./components/TestimonialForm.vue'));
Vue.component('testimonials-list', require('./components/TestimonialsList.vue'));
Vue.component('testimonial', require('./components/Testimonial.vue'));
Vue.component('toggle-switch', require('./components/Toggle.vue'));

window.eventHub = new Vue();
window.swal = require('sweetalert');

const app = new Vue({
    el: '#app',

    created() {
        eventHub.$on('user-alert', this.showAlert)
    },

    methods: {
        showAlert(message) {
            swal({
                type: message.type,
                title: message.title,
                text: message.text,
                showConfirmButton: message.confirm
            });
        }
    }
});
