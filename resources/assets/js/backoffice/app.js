import Vue from 'vue';
import VueRouter from 'vue-router';
import Axios from 'axios';
import VueAxios from 'vue-axios';
import vueLoading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.min.css';
import MainApp from './MainComponent';
import Routes from './routes';
Vue.use(VueRouter);
Vue.use(VueAxios,Axios);
Vue.use(vueLoading);

Axios.defaults.baseURL = 'http://backoffice.tripyuk.com/api';

const router = new VueRouter({
    linkActiveClass:'active',
    routes: Routes
});

Vue.router = router;

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});

MainApp.router = Vue.router;


new Vue(MainApp).$mount('#app');