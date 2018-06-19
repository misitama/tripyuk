<template>

    <div>

        <slider-tab></slider-tab>
        <promo-tiket-kai></promo-tiket-kai>

    </div>

</template>

<script>
    import SliderTab from './kai-slider-tab.vue';
    import PromoTiketKai from './kai-promo-tiket.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-tiket-kai' : PromoTiketKai,
        }

    }
</script>
