<template>
    <div>

        <form-tour></form-tour>

        <section>

            <div class="container ptb-75">

                <!-- content -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-3"><b>Valid Until :</b> 29 Juni 2018</small>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-3"><b>Valid Until :</b> 29 Juni 2018</small>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-3"><b>Valid Until :</b> 29 Juni 2018</small>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-3"><b>Valid Until :</b> 29 Juni 2018</small>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </div>
</template>

<script>

import FormKustomTour from './tour-kustom-part-index.vue';

export default {

    components : {

        'form-tour' : FormKustomTour,

    }

}
</script>

<style lang="css">
</style>
