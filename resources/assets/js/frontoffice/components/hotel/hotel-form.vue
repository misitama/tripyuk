<template>

    <div>

        <slider-tab></slider-tab>
        <promo-hotel></promo-hotel>

    </div>

</template>

<script>
    import SliderTab from './hotel-slider-tab.vue';
    import PromoHotel from './hotel-promo.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-hotel' : PromoHotel,
        }

    }
</script>
