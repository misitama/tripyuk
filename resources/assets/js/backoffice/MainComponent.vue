<template>

    <div v-if="$auth.check()">
        <top-bar></top-bar>
        <nav-bar></nav-bar>
        <div id="page-container">
            <div id="page-content">
                <div id="wrap">
                    <transition name="custom-classes-transition" enter-active-class="animated fadeIn"
                                leave-active-class="animated fadeOut">
                        <router-view></router-view>
                    </transition>
                </div> <!-- #wrap -->
            </div> <!-- page-content -->


            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li>AVANT &copy; 2015</li>
                    </ul>
                    <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i
                            class="fa fa-arrow-up"></i></button>
                </div>
            </footer>
        </div>
    </div>
    <div v-else-if="!$auth.check()">
        <div class="verticalcenter">
            <a href="/backoffice"><img src="backoffice/img/logotripyuk.png" alt="Logo" class="brand"/></a>
            <transition
                    name="custom-classes-transition"
                    enter-active-class="animated fadeIn"
                    leave-active-class="animated fadeOut"
            >
                <router-view></router-view>
            </transition>

        </div>
    </div>


</template>
<style>
    .slide-fade-enter-active {
        transition: all .3s ease;
    }

    .slide-fade-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active below version 2.1.8 */
    {
        transform: translateX(10px);
        opacity: 0;
    }
</style>
<script>
    import NavBar from './components/partials/NavBarComponent.vue';
    import TopBar from './components/partials/TopBarComponent.vue';
    export default{
        data(){

            return {}
        },
        components: {
            'nav-bar': NavBar,
            'top-bar': TopBar
        },
        created:function(){
            console.log(this.$auth);
        },
        beforeMount: function () {
            if (this.$auth.check()) {
                $('body').addClass('horizontal-nav').removeClass('focusedform');
            } else {
                $('body').addClass('focusedform').removeClass('horizontal-nav');
            }
        },
        methods: {
            logout(){
                runWaitMe('body', 'progressBar', 'Loging out, please wait...');
                var app = this;

                this.$auth.logout({
                    url: '/auth/logout',
                    method: 'POST',
                    success: function (resp) {
                        $('body').waitMe('hide');
                    },
                    error: function () {

                    },
                    redirect: '/'
                });
            }
        }
    }
</script>