<template>
    <div>
        <div id="page-heading">

            <ol class="breadcrumb">
                <li>
                    <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                </li>
                <li class="active">User</li>
            </ol>

            <h1>Users</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="#" @click.prevent="showModalForm('add')" class="btn btn-primary"><i
                            class="fa fa-plus-square"></i> Add New User</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>User List</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover table-striped table-condensed" id="tblUsers">
                                <thead>
                                <tr>
                                    <th data-column-id="full_name">Full Name</th>
                                    <th data-column-id="email">Email</th>
                                    <th data-column-id="sex">Sex</th>
                                    <th data-column-id="name">Role Name</th>
                                    <th data-column-id="credit_point">Credit</th>
                                    <th data-column-id="phone">Phone</th>
                                    <th data-column-id="action" data-formatter="action" data-sortable="false">Action
                                    </th>
                                </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" data-backdrop="true" id="modalUser" role="dialog" aria-labelledby="myModalLabel"
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullName" class="col-md-3 control-label">Full Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="fullName" name="fullName"
                                                       placeholder="Input full name of the user" class="form-control"
                                                       v-model="fullName" :disabled="disabledElement" ref="fullName">
                                            </div>
                                        </div>
                                        <div class="form-group" id="emailInputGroup">
                                            <label for="email" class="col-md-3 control-label">email</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" id="email" name="email"
                                                       placeholder="Input your valid email address example jhon@gmail.com"
                                                       v-model="email" :disabled="disabledElement">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Sex</label>
                                            <div class="col-md-9">
                                                <div v-if="state === 'detail'">
                                                    <label class="control-label">{{sex}}</label>
                                                </div>
                                                <div v-else>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rbSex" id="Male" value="Male"
                                                               :disabled="disabledElement" v-model="sex" required
                                                               checked>
                                                        Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rbSex" id="Female" value="Female"
                                                               :disabled="disabledElement" v-model="sex" required>
                                                        Female
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rbSex" id="Other" value="Other"
                                                               :disabled="disabledElement" v-model="sex" required>
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-md-3 control-label">phone</label>
                                            <div class="col-md-9">
                                                <input type="phone" class="form-control" id="phone" name="phone"
                                                       placeholder="Input your phone number ex=0321 595721"
                                                       v-model="phone"
                                                       :disabled="disabledElement" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mobilePhone" class="col-md-3 control-label">Mobile Phone</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="mobilePhone"
                                                       name="mobilePhone"
                                                       placeholder="Input your mobile phone number ex = +6281230230230"
                                                       :disabled="disabledElement" v-model="mobilePhone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="province" class="col-md-3 control-label">Province</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="province" v-model="provinceId" :disabled="disabledElement">
                                                    <option></option>
                                                    <option v-for="provinces in optProvince" :value="provinces.id">
                                                        {{provinces.label}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="regencyId" class="col-md-3 control-label">Regency</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="regencyId" name="regencyId"
                                                        v-model="regencyId" :disabled="disabledElement">
                                                    <option></option>
                                                    <option v-for="regencies in optRegency" :value="regencies.id">
                                                        {{regencies.label}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="districtId" class="col-md-3 control-label">District</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="districtId" name="districtId"
                                                        v-model="districtId" :disabled="disabledElement">
                                                    <option></option>
                                                    <option v-for="districts in optDistrict" :value="districts.id">
                                                        {{districts.label}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="roleId" class="col-md-3 control-label">User Roles</label>
                                            <div class="col-md-9">
                                                <select id="roleId" class="form-control" name="roleId" v-model="roleId" :disabled="disabledElement">
                                                    <option></option>
                                                    <option v-for="roles in optRoles" :value="roles.id">
                                                        {{roles.label}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="col-md-3 control-label">Address</label>
                                            <div class="col-md-9">
                                    <textarea class="form-control" id="address" name="address"
                                              placeholder="Input the complete address of user" rows="5"
                                              :disabled="disabledElement" v-model="address"
                                              required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Active</label>
                                    <div class="col-md-9">
                                        <div v-if="state == 'detail'">
                                            <div v-if="isActive == '0'">
                                                <label class="control-label">
                                                    <span class="label label-info">No</span>
                                                </label>
                                            </div>
                                            <div v-else>
                                                <label class="control-label">
                                                    <span class="label label-info">Yes</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div v-else>
                                            <label class="radio-inline">
                                                <input type="radio" name="rbIsActive" value="1" v-model="isActive">
                                                Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="rbIsActive" value="0" v-model="isActive">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Blocked</label>
                                    <div class="col-md-9">
                                        <div v-if="state == 'detail'">
                                            <div v-if="isBlocked == '0'">
                                                <label class="control-label">
                                                    <span class="label label-info">No</span>
                                                </label>
                                            </div>
                                            <div v-else>
                                                <label class="control-label">
                                                    <span class="label label-info">Yes</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div v-else>
                                            <label class="radio-inline">
                                                <input type="radio" name="rbIsBlocked" value="1"
                                                       v-model="isBlocked"> Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="rbIsBlocked" value="0"
                                                       v-model="isBlocked"> No
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
                                <input type="hidden" id="userId" v-model="userId">
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
                userId: '',
                fullName: '',
                email: '',
                sex: '',
                phone: '',
                mobilePhone: '',
                provinceName: '',
                provinceId: '',
                regencyName: '',
                regencyId: '',
                districtName: '',
                districtId: '',
                roleName: '',
                roleId: '',
                address: '',
                isActive: 0,
                isBlocked: 0,
                createdAt: '',
                updatedAt: '',
                createdBy: '',
                lastModifiedBy: '',
                errorMessage: {},
                optRoles: [],
                optProvince: [],
                optRegency: [],
                optDistrict: [],
                isChangeSelect: true,
            }
        },
        mounted: function () {
            let app = this;
            app.paginationTable();
            app.getProvince();
            app.getUserRole();

            $('#regencyId').select2({
                width: '100%',
                placeholder: 'Choose regency'
            });

            $('#districtId').select2({
                width: '100%',
                placeholder: 'Choose one district'
            });
        },
        beforeMount: function () {
            $('#provinceId').select2();
        },
        watch: {
            provinceId: function (val) {
                let app = this;
                if (val !==null) {
                    app.getRegency();
                    console.log('tidak null');
                }
            },
            regencyId: function (val) {
                let app = this;
                if (val!==null) {
                    app.getDistrict();
                    console.log('tidak null');
                }
            }
        },
        methods: {
            resetInput: function () {
                let app = this;
                app.userId = '';
                app.fullName = '';
                app.email = '';
                app.sex = '';
                app.phone = '';
                app.mobilePhone = '';
                app.provinceName = '';
                app.provinceId = '';
                app.regencyName = '';
                app.regencyId = '';
                app.districtName = '';
                app.districtId = '';
                app.roleName = '';
                app.roleId = '';
                app.address = '';
                app.isActive = 0;
                app.isBlocked = 0;
                app.createdAt = '';
                app.updatedAt = '';
                app.createdBy = '';
                app.lastModifiedBy = '';
                app.modalTitle = '';
                app.disabledElement = false;
                app.errorMessage = {};
                app.getProvince();
                app.getUserRole();
                app.optRegency = [];
                app.optDistrict = [];
                app.isChangeSelect = true;
            },
            paginationTable: function () {
                var token = this.$auth.token();
                var app = this;
                var grid = $('#tblUsers').bootgrid({
                    ajax: true,
                    url: "/api/user",
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
                        msg = 'Are you want to delete this user?';
                        url = '/api/user/delete' + '/' + $(this).data('row-id');
                        popUpConfirmation(url, 'tblUsers', msg, 'Deleting process please wait...', 'User successfully deleted', token);
                        return false;
                    });

                    grid.find(".cmd-edit").on("click", function (e) {
                        e.preventDefault();
                        app.readData($(this).data('row-id'));
                        app.showModalForm('edit');
                        return false;
                    });

                    grid.find(".cmd-detail").on("click", function (e) {
                        e.preventDefault();
                        app.readData($(this).data('row-id'));
                        app.showModalForm('detail');
                        return false;
                    });
                });
            },
            readData: function (id) {
                let app = this;
                app.$readData(app,'/user/read/'+id)
                    .then((response)=>{
                        app.userId = response.userId;
                        app.fullName = response.fullName;
                        app.sex = response.sex;
                        app.email = response.email;
                        app.phone = response.phone;
                        app.mobilePhone = response.mobilePhone;
                        $('#provinceId').val(response.provinceId);
                        app.provinceId = response.provinceId;
                        app.regencyId = response.regencyId;
                        app.districtId = response.districtId;
                        app.roleId = response.roleId;
                        app.isActive = response.isActive;
                        app.isBlocked = response.isBlocked;
                        app.address = response.address;
                        app.createdAt = response.createdAt;
                        app.updatedAt = response.updatedAt;
                        app.createdBy = response.createdBy;
                        app.lastModifiedBy = response.lastModifiedBy;
                    });
            },
            showModalForm: function (state) {
                var app = this;
                app.resetInput();
                app.state = state;
                $('#modalUser').modal('show');
                if (state == 'add') {
                    app.modalTitle = 'Add New User';
                    app.disabledElement = false;
                    app.isChangeSelect = true;
                } else if (state == 'edit') {
                    app.modalTitle = 'Edit Existing User';
                    app.disabledElement = false;
                    app.isChangeSelect = false;
                } else {
                    app.modalTitle = 'Detail User Data';
                    app.disabledElement = true;
                    app.isChangeSelect = true;
                }

                $('#modalUser').on('shown.bs.modal', function () {
                    app.$refs.fullName.focus();

                });
            },
            editState: function () {
                var app = this;
                app.state = 'edit';
                app.disabledElement = false;
                app.modalTitle = 'Edit Existing User';
            },
            saveData: function () {
                runWaitMe('body', 'progressBar', 'Saving data, please wait...');
                var app = this;
                var url;
                let id = app.userId;
                url = '/user/create';
                if (id != '') {
                    url = '/user/update';
                }
                app.$http.post(url, {
                    'userId': app.userId,
                    'fullName': app.fullName,
                    'email': app.email,
                    'sex': app.sex,
                    'address': app.address,
                    'phone': app.phone,
                    'mobilePhone': app.mobilePhone,
                    'provinceId': app.provinceId,
                    'regencyId': app.regencyId,
                    'districtId': app.districtId,
                    'roleId': app.roleId,
                    'isActive': app.isActive,
                    'isBlocked': app.isBlocked,
                }).then((response) => {
                    $('body').waitMe('hide');
                    $('#modalUser').modal('hide');
                    notificationMessage('Success updating existing data', 'success');
                    $('#tblUsers').bootgrid('reload');
                }).catch((error) => {
                    $('body').waitMe('hide');
                    console.log(error);
                });
            },
            getProvince: function () {
                var app = this;
                let loading = app.$loading.show();
                app.$http.get('/province/all')
                    .then((response) => {
                        loading.hide();
                        app.optProvince = response.data.result;
                        $('#province').select2({
                            width: '100%',
                            placeholder: 'Pilih provinsi'
                        }).on('change', function () {
                            app.provinceId = $(this).val();
                            app.isChangeSelect = true;
                        });
                    })
                    .catch((error) => {
                        loading.hide();
                        console.log(error);
                    });
            },
            getUserRole: function () {
                let app = this;
                let loading = app.$loading.show();
                app.$http.get('/role/all')
                    .then((response) => {
                        loading.hide();
                        app.optRoles = response.data.result;
                        $('#roleId').select2({
                            width: '100%',
                            placeholder: 'Choose user level access'
                        }).on('change', function () {
                            app.roleId = $(this).val();
                        });
                    })
                    .catch((error) => {
                        loading.hide();
                        console.log(error);
                    });
            },
            getRegency: function () {
                let app = this;
                let url;
                if(app.provinceId !=''){
                    url = '/regency/read-by-province/' + app.provinceId;
                    app.$http.get(url)
                        .then((response) => {
                            app.optRegency = response.data.result;
                            $('#regencyId').select2({
                                width: '100%',
                                placeholder: 'Choose regency'
                            }).on('change', function () {
                                app.regencyId = $(this).val();
                                app.isChangeSelect = true;
                            });
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }

            },
            getDistrict: function () {
                var app = this;
                let url = '/district/read-by-regency/' + app.regencyId;
                if(app.regencyId !=''){
                    app.$http.get(url)
                        .then((response) => {
                            app.optDistrict = response.data.result;
                            $('#districtId').select2({
                                width: '100%',
                                placeholder: 'Choose districts'
                            }).on('change', function () {
                                app.districtId = $(this).val();
                            });
                        })
                        .catch((error) => {
                            console.log(error);
                        });

                }
            },

        }
    }
</script>