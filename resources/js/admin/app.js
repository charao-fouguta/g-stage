window._ = require('lodash');
window.$ = window.jQuery = require('jquery')
window.Popper = require('popper.js').default
import Vue from 'vue';

require('bootstrap');

Vue.component('image-preview', require('./components/ImagePreview').default);
Vue.component('video-preview', require('./components/VideoPreview').default);

const app = new Vue({
    el: '#app',
});