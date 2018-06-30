<template>
    <div>
        <div id="page-heading">

            <ol class="breadcrumb">
                <li>
                    <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                </li>
                <li class="active">Tour Destination</li>
            </ol>

            <h1>Tour Destination</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="#" @click.prevent="loadForm('add')" class="btn btn-primary"><i
                            class="fa fa-plus-square"></i> Add New Tour Destination</a>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Tour Destinations List</h4>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select id="filterIsDomestic" name="filterIsDomestic" class="form-control"
                                                            v-model="filterIsDomestic">
                                                        <option></option>
                                                        <option :value="1">Domestic</option>
                                                        <option :value="0">International</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <div v-if="filterIsDomestic == 1">
                                                        <select id="filterCountry" class="form-control" v-model="filterCountry">
                                                            <option></option>
                                                            <option v-for="country in countries" :value="country.id">{{country.label}}</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div v-if="filterIsDomestic == 1">
                                                    <div class="col-md-4">
                                                        <select id="filterRegion" class="form-control" v-model="filterRegion">
                                                            <option></option>
                                                            <option v-for="region in regions" :value="region.id">{{region.label}}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select id="filterCity" class="form-control" v-model="filterCity">
                                                            <option>Choose</option>
                                                            <option v-for="country in countries" :value="country.id">{{country.label}}</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover table-striped table-condensed"
                                           id="tblTourDestination">
                                        <thead>
                                        <tr>
                                            <th data-column-id="destination_name">Destination Name</th>
                                            <th data-column-id="is_domestic" data-formatter="isDomestic">Area</th>
                                            <th data-column-id="country">Country</th>
                                            <th data-column-id="action" data-formatter="action" data-sortable="false">Action
                                            </th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" data-backdrop="true" id="modalInput" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <form @submit.prevent="createData" class="form-horizontal row-border">
                    <div class="modal-lg modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                </button>
                                <h4 class="modal-title" id="modal-title">{{modalTitle}}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="destinationName" class="col-md-3 control-label">Destination
                                        Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="destinationName" name="destinationName"
                                               placeholder="Input tour category name" class="form-control"
                                               v-model="tourDestination.destinationName" :disabled="disabledElement"
                                               ref="destinationName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" id="radioDomestic" :value="1"
                                                   v-model="tourDestination.isDomestic" :disabled="disabledElement">Domestic
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" id="radioInternational" :value="0"
                                                   v-model="tourDestination.isDomestic" :disabled="disabledElement">International
                                        </label>
                                    </div>
                                </div>
                               <div v-if="tourDestination.isDomestic == 0">
                                   <div class="form-group">
                                       <label for="country" class="col-md-3 control-label">Country</label>
                                       <div class="col-md-9">
                                           <select class="form-control" id="country" name="country"
                                                   v-model="tourDestination.country">
                                               <option v-for="country in countries" :value="country.id">{{country.label}}</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                                <div v-if="tourDestination.isDomestic == 1">
                                    <div class="form-group">
                                        <label for="region" class="col-md-3 control-label">Region</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="region" name="region"
                                                    v-model="tourDestination.region">
                                                <option></option>
                                                <option v-for="region in regions" :value="region.id">{{region.label}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="col-md-3 control-label">City</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="city" name="city"
                                                    v-model="tourDestination.city">
                                                <option></option>
                                                <option v-for="country in countries" :value="country.id">{{country.label}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-md-3 control-label">Description</label>
                                    <div class="col-md-9">
                                                <textarea class="form-control" id="description" name="description"
                                                          v-model="tourDestination.description"
                                                          :disabled="disabledElement"></textarea>
                                    </div>
                                </div>
                                <div v-if="state === 'detail'">
                                    <div class="form-group">
                                        <label for="createdAt" class="col-md-3 control-label">Created At</label>
                                        <div class="col-md-9">
                                            <label class="control-label"
                                                   id="createdAt">{{tourDestination.createdAt}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="updatedAt" class="col-md-3 control-label">Last Update At</label>
                                        <div class="col-md-9">
                                            <label class="control-label"
                                                   id="updatedAt">{{tourDestination.updatedAt}}</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="tourCategoryId" v-model="tourDestination.id">
                            </div>
                            <div class="modal-footer">
                                <div v-if="state==='detail'">
                                    <button type="button" @click="editState" id="btnEdit" class="btn btn-warning">Edit
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                <div v-else>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="btnSave">Save
                                        changes
                                    </button>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </form>
            </div>


        </div>
    </div>
</template>

<script>
    import Methods from './methods.js';
    import Watch from './watch.js';

    export default {
        data() {
            return {
                tourDestination: {
                    id: '',
                    destinationName: '',
                    isDomestic: 0,
                    country: '',
                    region: '',
                    city: '',
                    description: '',
                    createdAt: '',
                    updatedAt: ''
                },
                filterIsDomestic: 0,
                filterCountry: '',
                filterRegion: '',
                filterCity: '',
                countries:[],
                regions:[],
                cities:[],
                isChangeSelect:true,
                state:'add',
                disabledElement:false,
                modalTitle:'',
            }
        },
        watch: Watch,
        mounted() {
            let app = this;
            app.resetState();
            app.pagination();
            app.getDataCountry();
            console.log(app.countries);
            $('#filterIsDomestic').select2({
                width: '100%',
                placeholder: 'Choose intern or domestic'
            }).on('change',function () {
                app.filterIsDomestic = $(this).val();
                app.isChangeSelect = true;
            });

            $('#filterRegion').select2({
                width:'100%',
                placeholder:'Choose region'
            });
            $('#filterCity').select2({
                width:'100%',
                placeholder:'Choose city'
            });
            $('#country').select2({
                width:'100%',
                placeholder:'Choose country'
            });
            $('#region').select2({
                width:'100%',
                placeholder:'Choose region'
            });
            $('#city').select2({
                width:'100%',
                placeholder:'Choose city'
            });
        },
        methods: Methods,
    }
</script>
