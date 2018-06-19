<template>

    <!-- footer -->
    <div class="footer">
        <!-- newsletter -->
        <section class="bg-utama">
            <div class="container align-items-center pt-4 pb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-white text-center">
                        <h4>Jadilah Partner Tripyuk.com!!!</h4>
                        <p>Ayo mulai agen travelmu bersama tripyuk.com</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <button class="btn btn-success input-placeholder-white" type="button" name="button">Daftar Sekarang !!</button>
                    </div>
                    <!-- <div class="col-lg-6">
                        <form class="align-middle" action="index.html" method="post">
                            <div class="row pt-3 form-group no-gutters">
                                <div class="col-lg-8 pr-3">
                                    <input class="form-control input-placeholder-white" type="text" name="" value="" placeholder="Subscribe Neswleter">
                                </div>

                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- end newsletter -->

        <!-- footer -->
        <section class="bg-white">
            <div class="container pt-75">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 pb-3">
                                <img class="w-75" src="frontoffice/img/logo.png" alt="">
                            </div>
                            <div class="col-lg-12 pt-3 pb-5">
                                <div class="row no-gutters">
                                    <div class="col-lg-3">
                                        <a href="#">
                                            <img class="w-85" src="frontoffice/icon/support.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-9">
                                        <h5 class="mb-2">Customer Sevice :</h5>
                                        <h6>+62 8978 6997 66</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col pl-2 pr-2">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/icon/instagram-warna.png" alt="">
                                </a>
                            </div>
                            <div class="col pl-2 pr-2">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/icon/facebook-warna.png" alt="">
                                </a>
                            </div>
                            <div class="col pl-2 pr-2">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/icon/youtube.png" alt="">
                                </a>
                            </div>
                            <div class="col pl-2 pr-2">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/icon/google-plus-warna.png" alt="">
                                </a>
                            </div>
                            <div class="col pl-2 pr-2">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/icon/twitter-warna.png" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="">Tripyuk.com</h5>
                                <ul class="list-group  pt-4 m-0">
                                    <li class="list-group-item bg-white border-0 p-0 m-0">
                                        <router-link class="d-block pt-1 pb-1" :to="{ name:'howtobook' }">Partner Tripyuk</router-link>
                                    </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0">
                                        <router-link class="d-block pt-1 pb-1" :to="{ name:'syaratketentuan' }">Syarat dan Ketentuan</router-link>
                                    </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0">
                                        <router-link class="d-block pt-1 pb-1" :to="{ name:'kebijakanprivasi' }">Kebijakan Privasi</router-link>
                                    </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0">
                                        <router-link class="d-block pt-1 pb-1" :to="{ name:'howtobook' }">Karir</router-link>
                                    </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0">
                                        <router-link class="d-block pt-1 pb-1" :to="{ name:'howtobook' }">Blog</router-link>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="">Produk</h5>
                                <ul class="list-group  pt-4 m-0">
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Tiket</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Umroh Haji</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Tour</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Hotel</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Transportasi</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Kuliner</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">E-Commerce</a> </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="">Contact Us</h5>
                                <ul class="list-group  pt-4 m-0">
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Cara Pemesanan</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">FAQ</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Customer Service</a> </li>
                                    <li class="list-group-item bg-white border-0 p-0 m-0"><a class=" d-block pt-1 pb-1" href="#">Our Office</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="">Download Aplikasi</h5>
                        <div class="row pt-4">
                            <div class="col-lg-8">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/img/play-store.png" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <a href="#">
                                    <img class="w-100" src="frontoffice/img/app-store.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-white mt-5 mb-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 text-center pt-2 pb-2">
                        <p class="">Copyright 2018 @ PT. Sinai Baladil Amin</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->
    </div>
    <!-- end footer -->

</template>

<script>
export default {

}
</script>
