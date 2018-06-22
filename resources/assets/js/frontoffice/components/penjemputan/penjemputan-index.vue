<template>

    <div>

        <slider-tab></slider-tab>
        <promo-penjemputan></promo-penjemputan>

    </div>

</template>

<script>
    import SliderTab from './penjemputan-slider-tab.vue';
    import PromoPenjemputan from './penjemputan-promo.vue';
    export default{

        components:{
            'slider-tab' : SliderTab,
            'promo-penjemputan' : PromoPenjemputan,
        }

    }
</script>
