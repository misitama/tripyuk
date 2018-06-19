<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Search Airlines Schedules</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="airlineName">Air Lines</label>
                                        <input type="text" class="form-control" id="airlineName" name="airlineName"
                                               v-model="airlineName" placeholder="Choose airlines first"/>
                                        <input type="hidden" id="airlineId" v-model="airlineId">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pax</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Adult</label>
                                                <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"
                                                        @click="countPaxAdult('minus')">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                                    <input type="text" class="form-control" placeholder="Adult"
                                                           v-model="paxAdult">
                                                    <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"
                                                        @click="countPaxAdult('plus')">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Children</label>
                                                <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"
                                                        @click="countPaxChild('minus')">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                                    <input type="text" class="form-control" placeholder="Adult"
                                                           v-model="paxChildren">
                                                    <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"
                                                        @click="countPaxChild('plus')">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Infant</label>
                                                <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"
                                                        @click="countPaxInfant('minus')">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                                    <input type="text" class="form-control" placeholder="infant"
                                                           v-model="paxInfant">
                                                    <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"
                                                        @click="countPaxInfant('plus')">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group departDate">
                                        <label for="departDate">Depart Date</label>
                                        <input type="text" class="form-control" id="departDate" v-model="departDate">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group returnDate">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" v-model="ifReturnTrue" value="">Return Date
                                        </label>
                                        <input type="text" class="form-control" id="returnDate" style="margin-top: 7px"
                                               v-model="returnDate" :disabled="ifReturnTrue == false">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default" id="panelAirlineRoutes">
                    <div class="panel-body">
                        <div v-if="airlineRouteList.length >0">
                            <div class="row" v-for="airlineRoute in dataResultAirlineRoutePagination">
                                <div class="col-md-12" @click.prevent="searchAirlineSchedule">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            {{airlineRoute.origin}}<i class="fa fa-caret-right"></i>{{airlineRoute.destination}}
                                            <div class="pull-right">
                                                <button class="btn btn-warning" type="button">Pilih</button>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="list-group">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Origin ID <span class="label label-info">{{airlineRoute.origin}}</span></li>
                                                            <li class="list-group-item">Origin Name <span class="label label-info">{{airlineRoute.originName}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="list-group">
                                                        <ul class="list-group">

                                                            <li class="list-group-item">Destination ID: <span class="label label-info">{{airlineRoute.destination}}</span> </li>
                                                            <li class="list-group-item">Destination Name: <span class="label label-info">{{airlineRoute.destinationName}}</span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pagination">
                                        <vue-pagination :page-count="Math.round(airlineRouteList.length/pageSizePagination)"
                                                        :page-range="5"
                                                        :click-handler="paginateAirlineRoutes"
                                                        :prev-text="'Prev'"
                                                        :next-text="'Next'"
                                                        :container-class="'pagination'"></vue-pagination>
                                    </ul>
                                    <div class="pull-right">
                                        Total Route : <span class="label label-primary">{{airlineRouteList.length}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Paginate from 'vuejs-paginate'
    export default {
        data() {
            return {
                loading: false,
                ifReturnTrue:false,
                tripType: 'OneWay',
                airlineId: '',
                airlineName: '',
                paxAdult: 0,
                paxChildren: 0,
                paxInfant: 0,
                departDate: '',
                returnDate: '',
                originId:'',
                destinationId:'',
                airlineListData: [],
                airlineRouteList:{},
                maxItemsAirlineRoutes:0,
                pageSizePagination:4,
                pageIndexPagination:0,
                pagesCount:0,
                pageMax:0,
                dataCount:0,
                dataResultAirlineRoutePagination:[],
                paxAdult:{}

            }
        },
        components:{
            'vue-pagination':Paginate
        },
        beforeMount: function () {
            if (this.$auth.check()) {
                $('body').addClass('horizontal-nav').removeClass('focusedform');
            } else {
                $('body').addClass('focusedform').removeClass('horizontal-nav');
            }
        },
        mounted: function () {
            $('#departDate').datetimepicker({
                format: 'YYYY-MM-DD',
                widgetParent:'.departDate',
                widgetPositioning:{
                    horizontal:'right',
                    vertical:'top'
                }
            });
            $('#returnDate').datetimepicker({
                format: 'YYYY-MM-DD',
                widgetParent:'.returnDate',
                widgetPositioning:{
                    horizontal:'right',
                    vertical:'top'
                }
            });
        },
        created:function(){
            this.getAirLineList();
        },
        methods: {
            countPaxAdult: function (flag) {
                let app = this;
                if (flag === 'minus') {
                    if (app.paxAdult > 0) {
                        app.paxAdult--;
                    }
                } else {
                    app.paxAdult++;
                }
                return app.paxAdult;
            },
            countPaxChild: function (flag) {
                let app = this;
                if (flag === 'minus') {
                    if (app.paxChildren > 0) {
                        app.paxChildren--;
                    }
                } else {
                    app.paxChildren++;
                }

                return app.paxChildren;
            },
            countPaxInfant: function (flag) {
                let app = this;
                if (flag === 'minus') {
                    if (app.paxInfant > 0) {
                        app.paxInfant--;
                    }
                } else {
                    app.paxInfant++;
                }

                return app.paxInfant;
            },
            searchAirlineRoute: function () {
                let app = this;
                let loading = app.$loading.show();
                app.$http.post('/get-air-lines-routes',{'airLineId':app.airlineId})
                    .then((response)=>{
                        loading.hide();
                        app.airlineRouteList = response.data.result;
                        app.pagesCount =Math.round(app.airlineRouteList.length/app.pageSizePagination);
                        this.paginateAirlineRoutes(1);
                    })
                    .catch((errResponse)=>{
                        console.log(errResponse);
                    })

            },
            searchAirlineSchedule: function () {
                let app = this;
                let loading = app.$loading.show();

            },
            getAirLineList: function () {
                var app = this;
                let loading = app.$loading.show();
                app.$http.post('/get-air-lines-list')
                    .then((response) => {
                       loading.hide();
                        app.airlineListData = response.data.result;
                        $('#airlineName').autocomplete({
                            source: app.airlineListData,
                            select: function (event, ui) {
                                app.airlineId = ui.item.value;
                                app.airlineName = ui.item.label;

                                app.searchAirlineRoute();

                                return false;
                            }
                        }).autocomplete("instance")._renderItem = function (ul, item) {
                            return $("<li>")
                                .append("<div>" + item.label + "</div>")
                                .appendTo(ul);
                        };
                    })
                    .catch((errResponse) => {
                        console.log(errResponse);
                    })
            },
            setPageIndexPagination:function(flag){
                let app = this;
                if (flag === 'minus') {
                    if (app.pageIndexPagination > 0) {
                        app.pageIndexPagination--;
                    }
                } else {
                    app.pageIndexPagination++;
                }

                return app.pageIndexPagination;
            },
            paginateAirlineRoutes: function (pageNum) {
                let app = this;
                console.log(pageNum);

                if(pageNum !== 0){
                    pageNum--;
                }
                app.dataCount =  app.airlineRouteList.slice(pageNum * app.pageSizePagination, (pageNum + 1) * pageNum).length;
                app.dataResultAirlineRoutePagination = app.airlineRouteList.slice(pageNum * app.pageSizePagination, (pageNum + 1) * app.pageSizePagination);
                app.pageMax = Math.round(app.airlineRouteList.length / app.pageSizePagination)-1;

                return false;
            }
        }
    }
</script>