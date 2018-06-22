<template>
    <div>

        <section>
            <div class="container ptb-75">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="image-ava" style="background:url(frontoffice/img/promo/promo-1.jpg)"></div>
                            </div>
                            <div class="col-lg-8">
                                <h6>Your Name</h6>
                                <small class="font-italic">Customer</small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="nav flex-column nav-pills" id="dashboardMenuTab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link tab-link mt-2 mb-2 active" id="dashboard-tab" data-toggle="pill" href="#dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
                                        Dashboard
                                    </a>

                                    <a class="nav-link tab-link mt-2 mb-2" id="pesanan-tab" data-toggle="pill" href="#pesanan" role="tab" aria-controls="v-pills-pesanan" aria-selected="false">
                                        Pesanan Anda
                                    </a>

                                    <a class="nav-link tab-link mt-2 mb-2" id="v-bestforyou-hotelterpopuler-tab" data-toggle="pill" href="#v-bestforyou-hotelterpopuler" role="tab" aria-controls="v-pills-hotelterpopuler" aria-selected="false">Hotel Terpopuler</a>

                                    <a class="nav-link tab-link mt-2 mb-2" id="v-bestforyou-ruteterbang-tab" data-toggle="pill" href="#v-bestforyou-ruteterbang" role="tab" aria-controls="v-pills-ruteterbang" aria-selected="false">Rute Terbang Terpopuler</a>

                                    <a class="nav-link tab-link mt-2 mb-2" id="v-bestforyou-aktivitas-tab" data-toggle="pill" href="#v-bestforyou-aktivitas" role="tab" aria-controls="v-pills-aktivitas" aria-selected="false">Aktivitas Terpopuler</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-content" id="dashboardMenuTabContent">

                                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                                        <dashboard></dashboard>

                                    </div>

                                    <div class="tab-pane fade" id="pesanan" role="tabpanel" aria-labelledby="pesanan-tab">

                                        <pesanan></pesanan>

                                    </div>

                                    <div class="tab-pane fade" id="v-bestforyou-hotelterpopuler" role="tabpanel" aria-labelledby="v-bestforyou-hotelterpopuler-tab">

                                        <div class="row no-gutters">
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="v-bestforyou-ruteterbang" role="tabpanel" aria-labelledby="v-bestforyou-ruteterbang-tab">

                                        <div class="row no-gutters">
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="v-bestforyou-aktivitas" role="tabpanel" aria-labelledby="v-bestforyou-aktivitas-tab">

                                        <div class="row no-gutters">
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-lg-4 pb-3 pl-2 pr-2 ">
                                                <a class="image-link" href="index.html">
                                                    <div class="image-caption-absolute">
                                                        <h5>Destination</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur </p>

                                                    </div>
                                                    <div class="overlay-primary" style="background-image:url(frontoffice/img/slider4.jpg)">
                                                    </div>

                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>

import Dashboard from './dashboard-part/dashboard-part-detail.vue';
import Pesanan from './dashboard-part/dashboard-part-pesanan.vue';

export default {
    components : {

        'dashboard' : Dashboard,
        'pesanan' : Pesanan,

    }
}
</script>

<style lang="css">
</style>
