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
                            <!-- end Detail Penerbangan -->

                            <!-- form data pemesan -->
                            <div class="col-lg-12 mt-4">

                                <div class="row">

                                    <!-- Data Pemesan -->
                                    <div class="col-lg-12">

                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>Data Pemesan</h5>
                                                    </div>
                                                    <div class="col-lg-4 text-right">
                                                        <span class="text-primary">Isi Data</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body" v-if="checkOrderData != 0">
                                                <div class="row">
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

                                    <!-- Data Wisatawan Dewasa -->
                                    <div v-if="paxAdult > 0" v-for="(adultData,index) in paxAdultData" class="col-lg-12 mt-4">

                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>Data Wisatawan Dewasa - {{ index+1 }} </h5>
                                                    </div>
                                                    <div class="col-lg-4 text-right">
                                                        <span class="text-primary">Isi Data</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row" v-if="checkOrderData != 0">

                                                    <div class="col-lg-2 form-group">
                                                        <label for="titlePaxAdult">Title</label>
                                                        <select v-model="adultData.title" class="form-control" placeholder="Title" :id="titlePaxAdult.id[index]">
                                                            <option v-if="checkOrderData.title.length > 0" v-for="value in checkOrderData.title" :value="value.titleId">
                                                                {{ value.titleId }}
                                                            </option>
                                                        </select>
                                                        <p class="info-input">Gelar {{ titlePaxAdult.id[index] }} {{ idAdult.id[index] }}</p>
                                                    </div>

                                                    <div class="col-lg-5 form-group">
                                                        <label for="firstNameAdult1">Nama Depan</label>
                                                        <input v-model="adultData.firstName" class="form-control" type="text" placeholder="Nama Depan" :id="firstNameAdult.id[index]">
                                                        <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                    </div>

                                                    <div class="col-lg-5 form-group">
                                                        <label for="lastNameAdult1">Nama Belakang</label>
                                                        <input v-model="adultData.lastName" class="form-control" type="text" placeholder="Nama Belakang" :id="lastNameAdult.id[index]">
                                                        <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label for="notelpwisatawan">Tanggal Lahir</label>
                                                        <input v-model="adultData.birthDate" class="form-control" type="date" placeholder="Telephone" :id="birthDateAdult.date[index]">
                                                        <p class="info-input">Penumpang Dewasa(12 tahun ke atas)</p>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label for="ididentitas">NIK / Nomor Identitas</label>
                                                        <input v-model="adultData.id" class="form-control" type="text" placeholder="Id Kependudukan" :id="idAdult.id[index]">
                                                        <p class="info-input">NIK / Nomor Identitas Sesuai KTP/Paspor/SIM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end Data Dewasa -->

                                    <!-- Data Wisatawan Anak -->
                                    <div v-if="paxChildren > 0" v-for="(value, index, key) in paxChildren" class="col-lg-12 mt-4">

                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>Data Wisatawan Anak - {{ index+1 }} </h5>
                                                    </div>
                                                    <div class="col-lg-4 text-right">
                                                        <span class="text-primary">Isi Data</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row" v-if="checkOrderData != 0">

                                                    <div class="col-lg-2 form-group">
                                                        <label for="titlePaxAdult">Title</label>
                                                        <select v-model="titlePaxChildren.id[index]" class="form-control" :id="titlePaxChildren.id[index]">
                                                            <option v-if="checkOrderData.title.length > 0" v-for="value in checkOrderData.title" :value="value.titleId">
                                                                {{ value.titleId }}
                                                            </option>
                                                        </select>
                                                        <p class="info-input">Gelar {{ checkOrderData.id[index] }}</p>
                                                    </div>

                                                    <div class="col-lg-5 form-group">
                                                        <label for="firstNameAdult1">Nama Depan</label>
                                                        <input v-model="firstNameChildren.id[index]" class="form-control" type="text" placeholder="Nama Depan" :id="firstNameChildren.id[index]">
                                                        <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                    </div>

                                                    <div class="col-lg-5 form-group">
                                                        <label for="lastNameAdult1">Nama Belakang</label>
                                                        <input v-model="lastNameChildren.id[index]" class="form-control" type="text" placeholder="Nama Belakang" :id="lastNameChildren.id[index]">
                                                        <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label for="notelpwisatawan">Tanggal Lahir</label>
                                                        <input v-model="birtDateChildren.date[index]" class="form-control" type="date" placeholder="Telephone" :id="birtDateChildren.date[index]">
                                                        <p class="info-input">Penumpang Anak Anak(2 tahun ke atas)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end Data Wisatawan anak -->

                                    <!-- Data Wisatawan bayi -->
                                    <div v-if="paxInfant > 0" v-for="(value, index, key) in paxInfant" class="col-lg-12 mt-4">

                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h5>Data Wisatawan Bayi - {{ index+1 }} </h5>
                                                    </div>
                                                    <div class="col-lg-4 text-right">
                                                        <span class="text-primary">Isi Data</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row" v-if="checkOrderData != 0">

                                                    <div class="col-lg-2 form-group">
                                                        <label for="titlePaxAdult">Title</label>
                                                        <select v-model="titlePaxInfant.id[index]" class="form-control" :id="titlePaxInfant.id[index]">
                                                            <option v-if="checkOrderData.title.length > 0" v-for="value in checkOrderData.title" :value="value.titleId">
                                                                {{ value.titleId }}
                                                            </option>
                                                        </select>
                                                        <p class="info-input">Gelar {{ checkOrderData.id[index] }}</p>
                                                    </div>

                                                    <div class="col-lg-5 form-group">
                                                        <label for="firstNameAdult1">Nama Depan</label>
                                                        <input v-model="firstNameInfant.id[index]" class="form-control" type="text" placeholder="Nama Depan" :id="firstNameInfant.id[index]">
                                                        <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                    </div>

                                                    <div class="col-lg-5 form-group">
                                                        <label for="lastNameAdult1">Nama Belakang</label>
                                                        <input v-model="lastNameInfant.id[index]" class="form-control" type="text" placeholder="Nama Belakang" :id="lastNameInfant.id[index]">
                                                        <p class="info-input">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label for="notelpwisatawan">Tanggal Lahir</label>
                                                        <input v-model="birtDateInfant.date[index]" class="form-control" type="date" placeholder="Telephone" :id="birtDateInfant.date[index]">
                                                        <p class="info-input">Penumpang Anak Anak(2 tahun ke bawah)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end Data Wisatawan bayi -->

                                    <!-- submit button -->
                                    <div class="col-lg-12 mt-4">
                                        <a class="btn btn-primary btn-block pointer text-white" @click="validasi()">
                                            Lanjutkan ke Proses Pembayaran
                                        </a>
                                    </div>
                                    <!-- end submit button -->

                                </div>

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
                                                            <img class="w-100" :src="flightOrderData.maskapai_logo">
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
            validateOrder   : [],
            // end data object from controller

            datakutol       : 2,

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
            titlePemesan        : 'Mr',
            firstNamePemesan    : '',
            lastNamePemesan     : '',
            phoneNumberPemesan  : '',
            emailPemesan        : '',
            // end pemesan

            paxAdultData:[],

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
            }
            //end children

        }
    },
    created:function(){
        let app=this;
        app.createPaxAdultData();
        console.log(app.paxAdultData);
    },
    mounted : function() {
        let app = this;
        this.detailflightOrderData();
        app.$set(this.titlePaxAdult.id, 0, 'Mr');

    },
    methods:{
        createPaxAdultData:function(){
            let app = this;
            for(var i=0;i<app.paxAdult;i++){
                app.paxAdultData.push({
                    title       :'Mr',
                    firstName   :'',
                    lastName    :'',
                    birthDate   :'',
                    id          :'',
                })
            }
        },
        testlog() {
            console.log(this.paxAdultData);
        },
        submitPemesanan(e) {
            this.$router.push({ path : 'cek-pemesanan-tiket-pesawat' });
        },
        detailflightOrderData() {

            let app = this;
            let loader = this.$loading.show()

            app.$http.get('flight-detail-order/' + app.id + '/' + app.flightId + '/' + app.departId + '/' + app.arrivalId + '/' + app.paxAdult + '/' + app.paxChildren + '/' + app.paxInfant + '/' + app.goDate + '/' + app.roundTrip + '/' + app.returnDate + '/' + app.token)
            .then((response) => {

                app.searchQueries = response.data.searchQueries;
                app.flightOrderData = response.data.searchDataResult;
                app.checkOrderData = response.data.flightOrderData;
                console.log(response.data.searchQueries);
                console.log(response.data.searchDataResult);

                loader.hide();

            })
            .catch((errorResponse) => {
                let app = this;

                app.$swal(
                    'Gagal Memuat Data',
                    'Detail '+errorResponse
                )
                .then(function(){
                    location.reload();
                });
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

        validasi(){
            let app = this;
            if(app.firstNamePemesan == '' || app.lastNamePemesan == '' || app.phoneNumberPemesan == '' || app.emailPemesan == ''){
                app.$swal({
                    type    : 'error',
                    title   : 'Isi semua field Pemesan',
                    text    : 'Isi Nama Depan, Isi Nama Belakang, Isi Nomor Handphone, Isi Email',
                    confirmButtonColor  : '#f27d00',
                });
                console.log('isi semua data');
            }else{

                app.$swal({
                    title: 'Pastikan Data Sudah Benar',
                    text: "Jika anda melanjutkan proses ini anda tidak akan bisa mengubah data yang telah anda masukkan",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lanjutkan'
                })
                .then(function(result) {
                    if(result.value){

                        let loader = app.$loading.show();

                        app.$http.post('add-order/' + app.id + '/' + app.flightId + '/' + app.departId + '/' + app.arrivalId + '/' + app.paxAdult + '/' + app.paxChildren + '/' + app.paxInfant + '/' + app.goDate + '/' + app.roundTrip + '/' + app.returnDate + '/' + app.token, {
                            'titlePemesan'          : app.titlePemesan,
                            'firstNamePemesan'      : app.firstNamePemesan,
                            'lastNamePemesan'       : app.lastNamePemesan,
                            'phoneNumberPemesan'    : app.phoneNumberPemesan,
                            'emailPemesan'          : app.emailPemesan,
                            'paxAdultData'          : app.paxAdultData,
                        })
                        .then(function(response){

                            app.validateOrder = response.data.resultData;

                            if(app.validateOrder.statusOrderData == 'success'){
                                loader.hide()
                                app.$swal('berhasil').then(function(){

                                    app.$router.push({
                                        name : 'pembayaran',
                                        param : {
                                            token : app.validateOrder.token,
                                        }
                                    });

                                })
                                .catch((errorResponse) => {
                                    console.log(errorResponse);
                                })
                            }
                            console.log(app.validateOrder);
                        })
                    }
                })
                .catch((errorResponse) => {
                    let app = this;

                    app.$swal('Gagal Memuat Data').then(function(){
                        location.reload();
                    });
                    console.log(errorResponse);
                })

                // // jika penumpang dewasa lebih dari 1
                // if(app.paxAdult > 0){
                //     this.$router.push({
                //         name    : 'cekpemesanantiketpesawat',
                //         params  : {
                //             id          : app.id,
                //             flightId    : app.flightId,
                //             departId    : app.departId,
                //             arrivalId   : app.arrivalId,
                //             paxAdult    : app.paxAdult,
                //             paxChildren : app.paxChildren,
                //             paxInfant   : app.paxInfant,
                //             goDate      : app.goDate,
                //             roundTrip   : app.roundTrip,
                //             returnDate  : app.returnDate,
                //             token       : app.token,
                //         },
                //         query   : {
                //             titlePemesan        : app.titlePemesan,
                //             firstNamePemesan    : app.firstNamePemesan,
                //             lastNamePemesan     : app.lastNamePemesan,
                //             phoneNumberPemesan  : app.phoneNumberPemesan,
                //             emailPemesan        : app.emailPemesan,
                //             /* data Dewasa */
                //             paxAdultData        : app.paxAdultData,
                //             idAdult             : app.paxAdultData.id,
                //             titlePaxAdult       : app.paxAdultData.title,
                //             firstNameAdult      : app.paxAdultData.firstName,
                //             lastNameAdult       : app.paxAdultData.lastName,
                //             birthDateAdult      : app.paxAdultData.birthDate,
                //         }
                //     });
                // }
                // // jika penumpang dewasa dan anak anak lebih dari 1
                // else if(app.paxAdult > 0 && app.paxChildren > 0){
                //     this.$router.push({
                //         name    : 'cekpemesanantiketpesawat',
                //         params  : {
                //             id          : app.id,
                //             flightId    : app.flightId,
                //             departId    : app.departId,
                //             arrivalId   : app.arrivalId,
                //             paxAdult    : app.paxAdult,
                //             paxChildren : app.paxChildren,
                //             paxInfant   : app.paxInfant,
                //             goDate      : app.goDate,
                //             roundTrip   : app.roundTrip,
                //             returnDate  : app.returnDate,
                //             token       : app.token,
                //         },
                //         query   : {
                //             titlePemesan        : app.titlePemesan,
                //             firstNamePemesan    : app.firstNamePemesan,
                //             lastNamePemesan     : app.lastNamePemesan,
                //             phoneNumberPemesan  : app.phoneNumberPemesan,
                //             emailPemesan        : app.emailPemesan,
                //             /* data Dewasa */
                //             idAdult             : app.idAdult.id,
                //             titlePaxAdult       : app.titlePaxAdult.id,
                //             firstNameAdult      : app.firstNameAdult.id,
                //             lastNameAdult       : app.lastNameAdult.id,
                //             birthDateAdult      : app.birthDateAdult.date,
                //             /* data Anak Anak */
                //             idChildren          : idChildren.id,
                //             titlePaxChildren    : titlePaxChildren.id,
                //             firstNameChildren   : firstNameChildren.id,
                //             lastNameChildren    : lastNameChildren.id,
                //             birthDateChildren   : birthDateChildren.date,
                //         }
                //     });
                // }
                // // jika penumpang dewasa dan bayi lebih dari 1
                // else if(app.paxAdult > 0 && app.paxInfant > 0){
                //     this.$router.push({
                //         name    : 'cekpemesanantiketpesawat',
                //         params  : {
                //             id          : app.id,
                //             flightId    : app.flightId,
                //             departId    : app.departId,
                //             arrivalId   : app.arrivalId,
                //             paxAdult    : app.paxAdult,
                //             paxChildren : app.paxChildren,
                //             paxInfant   : app.paxInfant,
                //             goDate      : app.goDate,
                //             roundTrip   : app.roundTrip,
                //             returnDate  : app.returnDate,
                //             token       : app.token,
                //         },
                //         query   : {
                //             titlePemesan        : app.titlePemesan,
                //             firstNamePemesan    : app.firstNamePemesan,
                //             lastNamePemesan     : app.lastNamePemesan,
                //             phoneNumberPemesan  : app.phoneNumberPemesan,
                //             emailPemesan        : app.emailPemesan,
                //             /* data Dewasa */
                //             idAdult             : app.idAdult.id,
                //             titlePaxAdult       : app.titlePaxAdult.id,
                //             firstNameAdult      : app.firstNameAdult.id,
                //             lastNameAdult       : app.lastNameAdult.id,
                //             birthDateAdult      : app.birthDateAdult.date,
                //             /* data bayi */
                //             idInfant            : idInfant.id,
                //             titlePaxInfant      : titlePaxInfant.id,
                //             firstNameInfant     : firstNameInfant.id,
                //             lastNameInfant      : lastNameInfant.id,
                //             birthDateInfant     : birthDateInfant.date,
                //         }
                //     });
                // }
                // // jika penumpang dewasa, anak anak dan bayi lebih dari 1
                // else if(app.paxAdult > 0 && app.paxChildren > 0 && app.paxInfant > 0){
                //     this.$router.push({
                //         name    : 'cekpemesanantiketpesawat',
                //         params  : {
                //             id          : app.id,
                //             flightId    : app.flightId,
                //             departId    : app.departId,
                //             arrivalId   : app.arrivalId,
                //             paxAdult    : app.paxAdult,
                //             paxChildren : app.paxChildren,
                //             paxInfant   : app.paxInfant,
                //             goDate      : app.goDate,
                //             roundTrip   : app.roundTrip,
                //             returnDate  : app.returnDate,
                //             token       : app.token,
                //         },
                //         query   : {
                //             titlePemesan        : app.titlePemesan,
                //             firstNamePemesan    : app.firstNamePemesan,
                //             lastNamePemesan     : app.lastNamePemesan,
                //             phoneNumberPemesan  : app.phoneNumberPemesan,
                //             emailPemesan        : app.emailPemesan,
                //             /* data Dewasa */
                //             idAdult             : app.idAdult.id,
                //             titlePaxAdult       : app.titlePaxAdult.id,
                //             firstNameAdult      : app.firstNameAdult.id,
                //             lastNameAdult       : app.lastNameAdult.id,
                //             birthDateAdult      : app.birthDateAdult.date,
                //             /* data Anak Anak */
                //             idChildren          : idChildren.id,
                //             titlePaxChildren    : titlePaxChildren.id,
                //             firstNameChildren   : firstNameChildren.id,
                //             lastNameChildren    : lastNameChildren.id,
                //             birthDateChildren   : birthDateChildren.date,
                //             /* data bayi */
                //             idInfant            : idInfant.id,
                //             titlePaxInfant      : titlePaxInfant.id,
                //             firstNameInfant     : firstNameInfant.id,
                //             lastNameInfant      : lastNameInfant.id,
                //             birthDateInfant     : birthDateInfant.date,
                //         }
                //     });
                // }
            }
        },

        validate() {
            let app = this;
            if(app.firstNamePemesan == '' && app.lastNamePemesan == '' && app.phoneNumberPemesan == '' && app.emailPemesan == ''){
                app.$swal('Isi Semua Data');
                this.$router.back();
            }
        }

    },
}
</script>
