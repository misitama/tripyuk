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

                                    <a class="nav-link tab-link mt-2 mb-2" id="kredit-tab" data-toggle="pill" href="#kredit" role="tab" aria-controls="v-pills-kredit" aria-selected="false">
                                        Kredit Saya
                                    </a>

                                    <a class="nav-link tab-link mt-2 mb-2" id="newsletter-tab" data-toggle="pill" href="#newsletter" role="tab" aria-controls="v-pills-newsletter" aria-selected="false">
                                        Pengaturan Berlangganan
                                    </a>

                                    <a class="nav-link tab-link mt-2 mb-2" id="akun-tab" data-toggle="pill" href="#akun" role="tab" aria-controls="v-pills-akun" aria-selected="false">
                                        Akun Saya
                                    </a>

                                    <router-link class="nav-link bg-light-dark tab-link mt-2 mb-2" :to="{ name: 'home' }">
                                        Keluar
                                    </router-link>
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

                                    <div class="tab-pane fade" id="kredit" role="tabpanel" aria-labelledby="kredit-tab">

                                        <kredit></kredit>

                                    </div>

                                    <div class="tab-pane fade" id="newsletter" role="tabpanel" aria-labelledby="newsletter-tab">

                                        <newsletter></newsletter>

                                    </div>

                                    <div class="tab-pane fade" id="akun" role="tabpanel" aria-labelledby="akun-tab">

                                        <akun></akun>

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
import Kredit from './dashboard-part/dashboard-part-kredit.vue';
import Newsletter from './dashboard-part/dashboard-part-newsletter.vue';
import Akun from './dashboard-part/dashboard-part-akun.vue';

export default {
    components : {

        'dashboard' : Dashboard,
        'pesanan' : Pesanan,
        'kredit' : Kredit,
        'newsletter' : Newsletter,
        'akun' : Akun,

    }
}
</script>

<style lang="css">
</style>
