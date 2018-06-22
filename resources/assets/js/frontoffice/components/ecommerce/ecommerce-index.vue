<template>

    <div>

        <slider-tab></slider-tab>
        <promo-ecommerce></promo-ecommerce>

    </div>

</template>

<script>
    import SliderTab from './ecommerce-slider-tab.vue';
    import PromoEcommerce from './ecommerce-promo.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-ecommerce' : PromoEcommerce,
        }

    }
</script>
