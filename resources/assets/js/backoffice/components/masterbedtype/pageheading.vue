<template>
    <div id="page-heading">
        <ol class="breadcrumb">
            <li>
                <router-link :to="{name:'dashboard'}">Dashboard</router-link>
            </li>
            <li class="active">Master Bed Type</li>
        </ol>

        <h1>Master Bed Type</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="#" @click.prevent="showModalForm('add')" class="btn btn-primary"><i
                        class="fa fa-plus-square"></i> Add New Bed Type</a>
            </div>
        </div>
        <div class="modal fade" data-backdrop="true" id="modalPageHeading" tabindex="-1" role="dialog"
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
                                    <input type="text" id="bedTypeName" ref="bedTypeName" name="bedTypeName" :disabled="disabledElement"
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
                            <div v-if="state ==='edit'">
                                <label class="control-label col-md-3">Active</label>
                                <div class="col-md-9">
                                   <div v-if="state ==='detail'">
                                       <div v-if="isActive === '1'">
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
                                    <label for="updatedAt" class="col-md-3 control-label">{{updatedAt}}</label>
                                    <div class="col-md-9">
                                        <label class="control-label" id="updatedAt"></label>
                                    </div>
                                </div>
                                <input type="hidden" id="bedTypeId" v-model="bedTypeId">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div v-if="state==='detail'">
                                <button type="button" id="btnEdit" class="btn btn-warning">Edit</button>
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
                udpatedAt:'',
                createdBy:'',
                updatedBy:'',
                disabledElement:false,
                state:'add',
                modalTitle:'',
                autoFocus:false,
                indexArray:0,
            }
        },
        methods:{
            showModalForm:function (state) {
                var app = this;
                app.state = state;
                this.indexArray = index;
                $('#modalPageHeading').modal('show');
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
                }
                $('#modalPageHeading').on('shown.bs.modal',function () {
                    app.$refs.bedTypeName.focus();
                });
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
                    $('#modalPageHeading').modal('hide');
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