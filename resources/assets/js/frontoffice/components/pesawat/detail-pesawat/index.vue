<template>

    <div>

        <!-- section info tiket -->
        <section class="bg-utama text-white">
            <div class="container ptb-50">

                <div class="row no-gutters pb-2">
                    <div class="col-lg-12">
                        <h5 class="pb-3">{{ searchQueries.departAirport }} / {{ searchQueries.arrivalAirport }}</h5>
                        <span>{{ searchQueries.departDate }}</span>
                        <div class="pt-3">
                            <span class="pr-4 pl-4 border-right border-left mr-1 border-white">
                                <i class="fa fa-plane mr-2"></i> {{ searchQueries.departAirport }}
                                <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i> {{ searchQueries.arrivalAirport }}
                            </span>
                            <span class="pr-4 pl-4 border-right border-left border-white">{{ paxAdult }} Dewasa, {{ paxChildren }} Anak, {{ paxInfant }} Bayi</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end section info tiket -->

        <!-- informasi tiket penerbangan -->
        <section class="bg-white">
            <div class="container ptb-50">
                <div class="row">

                    <!-- left kontent -->
                    <div class="col-lg-8">
                        <div class="row">
                            <!-- Detail Penerbangan -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-white pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h5 class="card-title p-0 m-0">
                                                    <span class="">
                                                        <i class="fa fa-plane mr-2 text-primary fa-lg"></i>
                                                        {{ searchData.departCity }} ( {{ searchData.departId }} )
                                                        <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i>
                                                        {{ searchData.arrivalCity }} ( {{ searchData.arrivalId }} )
                                                    </span>
                                                </h5>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <a class="pointer text-primary" @click="showModal()">Lihat Detail Penerbangan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">{{ searchData.departDate }}</h5>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-lg-2">
                                                <div class="img-icon-5 text-center">
                                                    <img class="w-100" :src="searchData.maskapai_logo" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <h6 class="mb-1">{{ searchData.maskapai }}</h6>
                                                <span>{{ searchData.stop }}</span>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row align-items-center text-center">
                                                    <div class="col-lg-4">
                                                        <span><h4>{{ searchData.departTime }}</h4></span>
                                                        <span>{{ searchData.departCity }} ( {{ searchData.departId }} )</span>
                                                    </div>

                                                    <div class="col-lg-1">
                                                        <i class="fa fa-long-arrow-alt-right"></i>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <span><h4>{{ searchData.arrivalTime }}</h4></span>
                                                        <span>{{ searchData.arrivalCity }} ( {{ searchData.arrivalId }} )</span>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <span><h4>{{ searchData.duration_time }}</h4></span>
                                                        <span>{{ searchData.stop }}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end Detail Penerbangan -->

                            <!-- detail harga -->
                            <div class="col-lg-12 mt-4">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <h5>Rincian Harga</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="float-left text-left">
                                                    {{ searchData.maskapai }} (Dewasa) x{{ paxAdult }}
                                                </div>
                                                <div class="float-right text-right">
                                                    <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">{{ searchData.priceAdult | currency }}</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="float-left text-left">
                                                    {{ searchData.maskapai }} (Anak) x{{ paxChildren }}
                                                </div>
                                                <div class="float-right text-right">
                                                    <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">{{ searchData.priceChildren | currency }}</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="float-left text-left">
                                                    {{ searchData.maskapai }} (Bayi) x{{ paxInfant }}
                                                </div>
                                                <div class="float-right text-right">
                                                    <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">{{ searchData.priceInfant | currency }}</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="float-left text-left">
                                                    Bagasi {{ searchData.departId }} - {{ searchData.arrivalId }}
                                                </div>
                                                <div class="float-right text-right">
                                                    <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 0</span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8">
                                                Harga yang anda bayar :
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3 mr-3"><h6>{{ searchData.priceTotal | currency }}</h6></span>
                                            </div>
                                            <div class="col-lg-12 pt-3 pb-2">
                                                <router-link class="btn btn-utama btn-block mt-2 text-white" :to="{ name:'pemesanantiketpesawat', params : {
                                                    id          : id,
                                                    flightId    : searchData.flightId,
                                                    departId    : departId,
                                                    arrivalId   : arrivalId,
                                                    paxAdult    : paxAdult,
                                                    paxChildren : paxChildren,
                                                    paxInfant   : paxInfant,
                                                    goDate      : goDate,
                                                    roundTrip   : roundTrip,
                                                    returnDate  : returnDate,
                                                    token       : token,
                                                } }">
                                                    Pilih Tiket
                                                 </router-link>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end detail harga -->
                        </div>
                    </div>
                    <!-- left kontent -->

                    <!-- right konten -->
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header pt-3 pb-3 bg-white">
                                        <h5>Informasi Tambahan</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>Refund</h6>
                                        <span class="badge badge-success p-2 mt-2 mb-2">Bisa Refund</span>
                                        <p class="mb-2">Setiap pembatalan atau pengubahan yang dilakukan pada pesanan ini mungkin dikenakan biaya pembatalan. Pastikan Anda telah mengetahui kebijakan refund sebelum mengajukan permohonan.</p>
                                        <a href="#" data-toggle="modal" data-target="#bisaRefundModal">Selengkapnya</a>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <h6>Reschedule</h6>
                                        <span class="badge badge-success p-2 mt-2 mb-2">Reschedule</span>
                                        <p class="mb-2">Penerbangan ini bisa di-reschedule. Pastikan Anda memahami kebijakan yang berlaku sebelum mengajukan reschedule.</p>
                                        <a href="#" data-toggle="modal" data-target="#rescheduleModal">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right konten -->

                    <!-- Modal -->
                    <div>

                        <!-- modal detail pencarian -->
                        <b-modal centered size="lg" ref="detailPenerbanganModal" title="Detail Penerbangan">
                            <!-- jika tidak transit -->
                            <div v-if="searchData.stop == 'Langsung'">
                                <div class="row no-gutters">

                                    <div class="col-lg-3">
                                        <h6>{{ searchData.maskapai }}</h6>
                                        <small class="text-secondary">{{ searchData.stop }}</small><br>
                                        <img :src="searchData.maskapai_logo" alt="" class="w-50">
                                    </div>

                                    <div class="col-lg-5">
                                        <ul class="list-group border-left border-top border-right border-bottom">

                                            <!-- empty head list -->
                                            <li class="list-group-item border-0"></li>
                                            <!-- end empty head list -->

                                            <!-- list -->
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>{{ searchData.departTime }}</h6>
                                                        <p class="info-input m-0 p-0">{{ searchData.departDate }}</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ searchQueries.departProvince }}</h6>
                                                        <p class="info-input m-0 p-0">{{ searchData.departName }}</p>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <li class="list-group-item border-0 pt-0 pb-0">

                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="text-center w-35 float-left">
                                                        <i class="fa fa-plane"></i>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ searchData.duration_time }}</h6>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>{{ searchData.arrivalTime }}</h6>
                                                        <p class="info-input m-0 p-0">{{ searchData.arrivalDate }}</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ searchQueries.arrivalProvince }}</h6>
                                                        <p class="info-input m-0 p-0">{{ searchData.arrivalName }}</p>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <!-- end list -->

                                            <!-- empty footer list -->
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-chevron-circle-down icon-timeline"></i>

                                            </li>
                                            <!-- end empty footer list -->

                                        </ul>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item pt-0 pb-1">
                                                <b>No. Penerbangan</b><br>
                                                <span>{{ searchData.flightNumber }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Terminal</b> -
                                                <span>{{ searchData.terminal }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Maskapai</b>
                                                <span>{{ searchData.maskapai }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Bagasi</b> -
                                                <span>{{ searchData.baggage }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <i class="fa fa-users"></i> <b>Penerbangan</b> -
                                                <span>{{ searchData.stop }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end jika tidak transit -->

                            <!-- jika transit -->
                            <div v-else>
                                <div v-for="value in searchData.flightInfos" class="row no-gutters mt-3">
                                    <div v-if="value.transitArrivalTextCity != ''" class="col-lg-12">
                                        <div class="alert alert-info text-center">
                                            <b>{{ value.transitArrivalTextCity }}</b> selama <b>{{ value.transitArrivalTextTime }}</b>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>{{ value.maskapai }}</h6>
                                        <small class="text-secondary">{{ searchData.stop }}</small><br>
                                        <img :src="value.maskapai_logo" alt="" class="w-50">
                                    </div>

                                    <div class="col-lg-5">
                                        <ul class="list-group border-left border-top border-right border-bottom">

                                            <!-- empty head list -->
                                            <li class="list-group-item border-0"></li>
                                            <!-- end empty head list -->

                                            <!-- list -->
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>{{ value.departTime }}</h6>
                                                        <p class="info-input m-0 p-0">{{value.departDate }}</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ value.departCity }}</h6>
                                                        <p class="info-input m-0 p-0">{{ value.departName }}</p>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <li class="list-group-item border-0 pt-0 pb-0">

                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="text-center w-35 float-left">
                                                        <i class="fa fa-plane"></i>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ value.durationHour }} {{ value.durationMinute }}</h6>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>{{ value.arrivalTime }}</h6>
                                                        <p class="info-input m-0 p-0">{{ value.arrivalDate }}</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ value.arrivalCity }}</h6>
                                                        <p class="info-input m-0 p-0">{{ value.arrivalName }}</p>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <!-- end list -->

                                            <!-- empty footer list -->
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-chevron-circle-down icon-timeline"></i>

                                            </li>
                                            <!-- end empty footer list -->

                                        </ul>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item pt-0 pb-1">
                                                <b>No. Penerbangan</b><br>
                                                <span>{{ value.flightNumber }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Terminal</b> -
                                                <span>{{ value.terminal }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Maskapai</b>
                                                <span>{{ value.maskapai }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Bagasi</b> -
                                                <span>{{ value.baggage }} {{ value.baggageUnit }}</span>
                                            </li>
                                            <div v-if="value.transitArrivalTextCity == ''">
                                                <li class="list-group-item pt-1 pb-1">
                                                    <i class="fa fa-users"></i> <b>Penerbangan</b><br>
                                                    <span>{{ searchData.stop }}</span>
                                                </li>
                                            </div>
                                            <div v-else>
                                                <li class="list-group-item pt-1 pb-1">
                                                    <i class="fa fa-users"></i> <b>Penerbangan</b><br>
                                                    <span>{{ value.transitArrivalTextCity }}</span>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end jika transit -->


                            <div slot="modal-footer" class="w-100">
                                <b-btn class="float-right" variant="primary" @click="hideModal('detailPenerbanganModal')">
                                    Close
                                </b-btn>
                            </div>
                        </b-modal>
                        <!-- end modal detail pencarian -->

                        <!-- modal bisa refund -->
                        <div class="modal" id="bisaRefundModal" tabindex="-1" role="dialog" aria-labelledby="bisaRefundModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal bisaRefundModal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal bisa refund -->

                        <!-- modal bisa reschedule -->
                        <div class="modal" id="rescheduleModal" tabindex="-1" role="dialog" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal rescheduleModal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal bisa reschedule -->

                    </div>
                    <!-- end modal -->

                </div>
            </div>
        </section>
        <!-- end informasi tiket penerbangan -->

    </div>

</template>

<script>

export default {
    data() {
        return {

            searchQueries   : [],
            searchData    : [],
            id              : this.$route.params.id,
            departId        : this.$route.params.departId,
            arrivalId       : this.$route.params.arrivalId,
            paxAdult        : this.$route.params.paxAdult,
            paxChildren     : this.$route.params.paxChildren,
            paxInfant       : this.$route.params.paxInfant,
            goDate          : this.$route.params.goDate,
            roundTrip       : this.$route.params.roundTrip,
            returnDate      : this.$route.params.returnDate,
            token           : this.$route.params.token,

        }
    },
    mounted : function(){
        this.getsearchData();
    },
    methods : {

        getsearchData : function(){

            let app = this;
            let loader = this.$loading.show()

            app.$http.get('flight-detail/' + app.id + '/' + app.departId + '/' + app.arrivalId + '/' + app.paxAdult + '/' + app.paxChildren + '/' + app.paxInfant + '/' + app.goDate + '/' + app.roundTrip + '/' + app.returnDate + '/' + app.token)
            .then((response) => {

                app.searchQueries = response.data.searchQueries;
                app.searchData = response.data.searchDataResult;
                console.log(response.data.searchQueries);
                console.log(response.data.searchDataResult);

                loader.hide();

            })
            .catch((errorResponse) => {
                console.log(errorResponse);
            })

        },

        showModal(){
            this.$refs.detailPenerbanganModal.show();
        },

        hideModal(modal){
            if(modal == 'detailPenerbanganModal'){
                this.$refs.detailPenerbanganModal.hide();
            }
        }

    }

}
</script>
