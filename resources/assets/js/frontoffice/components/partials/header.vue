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
                                        <img src="frontoffice/icons/blog.png"/>
                                    </span>
                                    Blog
                                    <span class="sr-only">(current)</span>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="icon-menu">
                                        <img src="frontoffice/icons/cek-pesanan.png"/>
                                    </span>
                                    Cek Pesanan
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarBahasaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-menu"><img src="frontoffice/icons/bahasa.png"/></span>
                                    Bahasa
                                </a>
                                <div class="dropdown-menu dropdown-w-300" aria-labelledby="navbarBahasaDropdown">
                                    <router-link class="dropdown-item second-menu-item" :to="{name:'tiketpesawat'}">
                                        <img class="second-icon-menu" src="frontoffice/icons/bahasa.png">
                                        Indonesia
                                    </router-link>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icons/bahasa.png">
                                        English
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarCurencyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-menu"><img src="frontoffice/icons/mata-uang.png"/></span>
                                    IDR
                                </a>
                                <div class="dropdown-menu dropdown-w-300" aria-labelledby="navbarCurencyDropdown">
                                    <router-link class="dropdown-item second-menu-item" :to="{name:'tiketpesawat'}">
                                        <img class="second-icon-menu" src="frontoffice/icons/mata-uang.png">
                                        IDR (Rupiah)
                                    </router-link>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icons/mata-uang.png">
                                        RM (Ringgit)
                                    </a>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icons/mata-uang.png">
                                        USD (USD Dollar)
                                    </a>
                                    <a class="dropdown-item second-menu-item" href="#">
                                        <img class="second-icon-menu" src="frontoffice/icons/mata-uang.png">
                                        SGD (SGD Dollar)
                                    </a>
                                </div>
                            </li>

                            <li id="myDropDown" class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-menu"><img src="frontoffice/icons/akun-saya.png"/></span>
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

                                            <login></login>

                                        </div>
                                        <div class="tab-pane" id="Register">

                                            <register></register>

                                        </div>
                                    </div>

                                </div>

                            </li>
                            <li class="nav-item mr-2">
                                <router-link class="nav-link pl-4 pr-4 nav-bordered" :to="{ name : 'promo' }">
                                    <span class="icon-menu">
                                        <img src="frontoffice/icons/promo.png"/>
                                    </span> Promo <span class="sr-only">(current)</span>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link pl-4 pr-4 nav-bordered" :to="{ name : 'paketkustomtour' }">
                                    <span class="icon-menu">
                                        <img src="frontoffice/icons/kustom-tour.png"/>
                                    </span> Kustom Tour <span class="sr-only">(current)</span>
                                </router-link>
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
                                <img src="frontoffice/icons/tiket.png" alt="">
                            </span>
                            Tiket
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="tiketMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketpesawat'}">
                                <img class="second-icon-menu" src="frontoffice/icons/pesawat.png">
                                Tiket Pesawat
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketkeretaapi'}">
                                <img class="second-icon-menu" src="frontoffice/icons/kereta.png">
                                Tiket Kereta Api
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketbus'}">
                                <img class="second-icon-menu" src="frontoffice/icons/bus.png">
                                Tiket Bus
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tiketkapal'}">
                                <img class="second-icon-menu" src="frontoffice/icons/kapal.png">
                                Tiket Kapal
                            </router-link>
                        </div>
                    </div>
                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="umrohHajiMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icons/umroh.png" alt="">
                            </span>
                            Umroh & Haji
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="tiketMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'haji'}">
                                <img class="second-icon-menu" src="frontoffice/icons/umroh.png">
                                Haji
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'umroh'}">
                                <img class="second-icon-menu" src="frontoffice/icons/umroh.png">
                                Umroh
                            </router-link>
                        </div>
                    </div>
                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="umrohHajiMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icons/tour.png" alt="">
                            </span>
                            Tour
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="tiketMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tourdomestik'}">
                                <img class="second-icon-menu" src="frontoffice/icons/tour.png">
                                Domestik
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'tourinternational'}">
                                <img class="second-icon-menu" src="frontoffice/icons/tour.png">
                                International
                            </router-link>
                        </div>
                    </div>
                    <div class="col dropdown">
                        <router-link class="second-menu pt-2 pb-2" :to="{ name: 'hotel' }">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icons/hotel.png" alt="">
                            </span>
                            Hotel
                        </router-link>
                    </div>
                    <div class="col hover-dropdown">
                        <a class="second-menu dropdown-toggle pt-2 pb-2" href="#" id="transportMenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-menu-secondary"><img src="frontoffice/icons/transport.png" alt=""></span>
                            Transport
                        </a>
                        <div class="hover-dropdown-menu dropdown-w-300" aria-labelledby="transportMenuDropdown">
                            <router-link class="dropdown-item second-menu-item" :to="{name:'penjemputan'}">
                                <img class="second-icon-menu" src="frontoffice/icons/shuttle.png">
                                Penjemputan
                            </router-link>
                            <router-link class="dropdown-item second-menu-item" :to="{name:'rentalmobil'}">
                                <img class="second-icon-menu" src="frontoffice/icons/rental.png">
                                Rental Mobil
                            </router-link>
                        </div>
                    </div>
                    <div class="col dropdown">
                        <router-link class="second-menu pt-2 pb-2" :to="{ name: 'kuliner' }">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icons/kuliner.png" alt="">
                            </span>
                            Kuliner
                        </router-link>
                    </div>
                    <div class="col dropdown">
                        <router-link class="second-menu pt-2 pb-2" :to="{ name: 'toko' }">
                            <span class="icon-menu-secondary">
                                <img src="frontoffice/icons/ecommerce.png" alt="">
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

import Login from './partials-header/partials-header-login.vue';
import Register from './partials-header/partials-header-register.vue';

export default {

    components : {
        'login' : Login,
        'register' : Register,
    },

    methods : {

        navigateTo : function(path){

            this.$router.push({ path : path });

        }

    }

}
</script>
