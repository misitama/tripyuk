<template>
    <div>

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
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
