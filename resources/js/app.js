/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VModal from 'vue-js-modal'
Vue.use(VModal);

import SlideUpDown from 'vue-slide-up-down'
Vue.component('slide-up-down', SlideUpDown);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

document.querySelectorAll('.overlay_trigger').forEach((el) => {
    el.addEventListener('click', (event) => {
        document.getElementsByTagName('body')[0].classList.toggle('no-scroll');
        document.getElementById('overlay').classList.toggle('active');

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
        document.getElementsByTagName('body')[0].classList.remove('no-scroll');
        document.getElementById('overlay').classList.remove('active');
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
        document.getElementsByTagName('body')[0].classList.remove('no-scroll');
        document.getElementById('overlay').classList.remove('active');
        document.querySelectorAll('.modal-content.active').forEach((el) => {
            el.classList.remove('active');
        });
    }
};
