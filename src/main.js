import Vue from 'vue';
import Element from 'element-ui';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import 'element-ui/lib/theme-default/index.css'
import App from './App';

import Home from './components/Home.vue';
import Upload from './components/Upload.vue';

Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Element);
/* eslint-disable no-new */

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    {
      path: '/',
      component: Home
    },
    {
      path: '/upload',
      component: Upload
    }
  ]
});

new Vue({
  router: router,
  template: '<App/>',
  components: { App }
}).$mount('#app');
