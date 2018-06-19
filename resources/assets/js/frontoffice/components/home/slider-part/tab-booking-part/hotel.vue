<template>
    <div>

        <div class="row no-gutters">
            <div class="form-group col-lg-12">
                <label for="tujuan">Kota, tujuan, atau nama hotel</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white-transparent color-white" id="basic-addon1"> <i class="fa fa-map-marker-alt"></i> </span>
                    </div>
                    <input type="text" class="form-control bg-white-transparent color-white" placeholder="Kota, tujuan, atau nama hotel" aria-label="tujuan" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="form-group col-lg-3 pr-2">
                <label for="tujuan">Tamu</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                            <i class="fa fa-minus color-white"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control bg-white-transparent color-white" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                            <i class="fa fa-plus color-white"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-group col-lg-3 pr-2">
                <label for="tujuan">Kamar</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                            <i class="fa fa-minus color-white"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control bg-white-transparent color-white" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                            <i class="fa fa-plus color-white"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-group col-lg-6">
                <label for="tujuan">Check-In</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white-transparent color-white" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                    </div>
                    <input type="date" class="form-control bg-white-transparent color-white" aria-label="tujuan" aria-describedby="basic-addon1">
                </div>
            </div>

        </div>

        <div class="row no-gutters align-items-end">

            <div class="form-group col-lg-3 pr-2">
                <label for="tujuan">Durasi</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                            <i class="fa fa-minus color-white"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control bg-white-transparent color-white" placeholder="Jumlah" aria-label="tujuan" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white-transparent border-color-secondary" type="button">
                            <i class="fa fa-plus color-white"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-group col-lg-5 pr-2">
                <label for="tujuan">Check-Out</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white-transparent color-white" id="basic-addon1"> <i class="fa fa-calendar-alt"></i> </span>
                    </div>
                    <input type="date" class="form-control bg-white-transparent color-white" aria-label="tujuan" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="form-group col-lg-4 text-right">
                <input class="btn btn-primary btn-block pr-5 pl-5" type="submit" name="submit" value="Cari Hotel">
            </div>

        </div>

    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
