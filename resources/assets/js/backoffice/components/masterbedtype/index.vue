<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Bed Type List</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-striped table-condensed" id="tblBedType">
                            <thead>
                            <tr>
                                <th data-column-id="bed_type_name">Bed Type Name</th>
                                <th data-column-id="description">Description</th>
                                <th data-column-id="isActive" data-formatter="isActive">Active</th>
                                <th data-column-id="action" data-formatter="action" data-sortable="false">Action</th>
                            </tr>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" data-backdrop="true" id="modalIndex" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <form @submit.prevent="saveData" class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="modal-title">{{modalTitle}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="bedTypeName" class="col-md-3 control-label">Bed Type Name</label>
                                <div class="col-md-4">
                                    <input type="text" id="bedTypeName" name="bedTypeName" :disabled="disabledElement"
                                           placeholder="Input bed type name" v-model="bedTypeName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="description" :disabled="disabledElement"
                                              name="description" v-model="description" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Active</label>
                                <div class="col-md-9">
                                    <div v-if="state ==='detail'">
                                        <div v-if="isActive == '1'">
                                            <span class="label label-info">Yes</span>
                                        </div>
                                        <div v-else>
                                            <span class="label label-danger">No</span>
                                        </div>
                                    </div>
                                    <div v-else>
                                        <label class="radio-inline">
                                            <input type="radio" name="isActive" value="1" v-model="isActive">
                                            Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="isActive" value="0" v-model="isActive">
                                            No
                                        </label>
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
                                        <label class="control-label" id="lastModifiedBy">{{updatedBy}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="updatedAt" class="col-md-3 control-label">Last Updated At</label>
                                    <div class="col-md-9">
                                        <label class="control-label" id="updatedAt">{{updatedAt}}</label>
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" id="bedTypeId" v-model="bedTypeId">
                        </div>
                        <div class="modal-footer">
                            <div v-if="state==='detail'">
                                <button type="button" id="btnEdit" @click="editState" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            <div v-else>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="btnSave">Save changes</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                bedTypeName:'',
                description:'',
                bedTypeId:'',
                isActive:1,
                createdAt:'',
                updatedAt:'',
                createdBy:'',
                updatedBy:'',
                disabledElement:false,
                state:'add',
                modalTitle:''
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
        methods:{
            pagination:function () {
                var app = this;
                var token = app.$auth.token();
                var grid = $('#tblBedType').bootgrid({
                    ajax: true,
                    url: "/api/bed-type",
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
                        },
                        "isActive":function (column,row) {
                            console.log(row.is_active);
                            if(row.is_active == 1){
                                return "<span class=\"label label-info\">Yes</span>";
                            }else{
                                return "<span class=\"label label-danger\">No</span>";
                            }
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function () {
                    $('[data-toggle="tooltip"]').tooltip().css('z-index','100');
                    grid.find(".cmd-delete").on("click", function (e) {
                        e.preventDefault();
                        var url;
                        var msg;
                        msg = 'Are you want to delete this bed type?';
                        url = "/api/bed-type/delete" + '/' + $(this).data('row-id');
                        popUpConfirmation(url, 'tblBedType', msg, 'Deleting process please wait...', 'Bed type successfully deleted', token);
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
            showModalForm:function (state) {
                var app = this;
                app.state = state;
                $('#modalIndex').modal('show');
                if (state == 'edit') {
                    app.modalTitle = 'Edit Existing Bed Type';
                    app.disabledElement = false;
                    $('#bedTypeName').focus();
                } else if (state == 'detail') {
                    app.modalTitle = 'Bed Type Role';
                    app.disabledElement = true;
                } else {
                    app.modalTitle = 'Add New Bed Type';
                    app.disabledElement = false;
                    $('#bedTypeName').focus();
                }
            },
            readData:function (id) {
                var app = this;
                runWaitMe('body', 'progressBar', 'Fetch data, please wait...');
                app.$http.get('/bed-type/read/' + id)
                        .then((response)=> {
                            app.bedTypeId = response.data.result.bedTypeId;
                            app.bedTypeName = response.data.result.bedTypeName;
                            app.description = response.data.result.description;
                            app.isActive = response.data.result.isActive;
                            app.createdAt = response.data.result.createdAt;
                            app.createdBy = response.data.result.createdBy;
                            app.updatedAt = response.data.result.updatedAt;
                            app.updatedBy = response.data.result.updatedBy;
                            $('body').waitMe('hide');
                        })
                        .catch((error)=>{
                            $('body').waitMe('hide');
                            console.log(error);
                        })
            },
            editState:function () {
                var app = this;
                app.state = 'edit';
                app.disabledElement= false;
                app.modalTitle = 'Edit Existing Bed Type'
            },
            saveData:function () {
                runWaitMe('body', 'progressBar', 'Saving data, please wait...');
                var app = this;
                var url;
                var notifMessage;

                url = '/bed-type/create';
                notifMessage = 'Success add new bed type';
                if (app.state == 'edit') {
                    url = '/bed-type/update';
                    notifMessage = 'Success updating existing bed type';
                }
                app.$http.post(url, {
                    'bedTypeId':app.bedTypeId,
                    'bedTypeName':app.bedTypeName,
                    'description':app.description,
                    'isActive':app.isActive,
                }).then((response)=> {
                    $('body').waitMe('hide');
                    $('#modalIndex').modal('hide');
                    notificationMessage(notifMessage, 'success');
                    $('#tblBedType').bootgrid('reload');
                }).catch((error)=> {
                    $('body').waitMe('hide');
                    console.log(error);
                });
            }
        }
    }
</script>