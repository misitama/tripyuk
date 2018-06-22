<template>
    <div>

        <section>
            <div class="container ptb-75">
                <!-- filter -->
                <div class="row pt-2 pb-3 mb-5 bg-light align-items-end">
                    <div class="form-group m-0 col-lg-3 pr-2">
                        <label for="tujuan">Pilih provinsi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent"> <i class="fa fa-plane"></i> </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent" placeholder="Pilih Provinsi">
                        </div>
                    </div>
                    <div class="form-group m-0 col-lg-3 pr-2">
                        <label for="tujuan">Pilih Kota</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent"> <i class="fa fa-plane"></i> </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent" placeholder="Pilih Kab/kota">
                        </div>
                    </div>
                    <div class="form-group m-0 col-lg-3 pr-2">
                        <label for="tujuan">Pilih Kategori Tour</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent"> <i class="fa fa-plane"></i> </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent" placeholder="Pilih Kategori Tour">
                        </div>
                    </div>
                    <div class="col-lg-3 pr-2 align-bottom">
                        <button class="btn btn-utama btn-block" type="button" name="button">Cari Tour</button>
                    </div>
                </div>

                <!-- content -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title">Paket Tour</h5>
                                </router-link>

                                <p class="card-text">Some quick example text to build on the card title</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title">Paket Tour</h5>
                                </router-link>

                                <p class="card-text">Some quick example text to build on the card title</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title">Paket Tour</h5>
                                </router-link>

                                <p class="card-text">Some quick example text to build on the card title</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title">Paket Tour</h5>
                                </router-link>

                                <p class="card-text">Some quick example text to build on the card title</p>
                            </div>
                        </div>
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
