<template>

    <div>

        <!-- tab booking -->
        <div class="container">
            <div class="row">

                <div class="col-lg-7 d-sm-absolute absolute-carousel mr-auto">
                    <div class="row bg-dark-transparent tab-head">

                        <ul class="nav nav-pills" id="book-tab" role="tablist">
                            <li class="nav-item ml-3">
                                <h5 class="pt-3 pb-3">Perjalan Bisnis? Pergi Liburan? Cari tiket pesawat di Tripyuk.com Aja</h5>
                            </li>
                        </ul>

                    </div>
                    <div class="row bg-black-transparent pt-3 pb-2 book-tab-content">

                        <div class="col-lg-12">

                            <div class="tab-content text-left" id="book-tabContent">

                                <!-- tab content pesawat -->
                                <div class="tab-pane fade show active" id="book-pesawat" role="tabpanel" aria-labelledby="book-pesawat-tab">

                                    <div class="row no-gutters">
                                        <div class="form-group col-lg-6 pr-2">
                                            <label for="tujuan">Kota Asal</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white-transparent color-white" id="basic-addon1"> <i class="fa fa-plane"></i> </span>
                                                </div>
                                                <input id="airportasal" type="text" class="form-control bg-white-transparent color-white" placeholder="Kota Asal" v-model="departName">
                                                <input type="hidden" v-model="departId">

                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6 pl-2">
                                            <label for="tujuan">Kota Tujuan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white-transparent color-white" id="basic-addon1"> <i class="fa fa-plane"></i> </span>
                                                </div>
                                                <input id="airporttujuan" type="text" class="form-control bg-white-transparent color-white" placeholder="Kota Tujuan" v-model="arrivalName">
                                                <input type="hidden" v-model="arrivalId">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row no-gutters">

                                        <div class="form-group col-lg-12">
                                            <label for="tujuan"><h6>Jumlah Penumpang</h6></label>
                                            <div class="row no-gutters">

                                                <div class="col-lg-4 pr-2">
                                                    <label for="tujuan">Dewasa</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" v-on:click="minuspaxAdult" type="button">
                                                                <i class="fa fa-minus color-white"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" class="form-control bg-white-transparent color-white" placeholder="Dewasa" value="" v-model="paxAdult">
                                                        <div class="input-group-append">
                                                            <button v-on:click="pluspaxAdult" class="btn btn-outline-secondary border-color-secondary bg-white-transparent" type="button">
                                                                <i class="fa fa-plus color-white"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 pr-2 pl-1">
                                                    <label for="tujuan">Anak</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button v-on:click="minuspaxChildren" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                                                <i class="fa fa-minus color-white"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" class="form-control bg-white-transparent color-white" placeholder="Jumlah" v-model="paxChildren">
                                                        <div class="input-group-append">
                                                            <button v-on:click="pluspaxChildren" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                                                <i class="fa fa-plus color-white"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 pl-1">
                                                    <label for="tujuan">Bayi</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button v-on:click="minuspaxInfant" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                                                <i class="fa fa-minus color-white"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" class="form-control bg-white-transparent color-white" placeholder="Jumlah" v-model="paxInfant">
                                                        <div class="input-group-append">
                                                            <button v-on:click="pluspaxInfant" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                                                <i class="fa fa-plus color-white"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-start">

                                        <div class="form-group col-lg-6 pr-2">
                                            <label for="tujuan">Tanggal Berangkat</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                        <span class="input-group-text bg-white-transparent border-color-secondary border-color-secondary" id="basic-addon1">
                            <i class="fa fa-calendar-alt color-white"></i>
                        </span>
                                                </div>
                                                <datetime input-class="bg-white-transparent text-white" type="date" :week-start="1" v-model="goDate" auto></datetime>
                                            </div>
                                        </div>

                                        <div class="form-group form-check col-lg-6 pl-1 pr-2">
                                            <input
                                                    class       ="form-check-input pb-1 m-0 position-relative bg-white-transparent"
                                                    type        ="checkbox"
                                                    id          ="pulangpergi"
                                                    v-model     ="roundTrip"
                                                    true-value  ="true"
                                                    false-value ="false"
                                            >
                                            <label class="form-check-label" for="pulangpergi">Pulang Pergi</label>
                                            <div v-show="roundTrip == 'true'" class="input-group pt-2">
                                                <div class="input-group-prepend">
                        <span class="input-group-text bg-white-transparent border-color-secondary border-color-secondary" id="basic-addon1">
                            <i class="fa fa-calendar-alt color-white"></i>
                        </span>
                                                </div>
                                                <datetime input-class="bg-white-transparent color-white" type="date" v-model="returnDate" auto></datetime>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row no-gutters mt-3">

                                        <div class="form-group col-lg-12">
                                            <router-link class="btn btn-primary btn-block" :to="{name:'caritiketpesawat', params: {
                    departId    :departId,
                    arrivalId   :arrivalId,
                    paxAdult    :paxAdult,
                    paxChildren :paxChildren,
                    paxInfant   :paxInfant,
                    goDate      :goDate,
                    roundTrip   :roundTrip,
                    returnDate  :returnDate
                }}">
                                                Cari Tiket
                                            </router-link>
                                        </div>

                                    </div>

                                </div>
                                <!-- end tab content pesawat -->

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

    var dateNow = new Date();
    dateNow.setDate(dateNow.getDate() + 7);
    var jsonDate = dateNow.toJSON();

    export default {
        data(){
            return{
                airportListData :[],
                departName      :'Soekarno Hatta,Jakarta - Cengkareng,(CGK)',
                departId        :'CGK',
                arrivalName     :'Ngurah Rai,Bali - Denpasar,(DPS)',
                arrivalId       :'DPS',
                paxAdult     :1,
                paxChildren    :0,
                paxInfant    :0,
                goDate   : jsonDate,
                roundTrip: 'false',
                returnDate: jsonDate,
            }

        },
        created : function() {

            this.getListAirport();
            this.getListAirportTujuan();

        },
        mounted: function(){

        },
        methods:{
            pluspaxAdult:function(){

                return this.paxAdult++;

            },
            minuspaxAdult:function(){

                if(this.paxAdult > 1){
                    return this.paxAdult--;
                }

            },
            pluspaxChildren:function(){

                return this.paxChildren++;

            },
            minuspaxChildren:function(){
                if(this.paxChildren > 0){
                    return this.paxChildren--;
                }
            },
            pluspaxInfant: function(){

                return this.paxInfant++;

            },
            minuspaxInfant: function(){

                if(this.paxInfant > 0){
                    return this.paxInfant--;
                }

            },
            getListAirport: function(){
                let app = this;
                // runWaitMe('#airportasal','orbit','');
                app.$http.get('/get-all-airport')
                    .then((response)=>{
                        app.airportListData = response.data.airport;

                        $('#airportasal').autocomplete({
                            source: this.airportListData,
                            select: function (event, ui) {
                                app.departId = ui.item.value;
                                app.departName = ui.item.label;
                                return false;
                            }
                        });

                    })
                    .catch((errorResponse)=>{
                        console.log(errorResponse);
                    })

            },
            getListAirportTujuan: function(){

                let app = this;

                app.$http.get('/get-all-airport')
                    .then((response)=>{
                        app.airportListData = response.data.airport;

                        $('#airporttujuan').autocomplete({
                            source: app.airportListData,
                            select: function(event, ui){
                                app.arrivalId = ui.item.value;
                                app.arrivalName = ui.item.label;

                                return false;
                            }
                        })
                    })
                    .catch((errorResponse)=>{
                        console.log(errorResponse);
                    })

            },
        }
    }
</script>
