<template>

   <div>

      <konten-slider></konten-slider>

      <konten-best-deals></konten-best-deals>

      <konten-best-for-you></konten-best-for-you>

      <konten-mengapa-tripyuk></konten-mengapa-tripyuk>

      <konten-partner></konten-partner>

   </div>

</template>

<script>

    import SliderTab from './slider-tab.vue';
    import BestDeals from './best-deals.vue';
    import BestForYou from './best-for-you.vue';
    import MengapaTripyuk from './mengapa-tripyuk.vue';
    import Partner from './partner.vue';

    export default {
        components:{
            'konten-slider' : SliderTab,
            'konten-best-deals' : BestDeals,
            'konten-best-for-you' : BestForYou,
            'konten-mengapa-tripyuk' : MengapaTripyuk,
            'konten-partner' : Partner,
        }

    }
</script>
