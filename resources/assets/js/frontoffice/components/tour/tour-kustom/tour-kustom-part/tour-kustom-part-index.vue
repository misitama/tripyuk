<template>
    <div>

        <section class="bg-image" style="background-image:url(frontoffice/img/slider1.jpg)">
            <div class="container ptb-75">

                <div class="row bg-dark-transparent text-white pt-2 pb-3">
                    <div class="col-lg-3">
                        <label>Tanggal Keberangkatan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent color-white">
                                    <i class="fa fa-plane"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control bg-white-transparent color-white">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label>Tanggal Kembali</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent color-white">
                                    <i class="fa fa-plane"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control bg-white-transparent color-white">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label>Negara Tujuan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent color-white">
                                    <i class="fa fa-plane"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent color-white" placeholder="Negara Tujuan">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label>Kota Tujuan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent color-white">
                                    <i class="fa fa-plane"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent color-white" placeholder="Kota Tujuan">
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <router-link class="btn btn-block btn-primary" :to="{ name: 'addtouritem' }">
                            Pesan Perjalanan Wisata Anda Sekarang
                        </router-link>
                    </div>
                    <div class="col-lg-12 mt-3 text-center">
                        <h6>Belum Punya Tiket Untuk Berangkat ke Tujuan Tour? Sekalian Pesan Saja di tripyuk.com</h6>
                        <router-link target="_blank" :to="{ name: 'tiketpesawat' }">Cari Tiket Pesawat</router-link>
                    </div>
                </div>

            </div>
        </section>

    </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
