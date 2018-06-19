<template>

    <div>

        <!-- image section -->
        <section class="bg-primary">
            <div class="image-section" style="background-image:url(img/slider2.jpg)">
            </div>
        </section>
        <!-- end image section -->

        <pencarian-tiket-pesawat></pencarian-tiket-pesawat>

    </div>

</template>

<script>

import PencarianTiketPesawat from './pencarian.vue';

export default {

    components:{

        'pencarian-tiket-pesawat' : PencarianTiketPesawat,

    }

}
</script>
