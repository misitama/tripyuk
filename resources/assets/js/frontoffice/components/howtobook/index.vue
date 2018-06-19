<template>
    <div>

        <!-- image section -->
        <section class="bg-primary">
            <div class="image-section" style="background-image:url(frontoffice/img/slider2.jpg)">
            </div>
        </section>
        <!-- end image section -->

        <!-- best for you -->
        <section class="bg-white" data-aos="fade-up" data-aos-once="true" data-aos-duration="500">
            <div class="container ptb-75">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center" data-aos="fade-down" data-aos-once="true" data-aos-duration="500" data-aos-delay="500">How to Book</h2>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-3" data-aos="fade-right" data-aos-once="true" data-aos-duration="500" data-aos-delay="1000">
                        <div class="nav flex-column nav-pills" id="v-howtobook-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link tab-link mt-2 mb-2 active" id="v-howtobook-pesawat-tab" data-toggle="pill" href="#v-howtobook-pesawat" role="tab" aria-controls="v-pills-pesawat" aria-selected="true">Tiket Pesawat</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-kereta-tab" data-toggle="pill" href="#v-howtobook-kereta" role="tab" aria-controls="v-pills-kereta" aria-selected="false">Tiket Kereta Api</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-bus-tab" data-toggle="pill" href="#v-howtobook-bus" role="tab" aria-controls="v-pills-bus" aria-selected="false">Tiket Bus</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-kapal-tab" data-toggle="pill" href="#v-howtobook-kapal" role="tab" aria-controls="v-pills-kapal" aria-selected="false">Tiket Kapal</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-tour-tab" data-toggle="pill" href="#v-howtobook-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Tour</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-customtour-tab" data-toggle="pill" href="#v-howtobook-customtour" role="tab" aria-controls="v-pills-customtour" aria-selected="false">Custom Tour</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-penjemputan-tab" data-toggle="pill" href="#v-howtobook-penjemputan" role="tab" aria-controls="v-pills-penjemputan" aria-selected="false">Shuttle / Penjemputan</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-rentalmobil-tab" data-toggle="pill" href="#v-howtobook-rentalmobil" role="tab" aria-controls="v-pills-rentalmobil" aria-selected="false">Rental Mobil</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-hotel-tab" data-toggle="pill" href="#v-howtobook-hotel" role="tab" aria-controls="v-pills-hotel" aria-selected="false">Hotel</a>

                            <a class="nav-link tab-link mt-2 mb-2" id="v-howtobook-umroh-tab" data-toggle="pill" href="#v-howtobook-umroh" role="tab" aria-controls="v-pills-umroh" aria-selected="false">Umroh</a>
                        </div>
                    </div>
                    <div class="col-lg-9" data-aos="fade-left" data-aos-once="true" data-aos-duration="500" data-aos-delay="1500">
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="tab-content" id="v-howtobook-tabContent">

                                    <div class="tab-pane fade show active" id="v-howtobook-pesawat" role="tabpanel" aria-labelledby="v-howtobook-pesawat-tab">

                                        <how-to-book-pesawat></how-to-book-pesawat>

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-kereta" role="tabpanel" aria-labelledby="v-howtobook-kereta-tab">

                                        <div class="row no-gutters">
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                                        <button type="button" href="index.html" class="btn mt-2 btn-outline-primary border-white text-white">Lihat Destinasi</button>
                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                                        <button type="button" href="index.html" class="btn mt-2 btn-outline-primary border-white text-white">Lihat Destinasi</button>
                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                                        <button type="button" href="index.html" class="btn mt-2 btn-outline-primary border-white text-white">Lihat Destinasi</button>
                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                                        <button type="button" href="index.html" class="btn mt-2 btn-outline-primary border-white text-white">Lihat Destinasi</button>
                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                                        <button type="button" href="index.html" class="btn mt-2 btn-outline-primary border-white text-white">Lihat Destinasi</button>
                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                                                        <button type="button" href="index.html" class="btn mt-2 btn-outline-primary border-white text-white">Lihat Destinasi</button>
                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-bus" role="tabpanel" aria-labelledby="v-howtobook-bus-tab">

                                        bus

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-kapal" role="tabpanel" aria-labelledby="v-howtobook-kapal-tab">

                                        kapal

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-tour" role="tabpanel" aria-labelledby="v-howtobook-tour-tab">

                                        tour

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-customtour" role="tabpanel" aria-labelledby="v-howtobook-customtour-tab">

                                        custom tour

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-penjemputan" role="tabpanel" aria-labelledby="v-howtobook-penjemputan-tab">

                                        penjemputan

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-rentalmobil" role="tabpanel" aria-labelledby="v-howtobook-rentalmobil-tab">

                                        rental mobil

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-hotel" role="tabpanel" aria-labelledby="v-howtobook-hotel-tab">

                                        hotel

                                    </div>

                                    <div class="tab-pane fade" id="v-howtobook-umroh" role="tabpanel" aria-labelledby="v-howtobook-umroh-tab">

                                        umroh

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end best for you -->

    </div>
</template>

<script>

    import HowtoBookPesawat from './howtobook-pesawat.vue';

    export default {

        components:{
            'how-to-book-pesawat' : HowtoBookPesawat,
        }

    }
</script>

<style>

</style>
