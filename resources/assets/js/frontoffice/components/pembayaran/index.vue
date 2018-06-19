<template>

    <div>

        <!-- section Step -->
        <section class="bg-primary text-white">
            <div class="container pt-3 pb-4">

                <div class="row no-gutters pb-2">
                    <div class="pt-3 text-center col-lg-12">
                        <div class="pr-4 pl-4">
                            <div class="d-inline-block font-weight-bold">
                                <i class="fa fa-check-square mr-2"></i>
                                Isi Data
                                <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i>
                            </div>
                            <div class="d-inline-block font-weight-bold">
                                <i class="fa fa-bookmark mr-2"></i>
                                Pembayaran
                                <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i>
                            </div>
                            <div class="d-inline-block">
                                <i class="fa fa-bookmark mr-2"></i>
                                Proses
                                <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i>
                            </div>
                            <div class="d-inline-block">
                                <i class="fa fa-bookmark mr-2"></i>
                                E-Tiket Terbit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section Step -->

        <!-- main kontent -->
        <section>
            <div class="container ptb-75">
                <div class="row">

                    <!-- left-konten -->
                    <div class="col-lg-8">

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="card m-0 p-0 radius-0">

                                    <!-- header -->
                                    <div class="card-header radius-0 m-0 p-0 border-0">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-lg-3 pt-2 pb-2 bg-dark">
                                                <h5 class="text-center text-white">TripyukPay</h5>
                                            </div>
                                            <div class="col-lg-9 pl-2 text-center text-primary">
                                                <span>Selesaikan Pembayaran dalam 00:33::10</span><i class="fa fa-clock pl-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end header -->

                                    <!-- isi -->
                                    <div class="card-body m-0 p-0">
                                        <div class="row no-gutters">

                                            <!-- Tab Pembayaran -->
                                            <div class="col-lg-3 border-right bg-light">
                                                <div class="nav flex-column nav-pills" id="v-payment-tab" role="tablist" aria-orientation="vertical">

                                                    <a class="nav-link radius-0 active" id="v-payment-transfer-tab" data-toggle="pill" href="#v-payment-transfer" role="tab" aria-controls="v-pills-transfer" aria-selected="true">Transfer</a>

                                                    <a class="nav-link radius-0" id="v-payment-kartukredit-tab" data-toggle="pill" href="#v-payment-kartukredit" role="tab" aria-controls="v-pills-kartukredit" aria-selected="false">Kartu Kredit</a>

                                                    <a class="nav-link radius-0" id="v-payment-atm-tab" data-toggle="pill" href="#v-payment-atm" role="tab" aria-controls="v-pills-atm" aria-selected="false">ATM</a>

                                                    <a class="nav-link radius-0" id="v-payment-cimbclick-tab" data-toggle="pill" href="#v-payment-cimbclick" role="tab" aria-controls="v-pills-cimbclick" aria-selected="false">CIMB Clicks</a>

                                                    <a class="nav-link radius-0" id="v-payment-bcaklikpay-tab" data-toggle="pill" href="#v-payment-bcaklikpay" role="tab" aria-controls="v-pills-bcaklikpay" aria-selected="false">BCA Klikpay</a>

                                                    <a class="nav-link radius-0" id="v-payment-mandiridebit-tab" data-toggle="pill" href="#v-payment-mandiridebit" role="tab" aria-controls="v-pills-mandiridebit" aria-selected="false">Mandiri Debit</a>

                                                    <a class="nav-link radius-0" id="v-payment-indomaret-tab" data-toggle="pill" href="#v-payment-indomaret" role="tab" aria-controls="v-pills-indomaret" aria-selected="false">Indomaret</a>

                                                    <a class="nav-link radius-0" id="v-payment-alfamart-tab" data-toggle="pill" href="#v-payment-alfamart" role="tab" aria-controls="v-pills-alfamart" aria-selected="false">Alfamart</a>
                                                </div>
                                            </div>
                                            <!-- end Tab Pembayaran -->

                                            <!-- content of tab Pembayaran -->
                                            <div class="col-lg-9 pl-3 pr-3 pt-3 pb-3 text-left">

                                                <div class="tab-content" id="v-payment-tabContent">

                                                    <div class="tab-pane fade show active" id="v-payment-transfer" role="tabpanel" aria-labelledby="v-pills-transfer-tab">

                                                        <form @click.prevent="ProsesBayar" method="post">

                                                            <!-- title & info -->
                                                            <div class="row">

                                                                <div class="col-lg-12">
                                                                    <h5>Transfer</h5>
                                                                </div>

                                                                <div class="col-lg-12 pt-2">
                                                                    <div class="alert alert-info" role="alert">
                                                                        <i class="fa fa-info-circle mr-1"></i>
                                                                        Anda bisa transfer dari layanan perbankan apapun( m-banking, SMS Banking, atau ATM )
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- end title & info -->

                                                            <!-- Pilih Rekening Tujuan -->
                                                            <div class="row">

                                                                <div class="col-lg-12">
                                                                    <h6>Plih Rekening Tujuan</h6>

                                                                    <div class="card mt-3">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-10">
                                                                                    <input class="align-middle" type="radio" id="bca" name="bank" value="">
                                                                                    <label class="m-0 p-0" for="bca">BCA</label>
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <img class="w-100" src="img/logo.png" alt="">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="card mt-3">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-10">
                                                                                    <input class="align-middle" type="radio" id="mandiri" name="bank" value="">
                                                                                    <label class="m-0 p-0" for="mandiri">Mandiri</label>
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <img class="w-100" src="img/logo.png" alt="">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="card mt-3">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-10">
                                                                                    <input class="align-middle" type="radio" id="bri" name="bank" value="">
                                                                                    <label class="m-0 p-0" for="bri">BRI</label>
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <img class="w-100" src="img/logo.png" alt="">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="card mt-3">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-10">
                                                                                    <input class="align-middle" type="radio" id="bni" name="bank" value="">
                                                                                    <label class="m-0 p-0" for="bni">BNI</label>
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <img class="w-100" src="img/logo.png" alt="">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <!-- end Pilih Rekening Tujuan -->

                                                            <hr class="mt-4">

                                                            <!-- tambah kupon -->
                                                            <div class="row pt-2">
                                                                <div class="col-lg-12 form-group">
                                                                    <span class="switch switch-sm">
                                                                        <input type="checkbox" class="switch" id="tambahKupon" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                        <label for="tambahKupon"><h5>Tambah Kupon</h5> </label>
                                                                    </span>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="collapse pb-2 form-group" id="collapseExample">
                                                                        <div class="row no-gutters">
                                                                            <div class="col-lg-12">
                                                                                <input class="form-control" placeholder="Masukkan kode voucher" type="text" name="" value="">
                                                                            </div>
                                                                        </div>




                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end tambah kupon -->

                                                            <hr class="m-0">

                                                            <!-- info harga -->
                                                            <div class="row pt-3 pb-4">

                                                                <div class="col-lg-12">
                                                                    <h5>Rincian Harga</h5>
                                                                    <ul class="list-group list-group-flush border-0 pb-2 pt-3">
                                                                        <li class="list-group-item">
                                                                            <div class="float-left text-left">
                                                                                AirAsia (Dewasa) x1
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 500.000</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <div class="float-left text-left">
                                                                                Bagasi CGK - DPS
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 0</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <div class="float-left text-left">
                                                                                Kode Unik
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 123</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                        <li class="list-group-item bg-light">
                                                                            <div class="float-left text-left">
                                                                                Harga Total
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 123</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                    </ul>
                                                                </div>

                                                                <div class="col-lg-12 text-right pt-3">
                                                                    <p>Dengan mengeklik tombol berikut, Anda menyetujui <a href="#">Syarat & Ketentuan dan Kebijakan Privasi Traveloka.</a> </p>
                                                                    <input class="btn btn-primary btn-block mt-2" type="submit" name="submit" value="Bayar Dengan Transfer">
                                                                </div>

                                                            </div>
                                                            <!-- end info harga -->

                                                        </form>

                                                    </div>

                                                    <div class="tab-pane fade" id="v-payment-kartukredit" role="tabpanel" aria-labelledby="v-pills-kartukredit-tab">

                                                        <form class="" action="index.html" method="post">

                                                            <!-- title & info -->
                                                            <div class="row no-gutters align-items-center">

                                                                <div class="col-lg-8">
                                                                    <h5>Kartu Kredit</h5>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <img class="w-100" src="img/master-card.png" alt="">
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <img class="w-100" src="img/visa.png" alt="">
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <img class="w-100" src="img/jcb.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 pt-2">
                                                                    <div class="alert alert-info" role="alert">
                                                                        <i class="fa fa-info-circle mr-1"></i>
                                                                        100% Security Guarantee
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- end title & info -->

                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    your form here
                                                                </div>
                                                            </div>

                                                            <hr class="mt-4">

                                                            <!-- tambah kupon -->
                                                            <div class="row pt-2">
                                                                <div class="col-lg-12 form-group">
                                                                    <span class="switch switch-sm">
                                                                        <input type="checkbox" class="switch" id="tambahKuponkartukredit" data-toggle="collapse" href="#collapseKartukredit" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                        <label for="tambahKuponkartukredit"><h5>Tambah Kupon</h5> </label>
                                                                    </span>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="collapse pb-2 form-group" id="collapseKartukredit">
                                                                        <div class="row no-gutters">
                                                                            <div class="col-lg-12">
                                                                                <input class="form-control" placeholder="Masukkan kode voucher" type="text" name="" value="">
                                                                            </div>
                                                                        </div>




                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end tambah kupon -->

                                                            <hr class="m-0">

                                                            <!-- info harga -->
                                                            <div class="row pt-3 pb-4">

                                                                <div class="col-lg-12">
                                                                    <h5>Rincian Harga</h5>
                                                                    <ul class="list-group list-group-flush border-0 pb-2 pt-3">
                                                                        <li class="list-group-item">
                                                                            <div class="float-left text-left">
                                                                                AirAsia (Dewasa) x1
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 500.000</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <div class="float-left text-left">
                                                                                Bagasi CGK - DPS
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 0</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <div class="float-left text-left">
                                                                                Kode Unik
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 123</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                        <li class="list-group-item bg-light">
                                                                            <div class="float-left text-left">
                                                                                Harga Total
                                                                            </div>
                                                                            <div class="float-right text-right">
                                                                                <span class="badge badge-info pt-2 pb-2 pr-3 pl-3">Rp 123</span>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </li>

                                                                    </ul>
                                                                </div>

                                                                <div class="col-lg-12 text-right pt-3">
                                                                    <p>Dengan mengeklik tombol berikut, Anda menyetujui <a href="#">Syarat & Ketentuan dan Kebijakan Privasi Traveloka.</a> </p>
                                                                    <input class="btn btn-primary btn-block mt-2" type="submit" name="submit" value="Bayar Dengan Transfer">
                                                                </div>

                                                            </div>
                                                            <!-- end info harga -->

                                                        </form>

                                                    </div>

                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                        ...
                                                    </div>

                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                        ...
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end content of tab Pembayaran -->

                                        </div>
                                    </div>
                                    <!-- End isi -->

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- end left-konten -->

                    <!-- right kontent -->
                    <div class="col-lg-4">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-white pt-3 pb-3">
                                        <h5>Pesanan Anda</h5>
                                    </div>
                                    <div v-for="(value, index, key) in orderData.myOrder" class="card-body border-bottom">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h6>{{ value.detailOrder.maskapai }} {{ value.detailOrder.flightNumber }}</h6>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <a class="d-block w-100" :href="'#' + index + ''" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-angle-up"></i></a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="collapse show" :id="index" :key="key">
                                                    <div class="row mt-3 align-items-center">
                                                        <div class="col-lg-3">
                                                            <img class="w-100" :src="value.maskapai_logo">
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <h6 class="mb-1">{{ value.detailOrder.maskapai }}</h6>
                                                            <p>{{ value.detailOrder.departId }} - {{ value.detailOrder.arrivalId }}</p>
                                                        </div>
                                                    </div>

                                                    <ul class="list-group border-left border-top border-right border-bottom mt-4">

                                                        <!-- empty head list -->
                                                        <li class="list-group-item border-0">


                                                        </li>
                                                        <!-- end empty head list -->

                                                        <!-- list -->
                                                        <li class="list-group-item border-0">

                                                            <i class="fa fa-circle icon-timeline"></i>
                                                            <div class="clearfix w-100 d-inline-block">
                                                                <div class="w-35 float-left">
                                                                    <h6>{{ value.detailOrder.departTime }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ value.detailOrder.departDate }}</p>
                                                                </div>

                                                                <div class="w-65 float-left">
                                                                    <h6>{{ value.detailOrder.departCity }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ value.detailOrder.departName }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix">

                                                            </div>

                                                        </li>
                                                        <li class="list-group-item border-0">

                                                            <i class="fa fa-circle icon-timeline"></i>
                                                            <div class="clearfix w-100 d-inline-block">
                                                                <div class="w-35 float-left">
                                                                    <h6>{{ value.detailOrder.arrivalTime }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ value.detailOrder.departDate }}</p>
                                                                </div>

                                                                <div class="w-65 float-left">
                                                                    <h6>{{ value.detailOrder.arrivalCity }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ value.detailOrder.arrivalName }}</p>
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

                                                    <div class="row mt-5 align-items-center">
                                                        <div v-for="paxAdult in value.detailOrder.pax.paxAdult" class="col-lg-12">
                                                            <h6 class="mb-1">Penumpang Dewasa</h6>
                                                            <p>{{ paxAdult.title }} {{ paxAdult.firstName }} {{ paxAdult.lastName }}</p>
                                                        </div>
                                                    </div>

                                                    <a class="mt-4 btn btn-link p-0 pointer text-primary align-right" @click="deleteOrder(value.orderDetailId)">Delete Order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end right kontent -->

                </div>
            </div>
        </section>
        <!-- end main kontent -->

    </div>

</template>

<script>
export default {

    data(){
        return{

            orderData : [],
            deleteMessageData : [],

            token : this.$route.params.token,

        }
    },
    mounted : function(){
        this.getOrderData();
    },

    methods:{
        getOrderData : function(){

            let app = this;

            let loader = app.$loading.show();

            app.$http.get('order/' + app.token).then(function(response){
                app.orderData = response.data.orderData;
                console.log(app.orderData);
                app.$swal('Order Berhasil!! Terimakasih', 'Selanjutnya pilih metode pembayaran', 'success').then(function(){
                    loader.hide();
                })
            })
            .catch(function(errorResponse){
                console.log(errorResponse);
            })

        },

        deleteOrder : function(detailId){
            let app = this;

            app.$http.get('delete-order/' + detailId + '/' + app.orderData.token).then(function(response) {

                app.deleteMessageData = response.data.dataResult;

                if(app.deleteMessageData.message == 'success delete order'){
                    app.getOrderData();
                }
                console.log(app.deleteMessageData);

            }).catch(function(errorResponse) {
                console.log(errorResponse);
            })
        },

        ProsesBayar: function(e){

            this.$router.push({ path : 'proses-pembayaran' });

        },

        showModal(){
            console.log('berhasil');
        }

    }

}
</script>
