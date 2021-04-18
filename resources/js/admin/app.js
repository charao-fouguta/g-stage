window._ = require('lodash');
window.$ = window.jQuery = require('jquery')
window.Popper = require('popper.js').default
import Vue from 'vue';

require('bootstrap');

Vue.component('news-drop-preview', require('./components/news/DropPreview').default);

const app = new Vue({
    el: '#app',
});