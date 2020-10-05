/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import PhotoSwipe from 'photoswipe'
import PhotoSwipeUI_Default from 'photoswipe/dist/photoswipe-ui-default'
let VueScrollTo = require('vue-scrollto');
import {library as FontAwesomeLibrary} from '@fortawesome/fontawesome-svg-core'
import {faEnvelope as faEnvelopeLight} from '@fortawesome/pro-light-svg-icons'
import {faSearchPlus as faSearchPlusLight} from '@fortawesome/pro-light-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'
FontAwesomeLibrary.add(faEnvelopeLight,faSearchPlusLight);
Vue.component('font-awesome-icon', FontAwesomeIcon);

Vue.use(VueScrollTo, {
    onStart: function(element) {
        // scrolling started
        //console.log('scroll is start');
    },
    onDone: function(element) {
        // scrolling is done
        //console.log('scroll is done',element);

        // reserve for web accessiblity when nav on same page
        /*if( element.getAttribute('id') === 'Media' ){
            console.log('MEDIA');
            let focus = element.querySelectorAll('figure a')[0];
            focus.focus();
            console.log('focus on', focus);
        }*/
    },
    onCancel: function() {
        // scrolling has been interrupted
    },
});

const app = new Vue({
    el: '#app',
});

window.PhotoSwipe = PhotoSwipe;
window.PhotoSwipeUI_Default = PhotoSwipeUI_Default;
window.InitPhotoSwipeFromDOM = require('./vendor/photoswipe/initialize');
window.InitPhotoSwipeFromDOM.init('.gallery');
