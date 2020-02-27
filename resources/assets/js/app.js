

require('./bootstrap');

window.Vue = require('vue');

import Datepicker from "vuejs-datepicker";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import {Dropdown} from "@dymantic/vuetilities";
import PasswordEmailRequest from "./components/PasswordEmailRequest";
import Modal from "./components/Modal";
import AddUser from "./components/AddUser";
import SlideDeleteButton from "./components/SlideDeleteButton";
import UsersApp from "./components/UsersApp";
import ArticleInfoForm from "./components/ArticleInfoForm";
import ArticlesList from "./components/ArticlesList";
import Article from "./components/Article";
import Singleupload from "./components/Singleupload";
import ArticlePublisher from "./components/ArticlePublisher";
import Editor from "./components/Editor";
import DeleteModal from "./components/DeleteModal";
import TestimonialForm from "./components/TestimonialForm";
import TestimonialsList from "./components/TestimonialsList";
import Testimonial from "./components/Testimonial";
import Toggle from "./components/Toggle";

Vue.component('dropdown', Dropdown);
Vue.component('password-email', PasswordEmailRequest);
Vue.component('modal', Modal);
Vue.component('add-user', AddUser);
Vue.component('delete-button', SlideDeleteButton);
Vue.component('user-app', UsersApp);
Vue.component('article-form', ArticleInfoForm);
Vue.component('articles-list', ArticlesList);
Vue.component('article-page', Article);
Vue.component('single-upload', Singleupload);
Vue.component('article-publisher', ArticlePublisher);
Vue.component('date-picker', Datepicker);
Vue.component('editor', Editor);
Vue.component('delete-modal', DeleteModal);
Vue.component('testimonial-form', TestimonialForm);
Vue.component('testimonials-list', TestimonialsList);
Vue.component('testimonial', Testimonial);
Vue.component('toggle-switch', Toggle);

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
