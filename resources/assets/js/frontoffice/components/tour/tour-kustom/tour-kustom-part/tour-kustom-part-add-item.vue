<template>
    <div>

        <form-tour></form-tour>

        <section>
            <div class="container ptb-75">
                <div class="row">
                    <div v-for="(value, index) in jumlahHari" class="col-lg-4 mb-4 border-radius">
                        <div class="bg-light pl-3 pr-3">
                            <div class="row pt-2 pb-2 border-bottom">
                                <div class="col-lg-12 text-center">
                                    <h5 class="d-block">Isi Kegiatan Tour Anda</h5>
                                    <span class="badge badge-primary d-block mt-2"><h6>Hari {{ index+1 }}</h6></span>
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 align-items-center border-bottom">
                                <div class="col-lg-12">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" v-model="pesanHotel" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">
                                            <h6>Tempat Menginap</h6>
                                        </label>
                                    </div>
                                </div>
                                <div v-if="pesanHotel != false" class="col-lg-12 mt-2">
                                    <div class="input-group m-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fa fa-plane"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Pilih Hotel">
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-2 pb-2 align-items-center border-bottom">
                                <div class="col-lg-8">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" v-model="activity" class="custom-control-input" id="activity">
                                        <label class="custom-control-label" for="activity">
                                            <h6>Activity</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button v-on:click="addActivityCount" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div v-if="activity != false" v-for="(value, index) in activityCount" class="col-lg-12 mt-2">
                                    <div class="input-group m-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fa fa-plane"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Tambah Aktivitas">
                                        <div class="input-group-append">
                                            <button v-on:click="deleteActivity" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-2 pb-2 align-items-center border-bottom">
                                <div class="col-lg-12">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" v-model="pesanTransportasi" class="custom-control-input" id="pesanTransport">
                                        <label class="custom-control-label" for="pesanTransport">
                                            <h6>Transport</h6>
                                        </label>
                                    </div>
                                </div>
                                <div v-if="pesanTransportasi != false" class="col-lg-12 mt-2">
                                    <div class="input-group m-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fa fa-plane"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Pilih Hotel">
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-2 pb-2 align-items-center border-bottom">
                                <div class="col-lg-12">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" v-model="pesanGuide" class="custom-control-input" id="pesanGuide">
                                        <label class="custom-control-label" for="pesanGuide">
                                            <h6>Guide</h6>
                                        </label>
                                    </div>
                                </div>
                                <div v-if="pesanGuide != false" class="col-lg-12 mt-2">
                                    <div class="input-group m-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fa fa-plane"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Pilih Hotel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <router-link class="btn btn-primary btn-block" :to="{ name: 'datatraveler' }">Lanjutkan</router-link>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>

import FormKustomTour from './tour-kustom-part-index.vue';

export default {
    data(){
        return {
            jumlahHari : 5,
            pesanHotel : '',
            activity : true,
            activityCount : 1,
            pesanTransportasi : '',
            pesanGuide : '',
        }
    },

    components : {

        'form-tour' : FormKustomTour,

    },

    methods : {

        addActivityCount() {
            let app = this;

            return app.activityCount++;
        },

        deleteActivity() {

            let app = this;

            return app.activityCount--;

        }

    }
}
</script>

<style lang="css">
</style>
