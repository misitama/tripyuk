<template>
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-utama">
                <li class="breadcrumb-item text-white" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item text-white active" aria-current="page">Akun Saya</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header clearfix">
                        <h6 class="float-left">Pesanan Aktif</h6>
                        <span class="badge badge-primary float-right">1</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header clearfix">
                        <h6 class="float-left">Riwayat Pesanan</h6>
                        <span class="badge badge-primary float-right">5</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header clearfix">
                        <h6 class="float-left">Kredit</h6>
                        <span class="badge badge-primary float-right">Rp.100.000</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light">
                    <div class="card-header">
                        Akun Saya
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Title
                            </div>
                            <div class="col-lg-8 input-group">
                                <select class="form-control">
                                    <option>Tuan</option>
                                    <option>Nyona</option>
                                    <option>Nona</option>
                                </select>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Nama Depan
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="text" class="form-control" placeholder="Nama Depan">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Nama Belakang
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="text" class="form-control" placeholder="Nama Belakang">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Email
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Kewarganegaraan
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="text" class="form-control" placeholder="Kewarganegaraan">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Provinsi
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="text" class="form-control" placeholder="Provinsi">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Kabupaten / Kota
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="text" class="form-control" placeholder="Kabupaten / Kota">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Alamat
                            </div>
                            <div class="col-lg-8 input-group">
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-8">

                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary btn-block">Simpan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card bg-light">
                    <div class="card-header">
                        Ganti Password
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Password Lama
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="password" class="form-control" placeholder="Password Lama">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Password Baru
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="password" class="form-control" placeholder="Password Baru">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-4">
                                Ketik Ulang Password Baru
                            </div>
                            <div class="col-lg-8 input-group">
                                <input type="password" class="form-control" placeholder="Ketik Ulang Password Baru">
                            </div>
                        </div>
                        <div class="row no-gutters align-items-center mt-2 mb-2">
                            <div class="col-lg-8">

                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary btn-block">Simpan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    export default {


    }
</script>
