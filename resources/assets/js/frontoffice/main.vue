<template>

    <div>

        <header-nav></header-nav>

        <div class="konten">
            <router-view></router-view>
        </div>

        <footer-main></footer-main>

        <chat></chat>

    </div>

</template>

<script>
    //
    import HeaderNav from './components/partials/header.vue';
    import MainFooter from './components/partials/footer.vue';
    import ModalsApp from './components/partials/modal.vue';
    import Chat from './components/partials/partials-whatsapp.vue';

    export default {
        data(){
            return{

            }
        },
        components:{
            'header-nav':HeaderNav,
            'footer-main' : MainFooter,
            'modals-app' : ModalsApp,
            'chat' : Chat,
        }
    }
</script>
