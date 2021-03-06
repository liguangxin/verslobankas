/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import ValidationErrors from "./components/ValidationErrors";

require('./bootstrap');

window.Vue = require('vue');

Vue.mixin({
    data: function() {
        return {
            get app() {
                return window.app;
            }
        }
    }
});

import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'
Vue.use(VueAwesomeSwiper, /* { default global options } */);

import VModal from 'vue-js-modal'
Vue.use(VModal);

import Toasted from 'vue-toasted';
Vue.use(Toasted, {
    'duration': '3000',
});

import SlideUpDown from 'vue-slide-up-down'
Vue.component('slide-up-down', SlideUpDown);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./autoload-components', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('validation-errors', ValidationErrors);

const app = new Vue({
    el: '#app',
});

const body = document.getElementsByTagName('body')[0];

document.querySelectorAll('.overlay_trigger').forEach((el) => {
    el.addEventListener('click', (event) => {
        document.getElementsByTagName('body')[0].classList.toggle('no-scroll');

        if (el.dataset.overlay !== 'false') {
            document.getElementById('overlay').classList.toggle('active');
        } else {
            document.getElementById('overlay_transparent').classList.toggle('active');
        }

        if (event.currentTarget.getAttribute('data-modal')) {
            document.getElementById(event.currentTarget.getAttribute('data-modal')).classList.toggle('active');
        }
    })
});

document.querySelectorAll('.overlay_trigger_close').forEach((el) => {
    el.addEventListener('click', (event) => {
        document.getElementsByTagName('body')[0].classList.remove('no-scroll');
        document.getElementById('overlay').classList.remove('active');

        if (event.currentTarget.getAttribute('data-modal')) {
            document.getElementById(event.currentTarget.getAttribute('data-modal')).classList.remove('active');
        }
    });
});

document.addEventListener('click', (el) => {
    if (el.target.getAttribute('class') && el.target.className.includes('overlay') && el.target.className.includes('active')) {
        body.classList.remove('no-scroll');
        document.getElementById('overlay').classList.remove('active');
        document.getElementById('overlay_transparent').classList.remove('active');
        document.querySelectorAll('.modal-content.active').forEach((el) => {
            el.classList.remove('active');
        });
    }
});

document.onkeydown = function(evt) {
    evt = evt || window.event;
    let isEscape;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        body.classList.remove('no-scroll');
        document.getElementById('overlay').classList.remove('active');
        document.getElementById('overlay_transparent').classList.remove('active');
        document.querySelectorAll('.modal-content.active').forEach((el) => {
            el.classList.remove('active');
        });
    }
};

// -------------------
// Ad inner
// -------------------

const ad_more_photos = document.getElementById('ad_more_photos');

if (ad_more_photos) {
    ad_more_photos.addEventListener('click', (el) => {
        const visible_images = document.querySelectorAll('[data-fancybox].bg-cover');
        const hidden_images = document.querySelectorAll('[data-fancybox].hidden');
        let images_arr = [];

        hidden_images.forEach((image) => {
            images_arr.push({
                src: image.href,
            });
        });

        visible_images.forEach((image) => {
            images_arr.push({
                src: image.href,
            });
        });

        $.fancybox.open(images_arr, {
            loop : false
        });
    });
}

// end Ad inner

// Mobile menu

const hamburger = document.getElementById('hamburger');
const user_menu_mobile = document.getElementById('user_menu_mobile');

hamburger.addEventListener('click', function(e) {
    if (e.currentTarget.className.includes('is-active')) {
        e.currentTarget.classList.remove('is-active');
        user_menu_mobile.classList.add('hidden');
    } else {
        e.currentTarget.classList.add('is-active');
        user_menu_mobile.classList.remove('hidden');
    }
});

// end Mobile menu
