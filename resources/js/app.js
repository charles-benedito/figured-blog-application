require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Posts from './components/Posts'
import Post from './components/Post'
import moment from 'moment'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'index',
            component: Posts,
            props: true
        },
        {
            path: '/post',
            name: 'show',
            component: Post,
            props: true
        },
    ],
});

Vue.filter('formatDate', function(value) {
    if(value) {
      return moment(String(value)).format('MM/DD/YYYY hh:mm')
    }
})

Vue.filter('truncate', function (text, length, clamp) {
    text = text || '';
    clamp = clamp || '...';
    length = length || 30;

    if (text.length <= length) return text;

    var tcText = text.slice(0, length - clamp.length);
    var last = tcText.length - 1;


    while (last > 0 && tcText[last] !== ' ' && tcText[last] !== clamp[0]) last -= 1;

    // Fix for case when text dont have any `space`
    last = last || length - clamp.length;

    tcText =  tcText.slice(0, last);

    return tcText + clamp;
  });

const app = new Vue({
    el: '#app',
    router,
    components: {  },
});
