<template>
    <div>
        <div id="page-heading">

            <ol class="breadcrumb">
                <li>
                    <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                </li>
                <li>
                    <router-link :to="{name:'dashboard'}">Restaurant</router-link>
                </li>
                <li class="active">Restaurant Type</li>
            </ol>

            <h1>Restaurant Type</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="#" @click.prevent="showModalForm('add')" class="btn btn-primary"><i
                            class="fa fa-plus-square"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Restaurant Type List</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover table-striped table-condensed"
                                   id="tblRestaurantType">
                                <thead>
                                <tr>
                                    <th data-column-id="restaurant_type_name">Full Name</th>
                                    <th data-column-id="description">description</th>
                                    <th data-column-id="action" data-formatter="action" data-sortable="false">Action
                                    </th>
                                </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" data-backdrop="true" id="modalInput" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <form @submit.prevent="saveData" class="form-horizontal row-border">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                </button>
                                <h4 class="modal-title" id="modal-title">{{modalTitle}}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="restaurantTypeName" class="col-md-3 control-label">Restaurant
                                                Type Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="restaurantTypeName" name="restaurantTypeName"
                                                       placeholder="Input restaurant type" class="form-control"
                                                       v-model="restaurantTypeName" :disabled="disabledElement"
                                                       ref="restaurantTypeName">
                                            </div>
                                        </div>
                                        <div class="form-group" id="emailInputGroup">
                                            <label for="description" class="col-md-3 control-label">description</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="description" name="description"
                                                          v-model="description" :disabled="disabledElement"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="state === 'detail'">
                                    <div class="form-group">
                                        <label for="createdby" class="col-md-3 control-label">Created By</label>
                                        <div class="col-md-9">
                                            <label class="control-label" id="createdBy">{{createdBy}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="createdAt" class="col-md-3 control-label">Created At</label>
                                        <div class="col-md-9">
                                            <label class="control-label" id="createdAt">{{createdAt}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastModifiedBy" class="col-md-3 control-label">Modified By</label>
                                        <div class="col-md-9">
                                            <label class="control-label"
                                                   id="lastModifiedBy">{{lastModifiedBy}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="updatedAt" class="col-md-3 control-label">Modified At</label>
                                        <div class="col-md-9">
                                            <label class="control-label" id="updatedAt">{{updatedAt}}</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="restaurantTypeId" v-model="restaurantTypeId">
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
    export default {
        data() {
            return {
                restaurantTypeId: '',
                restaurantTypeName: '',
                description: '',
                createdAt: '',
                updatedAt: '',
                disabledElement: false,
                state: 'add',
                modalTitle: '',
            }
        },
        beforeMount:function () {
            if (this.$auth.check()) {
                $('body').addClass('horizontal-nav').removeClass('focusedform');
            } else {
                $('body').addClass('focusedform').removeClass('horizontal-nav');
            }
        },
        mounted:function () {
            this.pagination();
        },
        methods: {
            resetInput() {
                let app = this;
                app.restaurantTypeId = '';
                app.restaurantTypeName = '';
                app.description = '';
                app.createdAt = '';
                app.updatedAt = '';
                app.disabledElement = false;
                app.state = 'add';
                app.modalTitle = '';
            },
            readData() {
                let app = this;
                let loading = app.$loading.show();

                app.$http.get('/restaurant-type/read/' + app.restaurantTypeId)
                    .then((response) => {
                        loading.hide();
                        app.restaurantTypeId = response.data.result.restaurantTypeId;
                        app.restaurantTypeName = response.data.result.restaurantTypeName;
                        app.description = response.data.result.description;
                        app.createdAt = response.data.result.createdAt;
                        app.updatedAt = response.data.result.updatedAt;
                    })
                    .catch((error) => {
                        loading.hide();
                        console.log(error);
                    })
            },
            pagination() {
                var app = this;
                var token = app.$auth.token();
                var grid = $('#tblRestaurantType').bootgrid({
                    ajax: true,
                    url: "/api/restaurant-type/pagination",
                    post: function () {
                    },
                    ajaxSettings: {
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader("Authorization", "Bearer " + token);
                        }
                    },
                    formatters: {
                        "action": function (column, row) {
                            return "<div class=\"btn-group\">" +
                                "<a href=\"#\" data-row-id=\"" + row.id + "\" class=\"btn btn-info cmd-detail\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detail\"><i class=\"fa fa-eye\"></i></a>" +
                                "<a href=\"#\" data-row-id=\"" + row.id + "\" class=\"btn btn-warning cmd-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a>" +
                                "<a href=\"#\" data-row-id=\"" + row.id + "\"  class=\"btn btn-danger cmd-delete\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash-o\"></i></a>" +
                                "</div>";
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function () {
                    $('[data-toggle="tooltip"]').tooltip().css('z-index', '100');
                    grid.find(".cmd-delete").on("click", function (e) {
                        e.preventDefault();
                        var url;
                        var msg;
                        msg = 'Are you want to delete this restaurant type data?';
                        url = "/api/restaurant-type/delete" + '/' + $(this).data('row-id');
                        popUpConfirmation(url, 'tblRestaurantType', msg, 'Deleting process please wait...', 'Restaurant type successfully deleted', token);
                        return false;
                    });

                    grid.find(".cmd-edit").on("click", function (e) {
                        e.preventDefault();
                        app.readData($(this).data('row-id'));
                        app.showModalForm('edit');
                    });

                    grid.find(".cmd-detail").on("click", function (e) {
                        e.preventDefault();
                        app.readData($(this).data('row-id'));
                        app.showModalForm('detail');
                    })
                });
            },
            showModalForm(state) {
                var app = this;
                app.resetInput();
                app.state = state;
                $('#modalInput').modal('show');
                if (state == 'edit') {
                    app.modalTitle = 'Edit Existing Restaurant Type';
                    app.disabledElement = false;

                } else if (state == 'detail') {
                    app.modalTitle = 'Restaurant Type Detail';
                    app.disabledElement = true;
                } else {
                    app.modalTitle = 'Add New Restaurant Type';
                    app.disabledElement = false;
                }

                $('#modalInput').on('shown.bs.modal', function () {
                    app.$refs.restaurantTypeName.focus();

                });
            },
            saveData() {
                let app = this;
                let url;
                let loading = app.$loading.show();

                url = '/restaurant-type/create';
                if (app.restaurantTypeId != null) {
                    url = '/restaurant-type/update';
                }
                app.$http.post('/restaurant-type/create', {id:app.restaurantTypeId,restaurantTypeName:app.restaurantTypeName,description:app.description})
                    .then((response)=>{
                        loading.hide();
                        $('#tblRestaurantType').bootgrid('reload');
                        notificationMessage('Successfully add new data','success');
                    })
                    .catch((error)=>{
                        loading.hide();
                        console.log(error);
                    })
            },
            editState(){
                let app = this;
                app.disabledElement = false;
                app.state = 'edit';
                app.modalTitle = 'Edit Existing Restaurant Type';
            }
        }
    }
</script>