<template>

    <div>

        <!-- pencarian -->
        <section>
            <div class="container ptb-75">

                <!-- info pencarian -->
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <h4>{{ searchQueries.departAirport }} → {{ searchQueries.arrivalAirport }}</h4>
                        <div class="pt-3 pb-1">
                            <span class="pr-4 pl-4 align-middle border-right border-left">{{ searchQueries.departDate }}</span>
                            <span class="pr-4 pl-4 align-middle border-right">{{ paxAdult }} Dewasa, {{ paxChildren }} Anak, {{ paxInfant }} Bayi </span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn btn-primary btn-block" data-toggle="collapse" href="#gantipencarian" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Ganti Pencarian
                        </a>
                    </div>
                </div>
                <!-- end info pencarian -->

                <hr>

                <!-- Form Pencarian -->
                <div class="row">
                    <div class="col-lg-12 collapse mb-3" id="gantipencarian">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>
                </div>
                <!-- end Form Pencarian -->

                <!-- filter -->
                <div class="row align-items-center pb-1">
                    <div class="col-lg-8">
                        <span class="float-left pt-2"><h6>Filter:</h6> </span>
                        <div class="btn-group float-left">
                            <div class="pt-1 ml-4 mr-4">
                                <button type="button" class="btn btn-link text-dark p-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Transit
                                </button>
                                <div class="dropdown-menu login">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>

                            <div class="pt-1 ml-4 mr-4">
                                <button type="button" class="btn btn-link text-dark p-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Waktu
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>

                            <div class="pt-1 ml-4 mr-4">
                                <button type="button" class="btn btn-link text-dark p-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Maskapai
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>

                            <div class="pt-1 ml-4 mr-4">
                                <button type="button" class="btn btn-link text-dark p-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter Lain
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <div class="btn-group">
                            <div class="pt-1 ml-4 mr-4">
                                <button type="button" class="btn btn-link text-dark p-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Urutkan
                                </button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end filter -->

                <hr>

                <div class="row no-gutters mb-3">

                    <div class="col-lg-12">

                        <div class="card p-0">
                            <div class="card-body p-0">

                                <div id="gantiTanggal" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <nav class="nav nav-pills nav-justified bg-white">
                                                <a class="nav-item nav-link bg-light text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                            </nav>
                                        </div>
                                        <div class="carousel-item">
                                            <nav class="nav nav-pills nav-justified">
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                                <a class="nav-item nav-link text-dark radius-0 text-white border-right border-left" href="#">

                                                    <span>Sel, 25 April 2018</span>
                                                    <h6>Rp. 500.000</h6>

                                                </a>
                                            </nav>
                                        </div>

                                        <a class="carousel-control-prev bg-secondary" href="#gantiTanggal" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next bg-secondary" href="#gantiTanggal" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- hasil pencarian -->
                <div  v-if="searchData.length > 0" class="row no-gutters">

                    <!-- hasil pencarian per item -->
                    <div v-for="(value, index) in searchData" class="col-lg-12 mb-3">

                        <div class="card border-hover-primary w-100">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="icon-title mb-3">
                                            Maskapai
                                        </div>
                                        <div class="img-icon-5 text-center">
                                            <img class="height-60" :src="value.maskapai_logo" alt="">
                                        </div>
                                        <div class="icon-title mt-2">
                                            {{ value.maskapai }}
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row no-gutters align-items-center title-konten">
                                            <div class="col-lg-3 align-middle">
                                                <div class="icon-title text-left mb-3">
                                                    Berangkat
                                                </div>
                                            </div>
                                            <div class="col-lg-1">

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="icon-title text-left mb-3">
                                                    Sampai
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="icon-title text-center mb-3">
                                                    Durasi
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="icon-title text-center mb-3">
                                                    Bagasi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters align-items-center konten">
                                            <div class="col-lg-3">
                                                <span><h4>{{ value.departTime }}</h4></span>
                                                <span>{{ value.departName }} ( {{ value.departId }} )</span>
                                            </div>
                                            <div class="col-lg-1">
                                                <i class="fa fa-plane"></i>
                                            </div>
                                            <div class="col-lg-3">
                                                <span><h4>{{ value.arrivalTime }}</h4></span>
                                                <span>{{ value.arrivalName }} ( {{ value.arrivalId }} )</span>
                                            </div>
                                            <div class="col-lg-3 text-center">
                                                <span><h4>{{ value.duration_time }}</h4></span>
                                                <span>{{ value.stop }}</span>
                                            </div>
                                            <div class="col-lg-2 text-center">
                                                <span><h4>{{ value.baggage }}</h4></span>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-3">
                                                <a class="pointer text-utama" @click="showModal('detailPenerbanganModal', index)">Detail Penerbangan</a>
                                            </div>
                                            <div class="col-lg-3">
                                                <a class=" pointer text-utama" @click="showModal('infoHargaModal', index)">Info Harga</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 text-center mt-4">
                                        <h4 class="text-utama">{{ value.price.priceTotal | currency }}</h4>
                                        <router-link class="btn btn-utama btn-block mt-2 text-white" :to="{ name:'detailtiketpesawat', params : {
                                            id          : index,
                                            departId    : value.departId,
                                            arrivalId   : value.arrivalId,
                                            paxAdult    : paxAdult,
                                            paxChildren : paxChildren,
                                            paxInfant   : paxInfant,
                                            goDate      : goDate,
                                            roundTrip   : roundTrip,
                                            returnDate  : returnDate,
                                            token       : searchQueries.token,
                                        } }">
                                            Pilih Tiket
                                         </router-link>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end hasil pencarian per item -->
                </div>
                <div v-else class="row no-gutters">
                    <div class="col-lg-12">
                         <b-alert show>Default Alert</b-alert>
                    </div>
                </div>
                <!-- end hasil pencarian -->
            </div>
        </section>
        <!-- end pencarian -->

        <!-- modal data -->

        <!-- modal detail pencarian -->
        <b-modal v-if="searchData.length > 0" centered size="lg" ref="detailPenerbanganModal" title="Detail Penerbangan">
            <!-- jika tidak transit -->
            <div v-if="searchData[dataArray].stop == 'Langsung'">
                <div class="row no-gutters">

                    <div class="col-lg-3">
                        <h6>{{ searchData[dataArray].maskapai }}</h6>
                        <small class="text-secondary">{{ searchData[dataArray].stop }}</small><br>
                        <img :src="searchData[dataArray].maskapai_logo" alt="" class="w-50">
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
                                        <h6>{{ searchData[dataArray].departTime }}</h6>
                                        <p class="info-input m-0 p-0">{{ searchData[dataArray].departDate }}</p>
                                    </div>

                                    <div class="w-65 float-left">
                                        <h6>{{ searchQueries.departProvince }}</h6>
                                        <p class="info-input m-0 p-0">{{ searchData[dataArray].departName }}</p>
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
                                        <h6>{{ searchData[dataArray].duration_time }}</h6>
                                    </div>
                                </div>

                                <div class="clearfix">

                                </div>

                            </li>
                            <li class="list-group-item border-0">

                                <i class="fa fa-circle icon-timeline"></i>
                                <div class="clearfix w-100 d-inline-block">
                                    <div class="w-35 float-left">
                                        <h6>{{ searchData[dataArray].arrivalTime }}</h6>
                                        <p class="info-input m-0 p-0">{{ searchData[dataArray].arrivalDate }}</p>
                                    </div>

                                    <div class="w-65 float-left">
                                        <h6>{{ searchQueries.arrivalProvince }}</h6>
                                        <p class="info-input m-0 p-0">{{ searchData[dataArray].arrivalName }}</p>
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
                                <span>{{ searchData[dataArray].flightNumber }}</span>
                            </li>
                            <li class="list-group-item pt-1 pb-1">
                                <b>Terminal</b> -
                                <span>{{ searchData[dataArray].terminal }}</span>
                            </li>
                            <li class="list-group-item pt-1 pb-1">
                                <b>Maskapai</b>
                                <span>{{ searchData[dataArray].maskapai }}</span>
                            </li>
                            <li class="list-group-item pt-1 pb-1">
                                <b>Bagasi</b> -
                                <span>{{ searchData[dataArray].baggage }}</span>
                            </li>
                            <li class="list-group-item pt-1 pb-1">
                                <i class="fa fa-users"></i> <b>Penerbangan</b> -
                                <span>{{ searchData[dataArray].stop }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end jika tidak transit -->

            <!-- jika transit -->
            <div v-else>
                <div v-for="value in searchData[dataArray].flightInfos" class="row no-gutters mt-3">
                    <div v-if="value.transitArrivalTextCity != ''" class="col-lg-12">
                        <div class="alert alert-info text-center">
                            <b>{{ value.transitArrivalTextCity }}</b> selama <b>{{ value.transitArrivalTextTime }}</b>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h6>{{ value.maskapai }}</h6>
                        <small class="text-secondary">{{ searchData[dataArray].stop }}</small><br>
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
                                    <span>{{ searchData[dataArray].stop }}</span>
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

        <!-- modal info harga -->
        <b-modal v-if="searchData.length > 0" centered ref="infoHargaModal" title="Info Harga">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <h5 class="pt-3">{{ searchData[dataArray].maskapai }}</h5>
                    <span class="text-secondary">{{ searchData[dataArray].stop }}</span>
                    <img :src="searchData[dataArray].maskapai_logo" alt="" class="w-75">
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-2">
                                    <div class="float-left text-left">
                                        {{ searchData[dataArray].maskapai }} (Dewasa) x{{ paxAdult }}
                                    </div>
                                    <div class="float-right text-right">
                                        <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">{{ searchData[dataArray].price.priceAdult | currency }}</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item p-2">
                                    <div class="float-left text-left">
                                        {{ searchData[dataArray].maskapai }} (Anak) x{{ paxChildren }}
                                    </div>
                                    <div class="float-right text-right">
                                        <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">{{ searchData[dataArray].price.priceChildren | currency }}</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item p-2">
                                    <div class="float-left text-left">
                                        {{ searchData[dataArray].maskapai }} (Bayi) x{{ paxInfant }}
                                    </div>
                                    <div class="float-right text-right">
                                        <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">{{ searchData[dataArray].price.priceInfant | currency }}</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                            </ul>
                        </div>
                        <div class="card-footer p-0">
                            <div class="row no-gutters align-items-center p-2">
                                <div class="col-lg-4">
                                    Harga yang anda bayar :
                                </div>
                                <div class="col-lg-8 text-right">
                                    <span class="badge badge-info pt-2 pb-2 pr-3 pl-3"><h6>{{ searchData[dataArray].price.priceTotal | currency }}</h6></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div slot="modal-footer" class="w-100">
                <b-btn class="float-right" variant="primary" @click="hideModal('infoHargaModal')">
                    Close
                </b-btn>
            </div>
        </b-modal>
        <!-- end modal info harga -->

        <!-- end modal data -->

    </div>

</template>

<script>
export default {

    data(){
        return{

            searchData      : [],
            searchQueries   : [],
            nearbyGoDate    : [],
            departId        : this.$route.params.departId,
            arrivalId       : this.$route.params.arrivalId,
            paxAdult        : this.$route.params.paxAdult,
            paxChildren     : this.$route.params.paxChildren,
            paxInfant       : this.$route.params.paxInfant,
            goDate          : this.$route.params.goDate,
            roundTrip       : this.$route.params.roundTrip,
            returnDate      : this.$route.params.returnDate,
            dataArray       : 0,

        }
    },
    mounted: function(){
        let app = this;
        app.getSearchData();
    },
    methods: {

        getSearchData : function(){
            console.log('d');
            let app = this;
            let loader = app.$loading.show();

            app.$http.get('search-flight/' + app.departId + '/' + app.arrivalId + '/' + app.paxAdult + '/' + app.paxChildren + '/' + app.paxInfant + '/' + app.goDate + '/' + app.roundTrip + '/' + app.returnDate )
            .then((response) => {

                app.searchData = response.data.searchDataResult;
                app.searchQueries = response.data.searchQueries;
                app.nearbyGoDate = response.data.nearbyGoDate;
                console.log(response.data.searchDataResult);
                console.log(response.data.searchQueries);

                loader.hide();
                // clearInterval(this.timerUpdate);

            })
            .catch((errorResponse)=>{
                console.log(errorResponse);
            });

        },

        showModal(modal, index){
            if(modal == 'detailPenerbanganModal'){
                this.$refs.detailPenerbanganModal.show();
                this.dataArray = index;
            }else if(modal == 'infoHargaModal'){
                this.$refs.infoHargaModal.show();
                this.dataArray = index;
            }
        },

        hideModal(modal){
            if(modal == 'detailPenerbanganModal'){
                this.$refs.detailPenerbanganModal.hide();
            }else if(modal == 'infoHargaModal'){
                this.$refs.infoHargaModal.hide();
            }
        },

    },
}
</script>
