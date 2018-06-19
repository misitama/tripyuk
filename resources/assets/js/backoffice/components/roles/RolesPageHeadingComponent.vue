<template>
    <div id="page-heading">

        <ol class="breadcrumb">
            <li>
                <router-link :to="{name:'dashboard'}">Dashboard</router-link>
            </li>
            <li class="active">Roles</li>
        </ol>

        <h1>Roles</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="#" @click.prevent="showModalForm('add')" class="btn btn-primary"><i
                        class="fa fa-plus-square"></i> Add New Role</a>
            </div>
        </div>
        <div class="modal fade" data-backdrop="true" id="modalRole" tabindex="-1" role="dialog"
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
                                    <label for="updatedAt" class="col-md-3 control-label">{{updatedAt}}</label>
                                    <div class="col-md-9">
                                        <label class="control-label" id="updatedAt"></label>
                                    </div>
                                </div>
                                <input type="hidden" id="roleId" v-model="roleId" value="">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div v-if="state==='detail'">
                                <button type="button" id="btnEdit" class="btn btn-warning">Edit</button>
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
        methods: {
            showModalForm: function (state) {
                var app = this;
                app.state = state;
                $('#modalRole').modal('show');
                if (state == 'edit') {
                    app.modalTitle = 'Edit Existing Role';
                    app.disabledElement = false;
                } else if (state == 'detail') {
                    app.modalTitle = 'Detail Role';
                    app.disabledElement = True;
                } else {
                    app.modalTitle = 'Add New Role';
                    app.disabledElement = false;
                }
                console.log(app.modalTitle);
            },
            saveData: function () {
                var app = this;
                var url;
                runWaitMe('body','progressBar','Saving data, please wait...');
                url = '/role/create';
                if (app.state == 'edit') {
                    url = '/role/update';
                }
                app.$http.post(url, {name:app.roleName,description:app.description})
                        .then((response)=> {
                            $('body').waitMe('hide');
                            $('#modalRole').modal('hide');
                            notificationMessage('Success add new role', 'success');
                            $('#tblRoles').bootgrid('reload');
                        })
                        .catch((err)=> {
                            $('body').waitMe('hide');
                            console.log(err);
                        });
            }
        }
    }
</script>