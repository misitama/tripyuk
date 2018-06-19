<template>

    <div>

        <!-- carousel & booking -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <!-- dot navigation item slider -->
            <ol class="carousel-indicators d-none d-sm-flex">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <!-- end dot navigation item slider -->

            <!-- item slider -->
            <div class="carousel-inner d-none d-sm-block">
                <div class="carousel-item active">
                    <div class="d-block w-100 img-slider" style="background-image:url(img/slider1.jpg);"></div>

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 ml-auto">
                                    <h5>Cari & booking hotel dengan harga termurah di sini!</h5>
                                    <p>Temukan harga terbaik untuk setiap produk tipyuk.com yang Anda butuhkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-block w-100 img-slider" style="background-image:url(img/slider2.jpg);"></div>

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 ml-auto">
                                    <h5>Cari & booking hotel dengan harga termurah di sini!</h5>
                                    <p>Temukan harga terbaik untuk setiap produk tipyuk.com yang Anda butuhkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 img-slider" style="background-image:url(img/slider3.jpg);"></div>

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 ml-auto">
                                    <h5>Cari & booking hotel dengan harga termurah di sini!</h5>
                                    <p>Temukan harga terbaik untuk setiap produk tipyuk.com yang Anda butuhkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 img-slider" style="background-image:url(img/slider4.jpg);"></div>

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 ml-auto">
                                    <h5>Cari & booking hotel dengan harga termurah di sini!</h5>
                                    <p>Temukan harga terbaik untuk setiap produk tipyuk.com yang Anda butuhkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item slider -->

            <!-- tab booking -->
            <div class="container">
                    <div class="row">

                        <div class="col-lg-7 d-sm-absolute absolute-carousel mr-auto">
                            <div class="row bg-light tab-head">

                                <ul class="nav nav-pills" id="book-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link ml-0 tab-link-rounded" id="book-pesawat-tab" data-toggle="pill" href="#book-pesawat" role="tab" aria-controls="pills-pesawat" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/pesawat.png" alt=""> </span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat active" id="book-hotel-tab" data-toggle="pill" href="#book-hotel" role="tab" aria-controls="pills-hotel" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/hotel.png" alt=""> </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat" id="book-kai-tab" data-toggle="pill" href="#book-kai" role="tab" aria-controls="pills-kai" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/kai.png" alt=""> </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat" id="book-pesawathotel-tab" data-toggle="pill" href="#book-pesawathotel" role="tab" aria-controls="pills-pesawathotel" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/pesawat-hotel.png" alt=""> </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat" id="book-pulsa-tab" data-toggle="pill" href="#book-pulsa" role="tab" aria-controls="pills-pulsa" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/mobile-data.png" alt=""> </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat" id="book-aktivitas-tab" data-toggle="pill" href="#book-aktivitas" role="tab" aria-controls="pills-aktivitas" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/aktivitas.png" alt=""> </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat" id="book-ppob-tab" data-toggle="pill" href="#book-ppob" role="tab" aria-controls="pills-ppob" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/ppob.png" alt=""> </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tab-link-flat" id="book-ktour-tab" data-toggle="pill" href="#book-ktour" role="tab" aria-controls="pills-ktour" aria-selected="true"><span class="icon-menu mr-0"><img src="icon/kustom-tour.png" alt=""> </span></a>
                                    </li>
                                </ul>

                            </div>
                            <div class="row bg-white pt-3 pb-4 book-tab-content">

                                <div class="col-lg-12">

                                    <div class="tab-content text-left" id="book-tabContent">

                                        <!-- tab content pesawat -->
                                        <div class="tab-pane fade" id="book-pesawat" role="tabpanel" aria-labelledby="book-pesawat-tab">
                                            <form class="" action="cari-tiket.html" method="post">

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

                                                    <div class="form-group col-lg-12">
                                                        <label for="tujuan"><h6>Jumlah Penumpang</h6></label>
                                                        <div class="row no-gutters">

                                                            <div class="col-lg-4 pr-2">
                                                                <label for="tujuan">Dewasa</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="text" value="{{ jumpeDewasa }}" class="form-control" placeholder="Dewasa">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary" v-on:click="jumpeDewasa += 1" type="button"><i class="fa fa-plus"></i></button>
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

                                                    <div class="form-group col-lg-4 pr-2">
                                                        <label for="tujuan">Tanggal Berangkat</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                            </div>
                                                            <input type="date" class="form-control" aria-label="tujuan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-check col-lg-4 pl-1 pr-2">
                                                        <input class="form-check-input pb-1 m-0 position-relative" type="checkbox" name="pulangpergi" id="pulangpergi" value="">
                                                        <label class="form-check-label" for="pulangpergi">Pulang Pergi</label>
                                                        <div class="input-group pt-2">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                            </div>
                                                            <input type="date" class="form-control" disabled aria-label="tujuan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-lg-4 pl-1">
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

                                                </div>

                                                <div class="row no-gutters align-items-end">

                                                    <div class="form-group col-lg-6 pr-2">
                                                        <label for="tujuan">Fleksibilitas Tiket</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-wheelchair"></i> </span>
                                                            </div>
                                                            <select class="form-control">
                                                                <option>Default select</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-lg-6 pl-2">
                                                        <input class="form-control btn btn-primary" type="submit" name="submit" value="Cari Tiket">
                                                    </div>

                                                </div>


                                            </form>

                                        </div>
                                        <!-- end tab content pesawat -->

                                        <!-- tab content hotel -->
                                        <div class="tab-pane fade show active" id="book-hotel" role="tabpanel" aria-labelledby="book-hotel-tab">
                                            <form class="" action="index.html" method="post">

                                                <div class="row no-gutters">
                                                    <div class="form-group col-lg-12">
                                                        <label for="tujuan">Kota, tujuan, atau nama hotel</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-map-marker-alt"></i> </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Kota, tujuan, atau nama hotel" aria-label="tujuan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row no-gutters">
                                                    <div class="form-group col-lg-3 pr-2">
                                                        <label for="tujuan">Tamu</label>
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
                                                        <label for="tujuan">Kamar</label>
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
                                                        <label for="tujuan">Check-In</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                            </div>
                                                            <input type="date" class="form-control" aria-label="tujuan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row no-gutters align-items-end">

                                                    <div class="form-group col-lg-3 pr-2">
                                                        <label for="tujuan">Durasi</label>
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

                                                    <div class="form-group col-lg-5 pr-2">
                                                        <label for="tujuan">Check-Out</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                                                            </div>
                                                            <input type="date" class="form-control" aria-label="tujuan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-lg-4 text-right">
                                                        <input class="btn btn-primary btn-block pr-5 pl-5" type="submit" name="submit" value="Cari Hotel">
                                                    </div>

                                                </div>

                                            </form>
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
                            <div class="row bg-light tab-footer pt-2 pb-2">
                                <div class="col-lg-12">
                                    <a href="#">Tripyuk Best Price Guarantee</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <!-- end tab booking -->

            <!-- arrow navigation slider -->
            <a class="carousel-control-prev d-none d-sm-flex" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none d-sm-flex" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- end arrow navigation slider -->

        </div>
        <!-- end carousel -->

    </div>

</template>

<script>
export default {

    data:{

        jumpeDewasa : 0;

    }


}
</script>
