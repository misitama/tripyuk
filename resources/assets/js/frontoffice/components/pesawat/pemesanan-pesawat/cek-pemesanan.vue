<template>

    <div>

        <!-- section Step -->
        <section class="bg-primary text-white">

            <div class="container pt-3 pb-4">

                <div class="row no-gutters pb-2">
                    <div class="pt-3 text-center col-lg-12">
                        <div class="pr-4 pl-4">
                            <div class="d-inline-block font-weight-bold">
                                <i class="fa fa-bookmark mr-2"></i>
                                Isi Data
                                <i class="fa fa-long-arrow-alt-right ml-2 mr-2"></i>
                            </div>
                            <div class="d-inline-block">
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

        <!-- konten -->
        <section class="bg-white">
            <div class="container ptb-75">
                <div class="row">

                    <!-- left kontent -->
                    <div class="col-lg-8">
                        <div class="row">

                            <!-- Detail data pemesan -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-white pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="card-title p-0 m-0">Data Pemesan</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center mt-3 mb-4">
                                            <div class="col-lg-3">
                                                <div class="img-icon-5 text-center">
                                                    <img class="w-100" src="icon/promo.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="mb-3">Masuk / Daftar dan nikmati fitur khusus untuk member Traveloka</h5>
                                                <span><i class="fa fa-users mr-2 mb-3"></i> Passenger Quick Pick, buat pesanan lebih mudah</span>
                                                <br>
                                                <a href="#">Masuk / Daftar</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end data pemesan -->

                            <!-- form data pemesan -->
                            <div class="col-lg-12 mt-4">
                                <form class="" @submit.prevent="toPembayaran" method="post">

                                    <div class="row">

                                        <!-- Data Pemesan -->
                                        <div class="col-lg-12">

                                            <div class="card">
                                                <div class="card-header bg-white">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <h5>{{ titlePemesan }} {{ firstNamePemesan }} {{ lastNamePemesan }}</h5>
                                                        </div>
                                                        <div class="col-lg-4 text-right">
                                                            <a data-toggle="collapse" href="#ubahPemesan" role="button" aria-expanded="false" aria-controls="collapseExample">Ubah</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h6>No Handphone</h6>
                                                            <span>{{ phoneNumberPemesan }}</span>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <h6>Email</h6>
                                                            <span>{{ emailPemesan }}</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="collapse card-body m-0 pt-0" id="ubahPemesan">
                                                    <hr class="m-0">
                                                    <div v-if="checkOrderData != 0" class="row mt-3">
                                                        <div class="col-lg-2 form-group">
                                                            <label for="titlePemesan">Title</label>
                                                            <select v-model="titlePemesan" class="form-control" id="titlePemesan">
                                                                <option v-if="checkOrderData.pemesan.title.length > 0" v-for="value in checkOrderData.pemesan.title" :value="value.titleId">
                                                                    {{ value.titleId }}
                                                                </option>
                                                            </select>
                                                            <p class="info-input">Gelar</p>
                                                        </div>

                                                        <div class="col-lg-5 form-group">
                                                            <label for="namaDepanDataPemesan">Nama Depan</label>
                                                            <input v-model="firstNamePemesan" class="form-control" type="text" placeholder="Nama Depan" required id="namaDepanDataPemesan">
                                                            <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                        </div>

                                                        <div class="col-lg-5 form-group">
                                                            <label for="namaBelakangDataPemesan">Nama Belakang</label>
                                                            <input v-model="lastNamePemesan" class="form-control" type="text" placeholder="Nama Belakang" id="namaBelakangDataPemesan">
                                                            <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                        </div>

                                                        <div class="col-lg-6 form-group">
                                                            <label for="notelpdatapemesan">No Handphone</label>
                                                            <input v-model="phoneNumberPemesan" class="form-control" type="tel" placeholder="Telephone" id="notelpdatapemesan" name="" value="">
                                                            <p class="info-input">Contoh: +62812345678, untuk Kode Negara (+62) dan No. Handphone 0812345678</p>

                                                        </div>

                                                        <div class="col-lg-6 form-group">
                                                            <label for="email">Email</label>
                                                            <input v-model="emailPemesan" class="form-control" type="email" placeholder="Email" id="email" name="" value="">
                                                            <p class="info-input">Contoh: email@example.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end Data Pemesan -->

                                        <!-- Data Wisatawan -->
                                        <div v-if="paxAdult > 0" v-for="(value, index) in paxAdult" class="col-lg-12 mt-4">

                                            <div class="card">
                                                <div class="card-header bg-white">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <h5>Data Wisatawan - {{ titlePaxAdult.id }} {{ firstNameAdult.id }} {{ lastNameAdult.id }}</h5>
                                                        </div>
                                                        <div class="col-lg-4 text-right">
                                                            <a data-toggle="collapse" href="#ubahWisatawan" role="button" aria-expanded="false" aria-controls="collapseExample">Ubah</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="collapse card-body" id="ubahWisatawan">
                                                    <div class="row">

                                                        <div class="col-lg-2 form-group">
                                                            <label for="titlePaxAdult">Title</label>
                                                            <select v-model="titlePaxAdult.id" disabled class="form-control" placeholder="Title" :id="titlePaxAdult.id">
                                                                <option v-if="checkOrderData.title.length > 0" v-for="value in checkOrderData.title" :value="value.titleId">
                                                                    {{ value.titleId }}
                                                                </option>
                                                            </select>
                                                            <p class="info-input">Gelar {{ titlePaxAdult.id }} {{ idAdult.id }}</p>
                                                        </div>

                                                        <div class="col-lg-5 form-group">
                                                            <label for="firstNameAdult1">Nama Depan</label>
                                                            <input v-model="firstNameAdult.id" class="form-control" type="text" placeholder="Nama Depan" :id="firstNameAdult.id">
                                                            <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                        </div>

                                                        <div class="col-lg-5 form-group">
                                                            <label for="lastNameAdult1">Nama Belakang</label>
                                                            <input v-model="lastNameAdult.id" class="form-control" type="text" placeholder="Nama Belakang" :id="lastNameAdult.id">
                                                            <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                        </div>

                                                        <div class="col-lg-6 form-group">
                                                            <label for="notelpwisatawan">Tanggal Lahir</label>
                                                            <input v-model="birthDateAdult.date" class="form-control" type="date" placeholder="Telephone" :id="birthDateAdult.date">
                                                            <p class="info-input">Penumpang Dewasa(12 tahun ke atas)</p>
                                                        </div>

                                                        <div class="col-lg-6 form-group">
                                                            <label for="ididentitas">NIK / Nomor Identitas</label>
                                                            <input v-model="idAdult.id" class="form-control" type="text" placeholder="Id Kependudukan" :id="idAdult.id">
                                                            <p class="info-input">NIK / Nomor Identitas Sesuai KTP/Paspor/SIM</p>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- end Data Wisatawan -->

                                        <!-- Bagasi -->
                                        <div class="col-lg-12 mt-4">

                                            <div class="card">
                                                <div class="card-header bg-white">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5>Bagasi</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="col-lg-12 mb-4">
                                                            <span>Tuan Ferry Anggriawan</span>
                                                        </div>

                                                        <div class="col-lg-6 form-group">
                                                            <label for="bagasi">CGK - DPS</label>
                                                            <select class="form-control" id="bagasi">
                                                                <option>20 Kg - Rp. 0</option>
                                                                <option>25 kg - Rp. 66.000</option>
                                                                <option>30 Kg - Rp. 132.000</option>
                                                            </select>
                                                            <p class="info-input">Pilih Bagasi Sesuai Kebutuhan Anda</p>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- end Bagasi -->

                                        <!-- Produk Tambahan -->
                                        <div class="col-lg-12 mt-4">

                                            <div class="card">
                                                <div class="card-header bg-white">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5>Produk Tambahan</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">

                                                        <div class="col-lg-9">
                                                            <input class="m-0 p-0 d-inline-block" type="checkbox" id="asuransichubb" name="" value="">
                                                            <h6 class="pl-2 d-inline-block"><label class="p-0 m-0" for="asuransichubb">Asuransi Perjalanan CHUBB</label></h6>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <h4 class="d-inline-block text-primary">Rp. 33.000</h4><h5 class="d-inline-block">/pax</h5>
                                                        </div>

                                                        <div class="col-lg-12 mt-3 mb-3">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <a href="#">Pelajari Selengkapnya</a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- end Produk Tambahan -->

                                        <!-- informasi Tambahan -->
                                        <div class="col-lg-12 mt-4">
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
                                        <!-- end informasi Tambahan -->

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

                                                    </ul>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4">
                                                            Harga yang anda bayar :
                                                        </div>
                                                        <div class="col-lg-8 text-right">
                                                            <span class="badge badge-info pt-2 pb-2 pr-3 pl-3"><h6>Rp. 500.000</h6></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end detail harga -->

                                        <!-- submit button -->
                                        <div class="col-lg-12 mt-4">
                                            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Lanjutkan ke Pembayaran">
                                        </div>
                                        <!-- end submit button -->

                                    </div>

                                </form>
                            </div>
                            <!-- end form data pemesan -->

                        </div>
                    </div>
                    <!-- left kontent -->

                    <!-- right kontent -->
                    <div class="col-lg-4">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-white pt-3 pb-3">
                                        <h5>Pesanan Anda</h5>
                                    </div>
                                    <div class="card-body border-bottom">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h6>{{ flightOrderData.arrivalDate }}</h6>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <a class="d-block w-100" href="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-angle-up"></i></a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="collapse show" id="collapseExample">
                                                    <div class="row mt-3 align-items-center">
                                                        <div class="col-lg-3">
                                                            <img class="w-100" :src="flightOrderData.maskapai_logo" alt="">
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <h6 class="mb-1">{{ flightOrderData.maskapai }}</h6>
                                                            <p>{{ flightOrderData.stop }}</p>
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
                                                                    <h6>{{ flightOrderData.departTime }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ flightOrderData.departDate }}</p>
                                                                </div>

                                                                <div class="w-65 float-left">
                                                                    <h6>{{ flightOrderData.departCity }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ flightOrderData.departName }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="clearfix">

                                                            </div>

                                                        </li>
                                                        <li class="list-group-item border-0">

                                                            <i class="fa fa-circle icon-timeline"></i>
                                                            <div class="clearfix w-100 d-inline-block">
                                                                <div class="w-35 float-left">
                                                                    <h6>{{ flightOrderData.arrivalTime }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ flightOrderData.arrivalDate }}</p>
                                                                </div>

                                                                <div class="w-65 float-left">
                                                                    <h6>{{ flightOrderData.arrivalCity }}</h6>
                                                                    <p class="info-input m-0 p-0">{{ flightOrderData.arrivalName }}</p>
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

                                                    <a class="mt-4 btn btn-link p-0 pointer text-primary" @click="showModal()">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end right kontent -->

                    <!-- modal -->
                    <div>

                        <!-- modal detail pencarian -->
                        <b-modal centered size="lg" ref="detailPenerbanganModal" title="Detail Penerbangan">
                            <!-- jika tidak transit -->
                            <div v-if="flightOrderData.stop == 'Langsung'">
                                <div class="row no-gutters">

                                    <div class="col-lg-3">
                                        <h6>{{ flightOrderData.maskapai }}</h6>
                                        <small class="text-secondary">{{ flightOrderData.stop }}</small><br>
                                        <img :src="flightOrderData.maskapai_logo" alt="" class="w-50">
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
                                                        <h6>{{ flightOrderData.departTime }}</h6>
                                                        <p class="info-input m-0 p-0">{{ flightOrderData.departDate }}</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ searchQueries.departProvince }}</h6>
                                                        <p class="info-input m-0 p-0">{{ flightOrderData.departName }}</p>
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
                                                        <h6>{{ flightOrderData.duration_time }}</h6>
                                                    </div>
                                                </div>

                                                <div class="clearfix">

                                                </div>

                                            </li>
                                            <li class="list-group-item border-0">

                                                <i class="fa fa-circle icon-timeline"></i>
                                                <div class="clearfix w-100 d-inline-block">
                                                    <div class="w-35 float-left">
                                                        <h6>{{ flightOrderData.arrivalTime }}</h6>
                                                        <p class="info-input m-0 p-0">{{ flightOrderData.arrivalDate }}</p>
                                                    </div>

                                                    <div class="w-65 float-left">
                                                        <h6>{{ searchQueries.arrivalProvince }}</h6>
                                                        <p class="info-input m-0 p-0">{{ flightOrderData.arrivalName }}</p>
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
                                                <span>{{ flightOrderData.flightNumber }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Terminal</b> -
                                                <span>{{ flightOrderData.terminal }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Maskapai</b>
                                                <span>{{ flightOrderData.maskapai }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <b>Bagasi</b> -
                                                <span>{{ flightOrderData.baggage }}</span>
                                            </li>
                                            <li class="list-group-item pt-1 pb-1">
                                                <i class="fa fa-users"></i> <b>Penerbangan</b> -
                                                <span>{{ flightOrderData.stop }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end jika tidak transit -->

                            <!-- jika transit -->
                            <div v-else>
                                <div v-for="value in flightOrderData.flightInfos" class="row no-gutters mt-3">
                                    <div v-if="value.transitArrivalTextCity != ''" class="col-lg-12">
                                        <div class="alert alert-info text-center">
                                            <b>{{ value.transitArrivalTextCity }}</b> selama <b>{{ value.transitArrivalTextTime }}</b>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>{{ value.maskapai }}</h6>
                                        <small class="text-secondary">{{ flightOrderData.stop }}</small><br>
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
                                                    <span>{{ flightOrderData.stop }}</span>
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

                    </div>
                    <!-- end modal -->

                </div>
            </div>
        </section>
        <!-- end konten -->

    </div>

</template>

<script>

export default {

    data() {
        return {

            // data object from controller
            searchQueries   : [],
            flightOrderData : [],
            checkOrderData  : [],
            // end data object from controller

            // data from url
            id              : this.$route.params.id,
            flightId        : this.$route.params.flightId,
            departId        : this.$route.params.departId,
            arrivalId       : this.$route.params.arrivalId,
            paxAdult        : this.$route.params.paxAdult,
            paxChildren     : this.$route.params.paxChildren,
            paxInfant       : this.$route.params.paxInfant,
            goDate          : this.$route.params.goDate,
            roundTrip       : this.$route.params.roundTrip,
            returnDate      : this.$route.params.returnDate,
            token           : this.$route.params.token,
            // end data from url

            // pemesan
            titlePemesan        : this.$route.query.titlePemesan,
            firstNamePemesan    : this.$route.query.firstNamePemesan,
            lastNamePemesan     : this.$route.query.lastNamePemesan,
            phoneNumberPemesan  : this.$route.query.phoneNumberPemesan,
            emailPemesan        : this.$route.query.emailPemesan,
            // end pemesan

            //adult
            idAdult         : {
                id : [],
            },
            titlePaxAdult   : {
                id : [],
            },
            firstNameAdult : {
                id : [],
            },
            lastNameAdult  : {
                id : [],
            },
            birthDateAdult  : {
                date : []
            },
            //end adult

            //children
            idChildren          : {
                id : [],
            },
            titlePaxChildren    : {
                id : [],
            },
            firstNameChildren   : {
                id : [],
            },
            lastNameChildren    : {
                id : [],
            },
            birthDateChildren   : {
                date : []
            },
            //end children

            //infant
            idInfant        : {
                id : [],
            },
            titlePaxInfant  : {
                id : [],
            },
            firstNameInfant : {
                id : [],
            },
            lastNameInfant  : {
                id : [],
            },
            birthDateInfant : {
                date : []
            },
            //end children

            dataku : {
                id : [],
            },

        }
    },

    mounted() {
        this.getDataFromPemesan();
        this.detailflightOrderData();
    },

    methods:{

        getDataFromPemesan() {
            let app = this;

            if(app.paxAdult > 0){
                app.idAdult.id          = this.$route.query.idAdult;
                app.titlePaxAdult.id    = this.$route.query.titlePaxAdult;
                app.firstNameAdult.id   = this.$route.query.firstNameAdult;
                app.lastNameAdult.id    = this.$route.query.lastNameAdult;
                app.birthDateAdult.date = this.$route.query.birthDateAdult;
            }

            if(app.paxChildren > 0){
                app.idChildren.id          = this.$route.query.idChildren;
                app.titlePaxChildren.id    = this.$route.query.titlePaxChildren;
                app.firstNameChildren.id   = this.$route.query.firstNameChildren;
                app.lastNameChildren.id    = this.$route.query.lastNameChildren;
                app.birthDateChildren.date = this.$route.query.birthDateChildren;
            }
        },

        detailflightOrderData() {

            let app = this;
            let loader = this.$loading.show()

            app.$http.post('add-order/' + app.id + '/' + app.flightId + '/' + app.departId + '/' + app.arrivalId + '/' + app.paxAdult + '/' + app.paxChildren + '/' + app.paxInfant + '/' + app.goDate + '/' + app.roundTrip + '/' + app.returnDate + '/' + app.token, {
                _method : 'post',
                // pemesan
                titlePemesan        : this.$route.query.titlePemesan,
                firstNamePemesan    : this.$route.query.firstNamePemesan,
                lastNamePemesan     : this.$route.query.lastNamePemesan,
                phoneNumberPemesan  : this.$route.query.phoneNumberPemesan,
                emailPemesan        : this.$route.query.emailPemesan,
                // penumpang dewasa
                idAdult             : this.$route.query.idAdult,
                titlePaxAdult       : this.$route.query.titlePaxAdult,
                firstNameAdult      : this.$route.query.firstNameAdult,
                lastNameAdult       : this.$route.query.lastNameAdult,
                birthDateAdult      : this.$route.query.birthDateAdult,
            })
            .then((response) => {

                app.searchQueries = response.data.searchQueries;
                app.flightOrderData = response.data.searchDataResult;
                app.checkOrderData = response.data.flightOrderData;
                console.log(response.data.searchQueries);
                console.log(response.data.searchDataResult);

                loader.hide();

            })
            .catch((errorResponse) => {
                console.log(errorResponse);
            })

        },

        showModal() {
            this.$refs.detailPenerbanganModal.show();
        },

        hideModal(modal){
            if(modal == 'detailPenerbanganModal'){
                this.$refs.detailPenerbanganModal.hide();
            }
        },

        toPembayaran: function(e){

            this.$router.push({ path: 'pembayaran' });

        }

    }

}
</script>
