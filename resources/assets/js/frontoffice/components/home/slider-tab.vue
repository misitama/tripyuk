<template>

    <div>

        <!-- carousel & booking -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <!-- dot navigation item slider -->
            <dot-nav></dot-nav>
            <!-- end dot navigation item slider -->

            <!-- item slider -->
            <item-sliderku></item-sliderku>
            <!-- end item slider -->

            <!-- tab booking -->
            <tab-booking></tab-booking>
            <!-- end tab booking -->

            <!-- arrow navigation slider -->
            <a class="carousel-control-prev d-none d-sm-flex" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none d-sm-flex" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- end arrow navigation slider -->

        </div>
        <!-- end carousel -->

    </div>

</template>

<script>

    import DotNav from './slider-part/dot-nav.vue';
    import ItemSlider from './slider-part/item-slider.vue';
    import TabBooking from './slider-part/tab-booking.vue';

    export default {

        components:{
            'dot-nav' : DotNav,
            'item-sliderku' : ItemSlider,
            'tab-booking' : TabBooking,
        }

    }

</script>
