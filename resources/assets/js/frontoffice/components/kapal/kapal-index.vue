<template>

    <div>

        <slider-tab></slider-tab>
        <promo-tiket-kapal></promo-tiket-kapal>

    </div>

</template>

<script>
    import SliderTab from './kapal-slider-tab.vue';
    import PromoTiketKapal from './kapal-promo-tiket.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-tiket-kapal' : PromoTiketKapal,
        }

    }
</script>
