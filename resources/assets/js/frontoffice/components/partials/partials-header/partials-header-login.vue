<template>
    <div>

        <div class="row">
            <div class="col-lg-12">
                <h5>Log-In ke akun anda</h5>
                <div class="row mt-3">
                    <div class="form-group col-lg-12">
                        <label for="email">Email/No Handphone</label>
                        <input class="form-control" type="email" name="email" value="" placeholder="Email/No Handphone">
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="password">Password</label>
                        <a class="float-right" href="#">Lupa Password?</a>
                        <div class="clearfix"></div>
                        <input class="form-control" type="password" name="password" value="" placeholder="Password">
                    </div>

                    <div class="col-lg-12">
                        <div class="row no-gutters align-items-center">
                            <div class="form-group col-lg-6">
                                <span>Belum Punya Akun?</span>
                                <a href="#">Daftar</a>
                            </div>

                            <div class="col-lg-6">
                                <router-link class="btn btn-primary btn-block" :to="{ name: 'dashboard' }">
                                    Log-In
                                </router-link>
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

<style lang="css">
</style>
