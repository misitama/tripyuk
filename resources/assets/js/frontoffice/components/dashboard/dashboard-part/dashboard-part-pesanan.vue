<template>
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-utama">
                <li class="breadcrumb-item text-white" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item text-white active" aria-current="page">Pesanan Saya</li>
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
                <ul class="nav nav-tabs nav-fill" id="pesananTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pesananAktif-tab" data-toggle="tab" href="#pesananAktif" role="tab" aria-controls="pesananAktif" aria-selected="true">
                            Pesanan Aktif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pesananRiwayat-tab" data-toggle="tab" href="#pesananRiwayat" role="tab" aria-controls="pesananRiwayat" aria-selected="false">
                            Riwayat Pesanan
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pesananTabContent">
                    <div class="tab-pane fade show active" id="pesananAktif" role="tabpanel" aria-labelledby="pesananAktif-tab">
                        <pesanan-aktif></pesanan-aktif>
                    </div>
                    <div class="tab-pane fade" id="pesananRiwayat" role="tabpanel" aria-labelledby="pesananRiwayat-tab">
                        <pesanan-riwayat></pesanan-riwayat>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    import PesananAktif from './dashboard-part-pesanan/dashboard-part-pesanan-aktif.vue';
    import PesananRiwayat from './dashboard-part-pesanan/dashboard-part-pesanan-riwayat.vue';

    export default {

        components : {

            'pesanan-aktif' : PesananAktif,
            'pesanan-riwayat' : PesananRiwayat,

        }

    }
</script>
