import Vue from 'vue';
import VueRouter from 'vue-router';
import Axios from 'axios';
import VueAxios from 'vue-axios';
import vueLoading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.min.css';
import MainApp from './MainComponent';
import Routes from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, Axios);
Vue.use(vueLoading);

Axios.defaults.baseURL = 'http://backoffice.tripyuk.com/api';

const router = new VueRouter({
    linkActiveClass: 'active',
    routes: Routes
});

Vue.router = router;

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});
const generalPlugin = {
    install(Vue,options){
        Vue.prototype.$storeData = (app, url, param, notifMessage, reloadedTable) => {
            runWaitMe('body','progressBar','saving data please wait...');

            app.$http.post(url, param)
                .then((response) => {
                    $('#modalInput').modal('hide').on('hidden.bs.modal',function () {
                        $('body').waitMe('hide');
                        notificationMessage(notifMessage, 'success');
                        $('#'+reloadedTable).bootgrid('reload');
                    });

                })
                .catch((error) => {
                    $('body').waitMe('hide');
                    notificationMessage(error, 'error');
                })
        };

        Vue.prototype.$readData = (app,url) => {
           let loading =  app.$loading.show();

            return app.$http.get(url)
                .then((response) => {
                    loading.hide();
                   return response.data.result;
                })
                .catch((error) => {
                    loading.hide();
                    notificationMessage(error,'error');
                });
        };

        Vue.mixin({
            data(){
                return{
                    state:'add',
                    modalTitle:'',
                    disabledElement:false,
                    result:{},
                    isError:false,
                    errorMessage:'',

                }
            },
            beforeMount: function () {
                if (this.$auth.check()) {
                    $('body').addClass('horizontal-nav').removeClass('focusedform');
                } else {
                    $('body').addClass('focusedform').removeClass('horizontal-nav');
                }
            },
        });
    }

};

Vue.use(generalPlugin);
MainApp.router = Vue.router;

new Vue(MainApp).$mount('#app');

// new Vue({
//     el:'#app',
//     router:router,
//     render:app =>app(MainApp)
// });