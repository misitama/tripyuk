<template>

    <div>

        <!-- tab booking -->
        <div class="container">
                <div class="row">

                    <div class="col-lg-7 d-sm-absolute absolute-carousel mr-auto">
                        <div class="row bg-dark-transparent tab-head">

                            <ul class="nav nav-pills" id="book-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link ml-0 tab-link-rounded active" id="book-pesawat-tab" data-toggle="pill" href="#book-pesawat" role="tab" aria-controls="pills-pesawat" aria-selected="true">
                                        <span class="icon-menu mr-0">
                                            <img src="frontoffice/icons/pesawat.png" alt="">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-kereta-tab" data-toggle="pill" href="#book-kereta" role="tab" aria-controls="pills-hotel" aria-selected="true">
                                        <span class="icon-menu mr-0">
                                            <img src="frontoffice/icons/kereta.png" alt="">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-bus-tab" data-toggle="pill" href="#book-bus" role="tab" aria-controls="pills-kai" aria-selected="true">
                                        <span class="icon-menu mr-0">
                                            <img src="frontoffice/icons/bus.png" alt="">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-kapal-tab" data-toggle="pill" href="#book-kapal" role="tab" aria-controls="pills-pesawathotel" aria-selected="true">
                                        <span class="icon-menu mr-0">
                                            <img src="frontoffice/icons/kapal.png" alt="">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-hotel-tab" data-toggle="pill" href="#book-hotel" role="tab" aria-controls="pills-aktivitas" aria-selected="true">
                                        <span class="icon-menu mr-0">
                                            <img src="frontoffice/icons/hotel.png" alt="">
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="row bg-black-transparent pt-3 pb-2 book-tab-content">

                            <div class="col-lg-12">

                                <div class="tab-content text-left" id="book-tabContent">

                                    <!-- tab content pesawat -->
                                    <div class="tab-pane fade show active" id="book-pesawat" role="tabpanel" aria-labelledby="book-pesawat-tab">

                                        <tab-pesawat></tab-pesawat>

                                    </div>
                                    <!-- end tab content pesawat -->

                                    <!-- tab content kereta api -->
                                    <div class="tab-pane fade" id="book-kereta" role="tabpanel" aria-labelledby="book-kereta-tab">

                                        <tab-kereta></tab-kereta>

                                    </div>
                                    <!-- end tab content kereta api -->

                                    <!-- tab content bus -->
                                    <div class="tab-pane fade" id="book-bus" role="tabpanel" aria-labelledby="book-bus-tab">

                                        <tab-bus></tab-bus>

                                    </div>
                                    <!-- end tab content bus -->

                                    <!-- tab content kapal -->
                                    <div class="tab-pane fade" id="book-kapal" role="tabpanel" aria-labelledby="book-kapal-tab">

                                        <tab-kapal></tab-kapal>

                                    </div>
                                    <!-- end tab content kapal -->

                                    <!-- tab content hotel -->
                                    <div class="tab-pane fade" id="book-hotel" role="tabpanel" aria-labelledby="book-hotel-tab">

                                        <tab-hotel></tab-hotel>

                                    </div>
                                    <!-- end tab content hotel -->

                                </div>

                            </div>

                        </div>
                        <div class="row bg-dark-transparent tab-footer pt-2 pb-2">
                            <div class="col-lg-12">
                                <a class="text-white" href="#">Tripyuk Best Price Guarantee</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <!-- end tab booking -->

    </div>

</template>

<script>

import TabPesawat from './tab-booking/tab-booking-pesawat.vue';
import TabKereta from './tab-booking/tab-booking-kereta.vue';
import TabBus from './tab-booking/tab-booking-bus.vue';
import TabKapal from './tab-booking/tab-booking-kapal.vue';
import TabHotel from './tab-booking-part/hotel.vue';

export default {
    data(){
        return{

        }

    },
    components:{

        'tab-pesawat'   : TabPesawat,
        'tab-kereta'   : TabKereta,
        'tab-bus'   : TabBus,
        'tab-kapal'   : TabKapal,
        'tab-hotel'     : TabHotel,

    },
}
</script>
