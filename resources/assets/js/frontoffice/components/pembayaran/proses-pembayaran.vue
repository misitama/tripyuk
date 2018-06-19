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
                                    <i class="fa fa-check-square mr-2"></i>
                                    Pembayaran
                                    <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i>
                                </div>
                                <div class="d-inline-block font-weight-bold">
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

        <!-- main konten -->
        <section>
            <div class="container ptb-75">
                <div class="row">

                    <!-- left konten -->
                    <div class="col-lg-8">

                        <div class="row">

                            <!-- Detail data pemesan -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-white pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="card-title p-0 m-0">Petunjuk Pembayaran Transfer</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <form class="" @submit.prevent="BayarSerkarang" method="post">

                                            <!-- info -->
                                            <div class="row">

                                                <div class="col-lg-12">

                                                    <div class="alert alert-info" role="alert">
                                                        <i class="fa fa-info-circle fa-lg mr-1"></i>
                                                        <span>A simple info alert—check it out!</span>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end info -->

                                            <!-- step pembayaran -->
                                            <div class="row">

                                                <div class="col-lg-12">

                                                    <!-- Step 1 -->
                                                    <div class="row no-gutters pb-3 mb-3 border-bottom">
                                                        <div class="col-lg-12 clearfix">
                                                            <span class="badge badge-info p-2 mr-2 float-left">1</span>
                                                            <h6 class="float-left pt-1">Selesaikan Pembayaran Sebelum</h6>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="card mt-3">
                                                                <div class="card-body">
                                                                    <h5 class="mb-2">Besok 05.30 AM</h5>
                                                                    <span class="text-secondary">Selesaikan pembayaran sebelum 1j 55m</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Step 1 -->

                                                    <!-- Step 2 -->
                                                    <div class="row no-gutters pb-3 mb-3 border-bottom">
                                                        <div class="col-lg-12 clearfix">
                                                            <span class="badge badge-info p-2 mr-2 float-left">2</span>
                                                            <h6 class="float-left pt-1">Mohon Transfer Ke</h6>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="alert alert-warning mt-3">
                                                                <i class="fa fa-exclamation-triangle fa-lg"></i>
                                                                Peringatan Anda
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <div class="row">
                                                                        <div class="col-lg-11">
                                                                            <h5>BNI</h5>
                                                                        </div>
                                                                        <div class="col-lg-1">
                                                                            <img class="w-100" src="img/master-card.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="clearfix mt-2 mb-2">
                                                                        <h6 class="float-left pt-1">Kode Bank</h6>
                                                                        <span class="badge badge-info float-right pt-2 pb-2 pl-3 pr-3"><h6>009</h6> </span>
                                                                    </div>
                                                                    <div class="clearfix mt-2 mb-2">
                                                                        <h6 class="float-left pt-1">No Rekening</h6>
                                                                        <span class="badge badge-info float-right pt-2 pb-2 pl-3 pr-3"><h6>9897 9879 0989 0989</h6> </span>
                                                                    </div>
                                                                    <div class="clearfix mt-2 mb-2">
                                                                        <h6 class="float-left pt-1">Nama Penerima</h6>
                                                                        <span class="badge badge-info float-right pt-2 pb-2 pl-3 pr-3"><h6>Tripyuk</h6> </span>
                                                                    </div>
                                                                </div>
                                                                <hr class="m-0">
                                                                <div class="card-body">
                                                                    <div class="clearfix">
                                                                        <h6 class="float-left pt-1">Total Pembayaran</h6>
                                                                        <span class="badge badge-info float-right pt-2 pb-2 pl-3 pr-3"><h6>Rp. 500.123</h6> </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Step 2 -->

                                                    <!-- Step 3 -->
                                                    <div class="row no-gutters">
                                                        <div class="col-lg-12 clearfix">
                                                            <span class="badge badge-info p-2 mr-2 float-left">3</span>
                                                            <h6 class="float-left pt-1">Anda Sudah Membayar?</h6>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="card mt-3">
                                                                <div class="card-body">
                                                                    <span class="text-secondary">Setelah pembayaran anda dikonfirmasi, kami akan mengirim e-tiket penerbangan ke alamat email anda</span><br>
                                                                    <input type="submit" class="btn btn-primary pl-4 pr-4 mt-2" name="submit" value="Saya Sudah Bayar">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Step 3 -->

                                                </div>

                                            </div>
                                            <!-- end step pembayaran -->

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- end Detail Penerbangan -->

                        </div>

                    </div>
                    <!-- end left konten -->

                    <!-- right konten -->
                    <div class="col-lg-4">

                        <div class="card radius-0">

                            <div class="card-body">

                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <h6 class="text-secondary text-uppercase">No Pesanan</h6>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <h5 class="text-primary">12345677</h5>
                                    </div>
                                </div>

                                <hr>

                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <h6 class="text-secondary text-uppercase">Perjalanan Anda</h6>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <a href="#" data-toggle="modal" data-target="#detailPerjalanan">Detail</a>
                                    </div>
                                </div>

                                <div class="row no-gutters mt-2">
                                    <div class="col-lg-12 pt-2 pb-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h6>Penerbangan</h6>
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                <h6 class="text-secondary">19 April 2018</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 pt-3 pb-2">

                                        <ul class="list-group border-left border-top border-right border-bottom">

                                            <!-- empty head list -->
                                            <li class="list-group-item border-0">


                                            </li>
                                            <!-- end empty head list -->

                                            <!-- list -->
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>05.00</h6>
                                                        <p class="info-input m-0 p-0">19 April 2017</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>Jakarta</h6>
                                                        <p class="info-input m-0 p-0">Soekarno Hatta International Airport</p>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>05.00</h6>
                                                        <p class="info-input m-0 p-0">19 April 2017</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>Jakarta</h6>
                                                        <p class="info-input m-0 p-0">Soekarno Hatta International Airport</p>
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
                                </div>

                                <hr>

                                <div class="row mt-3 align-items-center">
                                    <div class="col-lg-12">
                                        <h6 class="text-secondary text-uppercase">Daftar Penumpang</h6>
                                    </div>

                                    <div class="col-lg-12 mt-2">

                                        <div class="row no-gutters mt-1 mb-2 p-2 bg-light align-items-center">
                                            <div class="col-lg-6">
                                                <h6 class="p-0 m-0">NamaPenumpang</h6>
                                            </div>
                                            <div class="col-lg-6 text-right">
                                                <span class="badge pt-2 pb-2 pl-3 pr-3 badge-info">Dewasa</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                    <!-- end right konten -->

                </div>
            </div>
        </section>
        <!-- end main konten -->

    </div>

</template>

<script>
export default {

    methods:{

        BayarSerkarang: function(e){

            this.$router.push({ path : 'sukses' });

        }

    }

}
</script>
