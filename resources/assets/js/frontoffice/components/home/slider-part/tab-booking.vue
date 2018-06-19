<template>

    <div>

        <!-- tab booking -->
        <div class="container">
                <div class="row">

                    <div class="col-lg-7 d-sm-absolute absolute-carousel mr-auto">
                        <div class="row bg-dark-transparent tab-head">

                            <ul class="nav nav-pills" id="book-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link ml-0 tab-link-rounded active" id="book-pesawat-tab" data-toggle="pill" href="#book-pesawat" role="tab" aria-controls="pills-pesawat" aria-selected="true"><span class="icon-menu mr-0"><img src="frontoffice/icon/pesawat.png" alt=""> </span> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-hotel-tab" data-toggle="pill" href="#book-hotel" role="tab" aria-controls="pills-hotel" aria-selected="true"><span class="icon-menu mr-0"><img src="frontoffice/icon/hotel.png" alt=""> </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-kai-tab" data-toggle="pill" href="#book-kai" role="tab" aria-controls="pills-kai" aria-selected="true"><span class="icon-menu mr-0"><img src="frontoffice/icon/kai.png" alt=""> </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-pesawathotel-tab" data-toggle="pill" href="#book-pesawathotel" role="tab" aria-controls="pills-pesawathotel" aria-selected="true"><span class="icon-menu mr-0"><img src="frontoffice/icon/pesawat-hotel.png" alt=""> </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-aktivitas-tab" data-toggle="pill" href="#book-aktivitas" role="tab" aria-controls="pills-aktivitas" aria-selected="true"><span class="icon-menu mr-0"><img src="frontoffice/icon/aktivitas.png" alt=""> </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tab-link-flat" id="book-ppob-tab" data-toggle="pill" href="#book-ppob" role="tab" aria-controls="pills-ppob" aria-selected="true"><span class="icon-menu mr-0"><img src="frontoffice/icon/ppob.png" alt=""> </span></a>
                                </li>
                            </ul>

                        </div>
                        <div class="row bg-black-transparent pt-3 pb-2 book-tab-content">

                            <div class="col-lg-12">

                                <div class="tab-content text-left" id="book-tabContent">

                                    <!-- tab content pesawat -->
                                    <div class="tab-pane fade show active" id="book-pesawat" role="tabpanel" aria-labelledby="book-pesawat-tab">

                                        <tab-pesawat></tab-pesawat>

                                    </div>
                                    <!-- end tab content pesawat -->

                                    <!-- tab content hotel -->
                                    <div class="tab-pane fade" id="book-hotel" role="tabpanel" aria-labelledby="book-hotel-tab">

                                        <tab-hotel></tab-hotel>

                                    </div>
                                    <!-- end tab content hotel -->

                                    <!-- tab content kereta api -->
                                    <div class="tab-pane fade" id="book-kai" role="tabpanel" aria-labelledby="book-kai-tab">
                                        <form class="" action="index.html" method="post">

                                            <div class="row no-gutters">
                                                <div class="form-group col-lg-6 pr-2">
                                                    <label for="tujuan">Kota Asal</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-plane"></i> </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Kota Asal" aria-label="tujuan" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6 pl-2">
                                                    <label for="tujuan">Kota Tujuan</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-plane"></i> </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Kota Tujuan" aria-label="tujuan" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                <div class="form-group col-lg-3 pr-2">
                                                    <label for="tujuan">Dewasa</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary" type="button"> <i class="fa fa-minus"></i> </button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button"> <i class="fa fa-plus"></i> </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-3 pr-2">
                                                    <label for="tujuan">Bayi</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-secondary" type="button"> <i class="fa fa-minus"></i> </button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button"> <i class="fa fa-plus"></i> </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label for="tujuan">Tanggal Berangkat</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                        </div>
                                                        <input type="date" class="form-control" aria-label="tujuan" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row no-gutters align-items-end">

                                                <div class="form-group form-check col-lg-6 pl-1 pr-2">
                                                    <input class="form-check-input pb-1 m-0 position-relative" type="checkbox" name="pulangpergikai" id="pulangpergikai" value="">
                                                    <label class="form-check-label" for="pulangpergikai">Pulang Pergi</label>
                                                    <div class="input-group pt-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                        </div>
                                                        <input type="date" class="form-control" disabled aria-label="tujuan" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <input class="form-control btn btn-primary btn-block pr-5 pl-5" type="submit" name="submit" value="Cari Kereta">
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                    <!-- end tab content kereta api -->

                                    <!-- tab content pesawat & hotel -->
                                    <div class="tab-pane fade" id="book-pesawathotel" role="tabpanel" aria-labelledby="book-pesawathotel-tab">
                                        <form class="" action="index.html" method="post">

                                            <div class="row no-gutters">
                                                <div class="form-group col-lg-12">
                                                    <label for="tujuan"><h5>Detail Penerbangan</h5></label>
                                                    <div class="row no-gutters">

                                                        <div class="col-lg-6">
                                                            <label for="tujuan">Kota Asal</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-plane"></i> </span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Kota Asal" aria-label="tujuan" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-6 pl-2">
                                                            <label for="tujuan">Kota Tujuan</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-plane"></i> </span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Kota Tujuan" aria-label="tujuan" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-4 pr-2">
                                                            <label for="tujuan">Tanggal Berangkat</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                                </div>
                                                                <input type="date" class="form-control" aria-label="tujuan" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>

                                                        <div class="form-group form-check col-lg-4 pr-2">
                                                            <input class="form-check-input pb-1 m-0 position-relative" type="checkbox" name="pulangpergihotelpesawat" id="pulangpergihotelpesawat" value="">
                                                            <label class="form-check-label" for="pulangpergihotelpesawat">Pulang Pergi</label>
                                                            <div class="input-group pt-2">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                                </div>
                                                                <input type="date" class="form-control" disabled aria-label="tujuan" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <label for="tujuan">Kelas Penerbangan</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-wheelchair"></i> </span>
                                                                </div>
                                                                <select class="form-control">
                                                                    <option>Default select</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 pr-2">
                                                            <label for="tujuan">Dewasa</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Dewasa" aria-label="tujuan" aria-describedby="basic-addon1">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 pr-2 pl-1">
                                                            <label for="tujuan">Anak</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 pl-1">
                                                            <label for="tujuan">Bayi</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">

                                                <div class="form-group col-lg-12">
                                                    <label for="tujuan"><h5>Detail Hotel</h5></label>
                                                    <div class="row no-gutters align-items-end">

                                                        <div class="form-group col-lg-4">
                                                            <label for="tujuan">Kota, tujuan atau nama hotel</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-wheelchair"></i> </span>
                                                                </div>
                                                                <input class="form-control" placeholder="Kota, tujuan atau nama hotel" type="text" name="" value="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-4 pl-2">
                                                            <label for="tujuan">Check-In</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                                </div>
                                                                <input class="form-control" type="date" name="" value="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-4 pl-2">
                                                            <label for="tujuan">Check-Out</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                                </div>
                                                                <input class="form-control" type="date" name="" value="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-4">
                                                            <label for="tujuan">Tamu</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                                <input class="form-control" placeholder="Tamu" type="text" name="" value="">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-4 pl-2">
                                                            <label for="tujuan">Kamar</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                                <input class="form-control" placeholder="Tamu" type="text" name="" value="">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-4 pl-2">
                                                            <input class="form-control btn btn-primary" type="submit" name="submit" value="Cari Paket">
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </form>

                                    </div>
                                    <!-- end tab content pesawat & hotel -->

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

import TabPesawat from './tab-booking-part/pesawat.vue';
import TabHotel from './tab-booking-part/hotel.vue';

export default {
    data(){
        return{

        }

    },
    components:{

        'tab-pesawat'   : TabPesawat,
        'tab-hotel'     : TabHotel,

    },
}
</script>
