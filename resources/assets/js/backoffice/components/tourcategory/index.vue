<template>
    <div>
        <div id="page-heading">

            <ol class="breadcrumb">
                <li>
                    <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                </li>
                <li class="active">Tour Category</li>
            </ol>

            <h1>Users</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="#" @click.prevent="showModal('add')" class="btn btn-primary"><i
                            class="fa fa-plus-square"></i> Add New Tour Category</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Tour Category List</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover table-striped table-condensed"
                                   id="tblTourCategory">
                                <thead>
                                <tr>
                                    <th data-column-id="tour_category_name">Tour Category Name</th>
                                    <th data-column-id="slug">Slug</th>
                                    <th data-column-id="is_active" data-formatter="isActive">Active</th>
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
                    <div class="modal-lg modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                </button>
                                <h4 class="modal-title" id="modal-title">{{modalTitle}}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="categoryName" class="col-md-3 control-label">Tour Category
                                        Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="categoryName" name="categoryName"
                                               placeholder="Input tour category name" class="form-control"
                                               v-model="categoryName" :disabled="disabledElement"
                                               ref="categoryName">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-md-3 control-label">Description</label>
                                    <div class="col-md-9">
                                                <textarea class="form-control" id="description" name="description"
                                                          v-model="description"
                                                          :disabled="disabledElement"></textarea>
                                    </div>
                                </div>
                                <div v-if="state ==='edit' || state ==='detail'">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="isActive" :value="1" v-model="isActive" :disabled="disabledElement">Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="state === 'detail'">
                                    <div class="form-group">
                                        <label for="createdAt" class="col-md-3 control-label">Created At</label>
                                        <div class="col-md-9">
                                            <label class="control-label" id="createdAt">{{createdAt}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="updatedAt" class="col-md-3 control-label">Last Update At</label>
                                        <div class="col-md-9">
                                            <label class="control-label" id="updatedAt">{{updatedAt}}</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="tourCategoryId" v-model="tourCategoryId">
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
        data(){
            return{
                tourCategoryId:'',
                categoryName:'',
                description:'',
                isActive: 0,
                createdAt: '',
                updatedAt: '',
            }
        },
        mounted(){
          let app = this;
          app.pagination();
        },
        methods:{
            resetInput(){
                let app = this;
                app.tourCategoryId = '';
                app.categoryName = '';
                app.description = '';
                app.isActive= 0;
                app.createdAt = '';
                app.updatedAt = '';
                app.modalTitle='';
                app.disabledElement=false;
            },
            generateSlug(categoryName){
                let str = categoryName;
                return str.replace(/\s+/g, '-').toLowerCase();
            },
            showModal(state){
                let app = this;
                app.resetInput();
                app.state = state;
                $('#modalInput').modal('show');
                if (state == 'edit') {
                    app.modalTitle = 'Edit Existing Tour Category';
                    app.disabledElement = false;

                } else if (state == 'detail') {
                    app.modalTitle = 'Tour Category Detail';
                    app.disabledElement = true;
                } else {
                    app.modalTitle = 'Add New Tour Category';
                    app.disabledElement = false;
                }

                $('#modalInput').on('shown.bs.modal', function () {
                    app.$refs.categoryName.focus();
                });
            },
            pagination(){
                let app = this;
                let token = app.$auth.token();
                let grid = $('#tblTourCategory').bootgrid({
                    ajax: true,
                    url: "/api/tour-category/pagination",
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
                            if(row.is_active == 1){
                                return "<span class=\"label label-info\"> Yes</span>";
                            }else{
                                return "<span class=\"label label-danger\">No</span>";
                            }
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function () {
                    $('[data-toggle="tooltip"]').tooltip().css('z-index', '100');
                    grid.find(".cmd-delete").on("click", function (e) {
                        e.preventDefault();
                        var url;
                        var msg;
                        msg = 'Are you want to delete this tour category?';
                        url = "/api/tour-category/delete" + '/' + $(this).data('row-id');
                        popUpConfirmation(url, 'tblTourCategory', msg, 'Deleting process please wait...', 'Tour category successfully deleted', token);
                        return false;
                    });

                    grid.find(".cmd-edit").on("click", function (e) {
                        e.preventDefault();
                        app.readData($(this).data('row-id'));
                        app.showModal('edit');
                    });

                    grid.find(".cmd-detail").on("click", function (e) {
                        e.preventDefault();
                        app.readData($(this).data('row-id'));
                        app.showModal('detail');
                    })
                });
            },
            readData(id){
                let app = this;
                app.$readData(app,'/tour-category/read/'+id)
                    .then((response)=>{
                        console.log(response);
                        app.tourCategoryId = response.tourCategoryId;
                        app.categoryName = response.tourCategoryName;
                        app.description = response.description;
                        app.isActive = response.isActive;
                        app.createdAt = response.createdAt;
                        app.updatedAt = response.updatedAt;
                    });
            },
            saveData(){
                let app = this;
                let slug = app.generateSlug(app.categoryName);
                let url;
                let param;
                let notifMessage;
                url = '/tour-category/create';
                param ={categoryName:app.categoryName,slug:slug,description:app.description,isActive:app.isActive};
                notifMessage = 'Successfully added new tour category';

                if(app.tourCategoryId !=''){
                    url = '/tour-category/update';
                    param ={id:app.tourCategoryId,categoryName:app.categoryName,slug:slug,description:app.description,isActive:app.isActive};
                    notifMessage = 'Succesfully update existing tour category';
                }

                app.$storeData(app,url,param,notifMessage,'tblTourCategory');
            },
            editState(){
                var app = this;
                app.state = 'edit';
                app.disabledElement= false;
                app.modalTitle = 'Edit Existing Tour Category'
            }
        }
    }
</script>