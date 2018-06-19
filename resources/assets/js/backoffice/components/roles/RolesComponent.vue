<template>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Roles List</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-striped table-condensed" id="tblRoles">
                            <thead>
                            <tr>
                                <th data-column-id="name">Role Name</th>
                                <th data-column-id="description">Description</th>
                                <th data-column-id="action" data-formatter="action" data-sortable="false">Action</th>
                            </tr>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" data-backdrop="true" id="modalRoleEditDetail" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <form @submit.prevent="saveRoles" class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="modal-title">{{modalTitle}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="roleName" class="col-md-3 control-label">Role Name</label>
                                <div class="col-md-4">
                                    <input type="text" id="roleName" name="roleName" :disabled="disabledElement"
                                           placeholder="Input role name" v-model="roleName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="description" :disabled="disabledElement"
                                              name="description" v-model="description" rows="4"></textarea>
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
                                        <label class="control-label" id="lastModifiedBy">{{lastModifiedBy}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="updatedAt" class="col-md-3 control-label">Update At</label>
                                    <div class="col-md-9">
                                        <label class="control-label" id="updatedAt">{{updatedAt}}</label>
                                    </div>
                                </div>
                                <input type="hidden" id="roleId" v-model="roleId" value="">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div v-if="state==='detail'">
                                <button type="button" @click="editState" id="btnEdit" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            <div v-else>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" @click="saveData" id="btnSave">Save changes</button>
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
                roleId: '',
                roleName: '',
                description: '',
                createdAt: '',
                updatedAt: '',
                createdBy: '',
                lastModifiedBy: '',
                state: 'add',
                modalTitle: '',
                disabledElement: false,
            }
        },
        mounted: function () {
            this.paginationTable();
        },
        beforeMount: function () {
            if (this.$auth.check()) {
                $('body').addClass('horizontal-nav').removeClass('focusedform');
            } else {
                $('body').addClass('focusedform').removeClass('horizontal-nav');
            }
        },
        methods: {
            saveRoles: function () {
            },
            paginationTable: function () {
                var token = this.$auth.token();
                var app = this;
                var grid = $('#tblRoles').bootgrid({
                    ajax: true,
                    url: "/api/role",
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
                    $('[data-toggle="tooltip"]').tooltip();
                    grid.find(".cmd-delete").on("click", function (e) {
                        e.preventDefault();
                        var url;
                        var msg;
                        msg = 'Are you want to delete this role?';
                        url = "/api/role/delete" + '/' + $(this).data('row-id');
                        popUpConfirmation(url, 'tblRoles', msg, 'Deleting process please wait...', 'Role successfully deleted', token);
                        return false;
                    });

                    grid.find(".cmd-edit").on("click", function (e) {
                        e.preventDefault();
                        app.readUserRole($(this).data('row-id'));
                        app.showModalForm('edit');
                    });

                    grid.find(".cmd-detail").on("click", function (e) {
                        e.preventDefault();
                        app.readUserRole($(this).data('row-id'));
                        app.showModalForm('detail');
                    })
                });
            },
            readUserRole: function (id) {
                var app = this;
                runWaitMe('body', 'progressBar', 'Fetch data, please wait...');
                this.$http.get('/role/read/' + id)
                        .then((response)=> {
                            console.log(response);
                            app.roleId = response.data.result.roleId;
                            app.roleName = response.data.result.roleName;
                            app.description = response.data.result.description;
                            app.createdAt = response.data.result.createdAt;
                            app.createdBy = response.data.result.createdBy;
                            app.updatedAt = response.data.result.updatedAt;
                            app.lastModifiedBy = response.data.result.lastModifiedBy;
                            $('body').waitMe('hide');
                        })
                        .catch()
            },
            showModalForm: function (state) {
                var app = this;
                app.state = state;
                $('#modalRoleEditDetail').modal('show');
                if (state == 'edit') {
                    app.modalTitle = 'Edit Existing Role';
                    app.disabledElement = false;
                } else if (state == 'detail') {
                    app.modalTitle = 'Detail Role';
                    app.disabledElement = true;
                } else {
                    app.modalTitle = 'Add New Role';
                    app.disabledElement = false;
                }
            },
            editState:function () {
                var app = this;
                app.state = 'edit';
                app.disabledElement= false;
                app.modalTitle = 'Edit Existing Role'
            },
            saveData:function () {
                var app  = this;
                var url;
                runWaitMe('body','progressBar','Saving data, please wait...');
                url = '/role/create';
                if(app.state == 'edit'){
                    url = '/role/update';
                }
                app.$http.post(url,{name:app.roleName,description:app.description,id:app.roleId})
                        .then((response)=>{
                            $('body').waitMe('hide');
                            $('#modalRoleEditDetail').modal('hide');
                            notificationMessage('Success updating existing data','success');
                            $('#tblRoles').bootgrid('reload');
                        })
                        .catch((err)=>{
                            $('body').waitMe('hide');
                            console.log(err);
                        });
            },
        }
    }
</script>