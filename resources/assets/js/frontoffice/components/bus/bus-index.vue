<template>

    <div>

        <slider-tab></slider-tab>
        <promo-tiket-bus></promo-tiket-bus>

    </div>

</template>

<script>
    import SliderTab from './bus-slider-tab.vue';
    import PromoTiketBus from './bus-promo-tiket.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-tiket-bus' : PromoTiketBus,
        }

    }
</script>
