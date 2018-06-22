<template>

    <div>

        <!-- tab booking -->
        <div class="container">
            <div class="row">

                <div class="col-lg-7 d-sm-absolute absolute-carousel mr-auto">
                    <div class="row bg-dark-transparent tab-head">

                        <ul class="nav nav-pills" id="book-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link ml-0 tab-link-rounded active" id="book-pulsa-tab" data-toggle="pill" href="#book-pulsa" role="tab" aria-controls="pills-pesawat" aria-selected="true">
                                    <span class="text-white">
                                        Pulsa
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-link-flat" id="book-listrik-tab" data-toggle="pill" href="#book-listrik" role="tab" aria-controls="pills-listrik" aria-selected="true">
                                    <span class="text-white">
                                        Listrik
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="row bg-black-transparent pt-3 pb-2 book-tab-content">

                        <div class="col-lg-12">

                            <div class="tab-content text-left" id="book-tabContent">

                                <!-- tab content pulsa -->
                                <div class="tab-pane fade show active" id="book-pulsa" role="tabpanel" aria-labelledby="book-pulsa-tab">

                                    <pulsa></pulsa>

                                </div>
                                <!-- end tab content pulsa -->

                                <div class="tab-pane fade" id="book-listrik" role="tabpanel" aria-labelledby="book-listrik-tab">
                                    test listrik
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row bg-dark-transparent tab-footer pt-2 pb-2">
                        <div class="col-lg-12">
                            <a class="text-white" href="#">Tripyuk Best Price Guarantee</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end tab booking -->

    </div>

</template>

<script>

    import Pulsa from './tab-booking/tab-booking-pulsa.vue';

    export default{
        components : {
            'pulsa' : Pulsa,
        }
    }
</script>
