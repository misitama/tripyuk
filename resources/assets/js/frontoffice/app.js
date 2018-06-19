import Vue from 'vue';
import VueRouter from 'vue-router';
import Axios from 'axios';
import VueAxios from 'vue-axios';
import VueDateTime from 'vue-datetime';
import Luxon from 'luxon';
import VueCurrencyFilter from 'vue-currency-filter';
import BootstrapVue from 'bootstrap-vue';
import VueLoading from 'vue-loading-overlay';
import VueSweetalert2 from 'vue-sweetalert2';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'vue-loading-overlay/dist/vue-loading.min.css';
import Routes from './routers';
import MainApp from './main.vue';

Vue.use(VueRouter);
Vue.use(VueAxios,Axios);
Vue.use(VueDateTime);
Vue.use(BootstrapVue);
Vue.use(VueLoading);
Vue.use(VueSweetalert2);

Axios.defaults.baseURL = 'http://tripyuk.com/api';

const routers = new VueRouter({
    linkActiveClass:'active',
    routes: Routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
});

Vue.router = routers;

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});

Vue.use(VueCurrencyFilter,
    {
        symbol : 'Rp',
        thousandsSeparator: '.',
        fractionCount: 0,
        fractionSeparator: ',',
        symbolPosition: 'front',
        symbolSpacing: true
    });

MainApp.router = Vue.router;


new Vue(MainApp).$mount('#app');
