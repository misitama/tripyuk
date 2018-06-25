<template>
    <div>

        <section>
            <div class="container ptb-75">
                <div class="row pt-2 pb-3 mb-5 bg-light align-items-end">
                    <div class="form-group m-0 col-lg-3 pr-2">
                        <label for="tujuan">Pilih Negara</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent"> <i class="fa fa-plane"></i> </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent" placeholder="Pilih Negara">
                        </div>
                    </div>
                    <div class="form-group m-0 col-lg-3 pr-2">
                        <label for="tujuan">Pilih Kota</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white-transparent"> <i class="fa fa-plane"></i> </span>
                            </div>
                            <input type="text" class="form-control bg-white-transparent" placeholder="Pilih kota">
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
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-2"><b>Valid Until :</b> 29 Juni 2018</small>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-2"><b>Valid Until :</b> 29 Juni 2018</small>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-2"><b>Valid Until :</b> 29 Juni 2018</small>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="frontoffice/img/slider1.jpg" alt="Blog image cap">
                            <div class="card-body">
                                <router-link :to="{ name: 'detailtourdomestik' }">
                                    <h5 class="card-title mb-2">Lorem ipsum dolor sit amet, consectetur</h5>
                                </router-link>
                                <small class="badge bg-light d-block mb-2">Domestik</small>
                                <small class="font-italic d-block mb-2"><b>Valid Until :</b> 29 Juni 2018</small>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                <span class="d-block badge badge-primary mt-2"><h5>Rp 999.000</h5></span>
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
