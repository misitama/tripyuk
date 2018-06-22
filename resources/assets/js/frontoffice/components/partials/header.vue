<template>

    <div>
        <!-- header -->
        <div class="header sticky-bar">

            <!-- top bar -->
            <div class="pt-1 bg-utama">
                <span></span>
            </div>
            <!-- end top bar -->

            <!-- nav menu -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">

                    <a class="navbar-brand" @click.prevent="navigateTo('/')">
                        <img style="cursor: pointer" src="frontoffice/img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto fa-ul">
                            <li class="nav-item">
                                <router-link class="nav-link" :to="{ name: 'blog' }">
                                    <span class="icon-menu">
                                        <img src="frontoffice/icon/promo.png"/>
                                    </span>
                                    Blog
                                    <span class="sr-only">(current)</span>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="icon-menu"><img src="frontoffice/icon/cek-pesanan.png"/></span> Cek Pesanan <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarBahasaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-menu"><img src="frontoffice/icon/idr.png"/></span>
                                    Bahasa
                                </a>
                                <div class="dropdown-menu dropdown-w-300" aria-labelledby="navbarBahasaDropdown">
                                    <router-link class="dropdown-item second-menu-item" :to="{name:'tiketpesawat'}">
                                        <img class="second-icon-menu" src="frontoffice/icon/icon/tiket-pesawat.png">
                                        Indonesia
                                    </router-link>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                        English
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarCurencyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-menu"><img src="frontoffice/icon/idr.png"/></span>
                                    IDR
                                </a>
                                <div class="dropdown-menu dropdown-w-300" aria-labelledby="navbarCurencyDropdown">
                                    <router-link class="dropdown-item second-menu-item" :to="{name:'tiketpesawat'}">
                                        <img class="second-icon-menu" src="frontoffice/icon/icon/tiket-pesawat.png">
                                        IDR (Rupiah)
                                    </router-link>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                        RM (Ringgit)
                                    </a>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                        USD (USD Dollar)
                                    </a>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                        SGD (SGD Dollar)
                                    </a>
                                </div>
                            </li>

                            <li id="myDropDown" class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-menu"><img src="frontoffice/icon/akun-saya.png"/></span>
                                    Akun Saya
                                </a>

                                <div id="myTabs" class="dropdown-menu m-0 p-0 login" aria-labelledby="navbarDropdown">

                                    <ul class="nav nav-tabs border-0 mb-3">
                                        <li class="text-center w-50 border-right">
                                            <a class="pt-2 pb-2 d-block active" data-toggle="tab" href="#Login">Login</a>
                                        </li>
                                        <li class="text-center w-50 border-left">
                                            <a class="pt-2 pb-2 d-block" data-toggle="tab" href="#Register">Register</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mb-3 pl-2 pr-2">
                                        <div class="tab-pane active" id="Login">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5>Log-In ke akun anda</h5>
                                                    <form class="mt-3" action="index.html" method="post">
                                                        <div class="row">
                                                            <div class="form-group col-lg-12">
                                                                <label for="email">Email/No Handphone</label>
                                                                <input class="form-control" type="email" name="email" value="" placeholder="Email/No Handphone">
                                                            </div>

                                                            <div class="form-group col-lg-12">
                                                                <label for="password">Password</label>
                                                                <a class="float-right" href="#">Lupa Password?</a>
                                                                <div class="clearfix"></div>
                                                                <input class="form-control" type="password" name="password" value="" placeholder="Password">
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="row no-gutters align-items-center">
                                                                    <div class="form-group col-lg-6">
                                                                        <span>Belum Punya Akun?</span>
                                                                        <a href="#">Daftar</a>
                                                                    </div>

                                                                    <div class="form-group col-lg-6">
                                                                        <input class="form-control btn btn-primary" type="submit" name="submit" value="Log-In">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane" id="Register">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5>Daftar Akun Baru</h5>
                                                    <form class="mt-3" action="index.html" method="post">
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label for="email">Nama Depan</label>
                                                                <input class="form-control" type="text" name="namaDepan" value="" placeholder="Nama Depan">
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label for="email">Nama Belakang</label>
                                                                <input class="form-control" type="text" name="namaBelakang" value="" placeholder="Nama Belakang">
                                                            </div>

                                                            <div class="form-group col-lg-12">
                                                                <label for="email">Email/No Handphone</label>
                                                                <input class="form-control" type="email" name="email" value="" placeholder="Email/No Handphone">
                                                            </div>

                                                            <div class="form-group col-lg-12">
                                                                <label for="password">Password</label>
                                                                <input class="form-control" type="password" name="password" value="" placeholder="Password">
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="row no-gutters align-items-center">
                                                                    <div class="form-group col-lg-6">
                                                                        <span>Sudah Punya Akun?</span>
                                                                        <a href="#">Masuk</a>
                                                                    </div>

                                                                    <div class="form-group col-lg-6">
                                                                        <input class="form-control btn btn-primary" type="submit" name="submit" value="Register">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </li>
                            <li class="nav-item mr-2">
                                <router-link class="nav-link pl-4 pr-4 nav-bordered" :to="{ name : 'promo' }">
                                    <span class="icon-menu">
                                        <img src="frontoffice/icon/kustom-tour.png"/>
                                    </span> Promo <span class="sr-only">(current)</span>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-4 pr-4 nav-bordered" href="#"><span class="icon-menu"><img src="frontoffice/icon/kustom-tour.png"/></span> Kustom Tour <span class="sr-only">(current)</span></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </nav>
            <!-- end nav menu -->

            <!-- second menu -->
            <div class="container-fluid bg-light m-auto d-none d-sm-block d-lg-block">
                <div class="row no-gutters align-items-center text-center">

                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="tiketMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icon/icon/tiket.png" alt="">
                            </span>
                            Tiket
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="tiketMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketpesawat'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/tiket-pesawat.png">
                                Tiket Pesawat
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketkeretaapi'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                Tiket Kereta Api
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketbus'}">
                                <img class="second-icon-menu" src="frontoffice/icon/bus.png">
                                Tiket Bus
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketkapal'}">
                                <img class="second-icon-menu" src="frontoffice/icon/kapal.png">
                                Tiket Kapal
                            </router-link>
                        </div>
                    </div>
                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="umrohHajiMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icon/icon/umroh-text.png" alt="">
                            </span>
                            Umroh & Haji
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="tiketMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'haji'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/tiket-pesawat.png">
                                Haji
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'umroh'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                Umroh
                            </router-link>
                        </div>
                    </div>
                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="umrohHajiMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icon/icon/tour-text.png" alt="">
                            </span>
                            Tour
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="tiketMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tourdomestik'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/tiket-pesawat.png">
                                Domestik
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tourinternational'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/kereta-text.png">
                                International
                            </router-link>
                        </div>
                    </div>
                    <div class="col dropdown">
                        <router-link class="second-menu pt-2 pb-2" :to="{ name: 'hotel' }">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icon/icon/hotel-text.png" alt="">
                            </span>
                            Hotel
                        </router-link>
                    </div>
                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="transportMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary"><img src="frontoffice/icon/transport.png" alt=""></span>
                            Transport
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="transportMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'penjemputan'}">
                                <img class="second-icon-menu" src="frontoffice/icon/shuttle.png">
                                Penjemputan
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'rentalmobil'}">
                                <img class="second-icon-menu" src="frontoffice/icon/icon/rent-text.png">
                                Rental Mobil
                            </router-link>
                        </div>
                    </div>
                    <div class="col dropdown">
                        <router-link class="second-menu pt-2 pb-2" :to="{ name: 'kuliner' }">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icon/icon/kuliner-text.png" alt="">
                            </span>
                            Kuliner
                        </router-link>
                    </div>
                    <div class="col dropdown">
                        <router-link class="second-menu pt-2 pb-2" :to="{ name: 'toko' }">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icon/ecommerce.png" alt="">
                            </span>
                            E-Commerce
                        </router-link>
                    </div>
                </div>
            </div>
            <!-- end second menu -->

        </div>
        <!-- end header -->
        <div class="header-aliases">

        </div>
    </div>

</template>

<script>
export default {

    methods : {

        navigateTo : function(path){

            this.$router.push({ path : path });

        }

    }

}
</script>
