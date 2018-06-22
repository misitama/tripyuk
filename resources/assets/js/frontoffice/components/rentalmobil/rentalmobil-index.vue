<template>

    <div>

        <slider-tab></slider-tab>
        <promo-rental-mobil></promo-rental-mobil>

    </div>

</template>

<script>
    import SliderTab from './rentalmobil-slider-tab.vue';
    import PromoRentalMobil from './rentalmobil-promo.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-rental-mobil' : PromoRentalMobil,
        }

    }
</script>
