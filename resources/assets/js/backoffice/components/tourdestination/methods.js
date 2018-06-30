const batutaKey = 'c6cee798f6a063bc93ed12f71d4b6a0b';
export default {
    pagination() {
        let app = this;
        let token = app.$auth.token();
        let grid = $('#tblTourDestination').bootgrid({
            ajax: true,
            url: "/api/tour-destination/pagination",
            post: function () {
                return {
                    isDomestic: app.filterIsDomestic,
                    country: app.filterCountry,
                    region: app.filterRegion,
                    city: app.filterCity
                }
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
                "isDomestic": function (column, row) {
                    if (row.is_domestic == 1) {
                        return "<span class=\"label label-info\">Domestic</span>";
                    } else {
                        return "<span class=\"label label-danger\">International</span>";
                    }
                }
            }
        }).on("loaded.rs.jquery.bootgrid", function () {
            $('[data-toggle="tooltip"]').tooltip().css('z-index', '100');
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
                app.readData();
                app.loadForm('edit');
            });

            grid.find(".cmd-detail").on("click", function (e) {
                e.preventDefault();
                app.readData();
                app.loadForm('detail');
            })
        });
    },
    createData() {
        let app = this;
        let url;
        let notifMessage;
        let param = app.tourDestination;
        url = '/tour-destination/create';
        notifMessage = 'Successfully add new tour destination';

        if(app.tourDestination.id !=''){
            url = '/tour-destination/update';
            notifMessage = 'Successfully update existing tour destination';
        }

        app.$storeData(app,url,param,notifMessage,'tblTourDestination');
    },
    readData() {
        let app = this;
        let url = '/tour-destination/read/'+app.tourDestination.id;
        app.$readData(app,url)
            .then((response)=>{
                app.tourDestination = response;
            })
            .catch((error)=>{
               notificationMessage(error,'error');
            });
    },
    editState(){
        let app = this;
        app.state = 'edit';
        app.disabledElement= false;
        app.modalTitle = 'Edit Existing Tour Destination'
    },
    resetState() {
        let app = this;
        app.tourDestination = {
            id: '',
            destinationName: '',
            isDomestic: 0,
            country: '',
            region: '',
            city: '',
            description: '',
            createdAt: '',
            updatedAt: ''
        };
        app.filterIsDomestic = 0;
        app.filterCountry = '';
        app.filterRegion = '';
        app.filterCity = '';
        app.isChangeSelect = true;
        app.state = 'add';
        app.disabledElement = false;
        app.modalTitle = '';

    },
    loadForm(state) {
        let app = this;
        app.state = state;

        if(state =='edit'){
            app.modalTitle = 'Edit Existing Tour Destination';
            app.disabledElement = false;
        }else if(state == 'detail'){
            app.modalTitle = 'Detail Tour Destination';
            app.disabledElement = false;
        }else{
            app.modalTitle = 'Add New Tour Destination';
            app.disabledElement = false;
        }

        $('#modalInput').modal('show').on('shown.bs.modal',function () {
            app.$refs.destinationName.focus();
        });
    },
    getDataCountry() {
        let url = 'https://restcountries.eu/rest/v2/all';
        let app = this;
        let loading = app.$loading.show();
        $.ajax({
            method:'GET',
            url:url,
            crossDomain: true,
            success:function (response) {
                loading.hide();
                for(var i =0;i<response.length;i++){
                    app.countries.push({id:response[i].alpha2Code,label:response[i].name});
                }
                $('#country').select2({
                    width: '100%',
                    placeholder: 'Choose country'
                }).on('change', function () {
                    app.filterCountry = $(this).val();
                    app.tourDestination.country = $(this).val();
                    app.isChangeSelect = true;
                });

                $('#filterCountry').select2({
                    width: '100%',
                    placeholder: 'Choose country'
                }).on('change', function () {
                    console.log($(this).val());
                    app.filterCountry = $(this).val();
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
            },
            error:function (error) {
                loading.hide();
                console.log(error);
            }
        });
    },
    getDataRegion(){
        let app = this;
        let loading = app.$loading.show();

        app.$http.get('/province/all')
            .then((response)=>{
                loading.hide();
                app.regions=response.data.result;
                $('#filterRegion').select2({
                    width:'100%',
                    placeholder:'Choose province',
                }).on('change',function () {
                    app.filterRegion = $(this).val();
                    app.isChangeSelect = true;
                });

                $('#region').select2({
                    width:'100%',
                    placeholder:'Choose province',
                }).on('change',function () {
                    app.filterRegion = $(this).val();
                    app.tourDestination.region = $(this).val();
                    app.isChangeSelect = true;
                });
            })
            .catch((error)=>{
                loading.hide();
                console.log(error);
            });
    },
    getDataCity(){
        let app = this;
        let loading = app.$loading.show();

        app.$http.get('/regency/read-by-province/'+app.tourDestination.region)
            .then((response)=>{
                loading.hide();
                app.cities = response.data.result;
                $('#city').select2({
                    width:'100%',
                    placeholder:'Choose city'
                }).on('change',function () {
                    app.tourDestination.city = $(this).val();
                });

                $('#filterCity').select2({
                    width:'100%',
                    placeholder:'Choose city'
                }).on('change',function () {
                    app.filterCity = $(this).val();
                });
            })
            .catch((error)=>{
                loading.hide();
                console.log(error);
            })
    }
}