<template>
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

</template>
<script>
    export default{
        data(){
            return {
                userId: '',
                fullName: '',
                email: '',
                sex: '',
                phone: '',
                mobilePhone: '',
                provinceName: '',
                provinceId: '',
                regencyName:'',
                regencyId: '',
                districtName: '',
                districtId: '',
                roleName: '',
                roleId: '',
                address:'',
                isActive:0,
                isBlocked:0,
                createdAt:'',
                updatedAt:'',
                createdBy:'',
                lastModifiedBy:'',
                state: 'add',
                modalTitle: '',
                disabledElement: false,
                optRoles: [],
                optProvince: [],
                optRegency: [],
                optDistrict: []
            }
        },
        methods: {
            showModalForm: function (state) {
                var app = this;
                app.state = state;
                $('#modalAddNew').modal('show');
                if (state == 'edit') {
                    app.modalTitle = 'Edit Existing User';
                    app.disabledElement = false;
                } else if (state == 'detail') {
                    app.modalTitle = 'Detail User';
                    app.disabledElement = True;
                } else {
                    app.modalTitle = 'Add New User';
                    app.disabledElement = false;
                }

            },
            saveData: function () {
                var app = this;
                var url;
                runWaitMe('body', 'progressBar', 'Saving data, please wait...');
                url = '/user/create';
                if (app.state == 'edit') {
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
                    'provinceName': app.provinceName,
                    'provinceId': app.provinceId,
                    'regencyName': app.regencyName,
                    'regencyId': app.regencyId,
                    'districtName': app.districtName,
                    'districtId': app.districtId,
                    'roleName': app.roleName,
                    'roleId': app.roleId,
                    'isActive':app.isActive,
                    'isBlocked':app.isBlocked,
                }).then((response)=> {
                    $('body').waitMe('hide');
                    $('#modalAddNew').modal('hide');
                    notificationMessage('Success add new user', 'success');
                    $('#tblUsers').bootgrid('reload');
                }).catch((err)=> {
                    $('body').waitMe('hide');
                    console.log(err);
                });
            },
            getProvince: function () {
                var app = this;
                app.$http.get('/province/all')
                        .then((response)=> {
                            app.optProvince = response.data.result;
                        })
                        .catch((error)=> {
                            console.log(error);
                        });
            },
            getUserRole: function () {
                var app = this;
                app.$http.get('/role/all')
                        .then((response)=> {
                            app.optRoles = response.data.result;
                        })
                        .catch((error)=> {

                        });
            },
            getRegencyByProvince: function (event) {
                var app = this;
                var url;

                if (typeof event.id !== 'undefined') {
                    url = '/regency/read-by-province/' + event.id;
                } else {
                    url = '/regency/read-by-province/' + app.provinceId;
                }

                if(typeof event.id !=='undefined' || app.provinceId !==''){
                    app.$http.get(url)
                            .then((response)=> {
                                app.optRegency = response.data.result;
                                app.provinceId = event.id;
                            })
                            .catch((error)=> {
                                console.log(error);
                            });
                }

            },
            getDistrictByRegency: function (event) {
                var app = this;
                var url;
                if (typeof event.id !== 'undefined') {
                    url = '/district/read-by-regency/'+event.id;
                }else{
                    url = '/district/read-by-regency/'+app.regencyId
                }

                if(typeof event.id !=='undefined' || app.regencyId!==''){
                    app.$http.get(url)
                            .then((response)=> {
                                app.optDistrict = response.data.result;
                                app.regencyId = event.id;
                            })
                            .catch((error)=> {
                                console.log(error);
                            });
                }
            },
            getRegency:function () {
                var app = this;
                var url;
                url = '/regency/all';
                if(app.provinceId !==''){
                    url = '/regency/read-by-province/'+app.provinceId;
                }
                app.$http.get(url)
                        .then((response)=> {
                            app.optRegency = response.data.result;
                            app.provinceId = event.id;
                        })
                        .catch((error)=> {
                            console.log(error);
                        });
            },
            getDistrict:function () {
                var app = this;
                var url;
                url = '/district/all';

                if(app.regencyId !==''){
                    url = '/district/read-by-regency/'+app.regencyId;
                }

                app.$http.get(url)
                        .then((response)=> {
                            app.optDistrict = response.data.result;
                            app.regencyId = event.id;
                        })
                        .catch((error)=> {
                            console.log(error);
                        });

            },
            getSelectedDistrict: function (event) {
                var app = this;
                app.districtId = event.id
            },
            getRole: function (event) {
                var app = this;
                if(typeof event.id !=='undefined'){
                    app.roleId = event.id;
                    app.roleName = event.label;
                }
            }
        },

    }
</script>