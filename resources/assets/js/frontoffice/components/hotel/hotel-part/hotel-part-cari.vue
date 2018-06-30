<template>
    <div>

        <!-- pencarian -->
        <section>
            <div class="container ptb-75">

                <!-- info pencarian -->
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <h4>Hasil Pencarian Hotel</h4>
                        <div class="pt-3 pb-1">
                            <span class="pr-4 pl-4 align-middle border-right border-left">
                                29 juli 2018 - 30 juli 2018
                            </span>
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
                            <div class="row align-items-end pb-2 pt-3">
                                <div class="col-lg-4">
                                    <label>Lokasi Hotel</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Lokasi Hotel / Destinasi">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label>Tamu</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Tamu">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label>Kamar</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Kamar">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Check-In</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Check-In">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label>Durasi</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Durasi">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label>Check-Out</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Chek-Out">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <router-link class="btn btn-primary btn-block mb-3" :to="{ name: 'carihotel' }">
                                        Update Pencarian
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Form Pencarian -->

                <div class="row">
                    <div class="col-lg-4">

                        <!-- Pengurutan -->
                        <div class="card">
                            <div class="card-header">
                                Urutkan Pencarian
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="urutanPencarian" id="hargaTertinggi" value="option1" checked>
                                            <label class="form-check-label" for="hargaTertinggi">
                                                Harga Tertinggi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="urutanPencarian" id="hargaTerendah" value="option1" checked>
                                            <label class="form-check-label" for="hargaTerendah">
                                                Harga Terendah
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="urutanPencarian" id="nilaiReview" value="option1" checked>
                                            <label class="form-check-label" for="nilaiReview">
                                                Nilai Review
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="urutanPencarian" id="popularitas" value="option1" checked>
                                            <label class="form-check-label" for="popularitas">
                                                Popularitas
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Pengurutan -->

                        <!-- filter pencarian -->
                        <div class="card mt-3">
                            <div class="card-header">
                                Filter Pencarian
                            </div>
                            <div class="card-body">
                                <div class="row border-bottom align-items-center">
                                    <div class="col-lg-12 mb-3">
                                        <h6 class="float-left">Kisaran Harga</h6>
                                        <a class="float-right" data-toggle="collapse" href="#collapseKisaranHarga" role="button" aria-expanded="false" aria-controls="collapseKisaranHarga">
                                            #
                                        </a>
                                    </div>
                                    <div class="collapse show col-lg-12 mb-3" id="collapseKisaranHarga">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom align-items-center mt-3">
                                    <div class="col-lg-12 mb-3">
                                        <h6 class="float-left">Bintang</h6>
                                        <a class="float-right" data-toggle="collapse" href="#collapseBintang" role="button" aria-expanded="false" aria-controls="collapseKisaranHarga">
                                            #
                                        </a>
                                    </div>
                                    <div class="collapse show col-lg-12 mb-3" id="collapseBintang">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="1star">
                                                    <label class="custom-control-label" for="1star">
                                                        <i class="fa fa-star text-primary"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2star">
                                                    <label class="custom-control-label" for="2star">
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="3star">
                                                    <label class="custom-control-label" for="3star">
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="4star">
                                                    <label class="custom-control-label" for="4star">
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="5star">
                                                    <label class="custom-control-label" for="5star">
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                        <i class="fa fa-star text-primary"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom align-items-center mt-3">
                                    <div class="col-lg-12 mb-3">
                                        <h6 class="float-left">Fasilitas</h6>
                                        <a class="float-right" data-toggle="collapse" href="#collapseFasilitas" role="button" aria-expanded="false" aria-controls="collapseKisaranHarga">
                                            #
                                        </a>
                                    </div>
                                    <div class="collapse show col-lg-12 mb-3" id="collapseFasilitas">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="wifi">
                                                    <label class="custom-control-label" for="wifi">
                                                        Wifi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="kolamrenang">
                                                    <label class="custom-control-label" for="kolamrenang">
                                                        Kolam Renang
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="parkir">
                                                    <label class="custom-control-label" for="parkir">
                                                        Parkir
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="restoran">
                                                    <label class="custom-control-label" for="restoran">
                                                        Restoran
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="resepsionis24jam">
                                                    <label class="custom-control-label" for="resepsionis24jam">
                                                        Resepsionis 24 Jam
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="lift">
                                                    <label class="custom-control-label" for="lift">
                                                        Lift
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="akseskursiroda">
                                                    <label class="custom-control-label" for="akseskursiroda">
                                                        Akses Kursi Roda
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom align-items-center mt-3">
                                    <div class="col-lg-12 mb-3">
                                        <h6 class="float-left">Tipe Akomodasi</h6>
                                        <a class="float-right" data-toggle="collapse" href="#collapseAkomodasiType" role="button" aria-expanded="false" aria-controls="collapseKisaranHarga">
                                            #
                                        </a>
                                    </div>
                                    <div class="collapse show col-lg-12 mb-3" id="collapseAkomodasiType">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="akomodasihotel">
                                                    <label class="custom-control-label" for="akomodasihotel">
                                                        Hotel
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="akomodasihostel">
                                                    <label class="custom-control-label" for="akomodasihostel">
                                                        Hostel
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="resor">
                                                    <label class="custom-control-label" for="resor">
                                                        Resor
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="BnB">
                                                    <label class="custom-control-label" for="BnB">
                                                        B&B
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="homestay">
                                                    <label class="custom-control-label" for="homestay">
                                                        Homestay
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="guesthouse">
                                                    <label class="custom-control-label" for="guesthouse">
                                                        Guest House
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="apartemen">
                                                    <label class="custom-control-label" for="apartemen">
                                                        Apartemen
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end filter pencarian -->

                    </div>
                    <div class="col-lg-8">

                        <!-- search -->
                        <div class="row bg-light pt-3 pb-3 mb-2">
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Hotel">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary btn-block">Cari</a>
                            </div>
                        </div>
                        <!-- end search -->

                        <!-- hasil pencarian -->
                        <div class="row bg-light align-items-center pt-3 pb-3 mt-2 mb-2">
                            <div class="col-lg-3">
                                <img src="frontoffice/img/promo/promo-1.jpg" class="w-100" alt="">
                            </div>
                            <div class="col-lg-6 border-right">
                                <h5>Garden Permata Hotel Surabaya</h5>
                                <span class="d-block">
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                </span>
                                <span class="d-block mt-2">
                                    <i class="fa fa-map-marker"></i> Surabaya, Rungkut
                                </span>
                                <span class="d-block">
                                    <b>Review :</b> 4.5 <i class="fa fa-star text-primary"></i>
                                </span>
                                <router-link class="btn btn-primary btn-block mt-2" :to="{ name: 'detailhotel' }">
                                    Lihat Hotel
                                </router-link>
                            </div>
                            <div class="col-lg-3 text-center">
                                <small><b>Harga / Malam</b></small>
                                <h5 class="text-primary">Rp 1.000.000</h5>
                                <small>Termasuk Pajak</small>
                            </div>
                        </div>
                        <div class="row bg-light align-items-center pt-3 pb-3 mt-2 mb-2">
                            <div class="col-lg-3">
                                <img src="frontoffice/img/promo/promo-1.jpg" class="w-100" alt="">
                            </div>
                            <div class="col-lg-6 border-right">
                                <h5>Garden Permata Hotel Surabaya</h5>
                                <span class="d-block">
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                    <i class="fa fa-star text-primary"></i>
                                </span>
                                <span class="d-block mt-2">
                                    <i class="fa fa-map-marker"></i> Surabaya, Rungkut
                                </span>
                                <span class="d-block">
                                    <b>Review :</b> 4.5 <i class="fa fa-star text-primary"></i>
                                </span>
                                <router-link class="btn btn-primary btn-block mt-2" :to="{ name: 'detailhotel' }">
                                    Lihat Hotel
                                </router-link>
                            </div>
                            <div class="col-lg-3 text-center">
                                <small><b>Harga / Malam</b></small>
                                <h5 class="text-primary">Rp 1.000.000</h5>
                                <small>Termasuk Pajak</small>
                            </div>
                        </div>
                        <!-- end hasil pencarian -->
                    </div>
                </div>

            </div>
        </section>
        <!-- end pencarian -->

    </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
