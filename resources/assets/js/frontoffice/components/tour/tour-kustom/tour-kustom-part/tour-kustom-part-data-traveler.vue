<template>
    <div>

        <section>
            <div class="container ptb-75">
                <div class="row mb-3">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-lg-4 text-right">
                                Jumlah Traveler
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group m-0">
                                    <div class="input-group-prepend">
                                        <button v-on:click="deleteActivity" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Tambah Aktivitas">
                                    <div class="input-group-append">
                                        <button v-on:click="deleteActivity" class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                Orang
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Data Traveler</h5>
                            </div>

                            <div class="card-body pt-2 pb-2">
                                <div class="row align-items-center">

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Nama Depan
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nama Depan">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Nama Belakang
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nama Belakang">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        No Telepon
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="No Telepon">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Alamat Email
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Alamat Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Kewarganegaraan
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Kewarganegaraan">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Provinsi
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Provinsi">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Kabupaten / Kota
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Kabupaten / Kota">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 mb-3 mt-3">
                                        Alamat
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Alamat">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <router-link class="btn btn-primary btn-block" :to="{ name: 'reviewkustomtour' }">Lanjutkan</router-link>
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

<style lang="css">
</style>
