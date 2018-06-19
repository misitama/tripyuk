<template>

    <div>

        <slider-tab></slider-tab>
        <promo-tiket-pesawat></promo-tiket-pesawat>

    </div>

</template>

<script>
    import SliderTab from './slider-tab.vue';
    import PromoTiketPesawat from './pesawat-promo-tiket.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-tiket-pesawat' : PromoTiketPesawat,
        }

    }
</script>