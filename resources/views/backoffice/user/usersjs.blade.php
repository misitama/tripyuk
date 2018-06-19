<script>
    $(document).ready(function () {
        $('select').select2();
        paginationTable();
        $('#btnAddNewUsers').click(function () {
            showModal('add');

            return false;
        });

        $('#btnEdit').click(function (e) {
            $('#btnEdit').hide();
            $('#btnSave').show();
            $('input').prop('disabled',false);
            $('textarea').prop('disabled',false);
            $('select').prop('disabled',false);
            $('#detailInfo').hide();
            $('#fullName').focus();
            $('#emailInputGroup').hide();

        });

        $('#modalUsers').on('hidden.bs.modal', function () {
            resetInput();
        });


        $('#provinceId').change(function (e) {
            var id;
            id = $(this).val();

            if(id !=''){
                var url = "{{url('/admin/regency/read-by-province')}}/" + $(this).val();
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function (s) {
                        $('#regencyId').children('option:not(:first)').remove().end();
                        console.log(s);
                        $('#regencyId').select2({
                            data: s
                        });

                    }
                });
            }
        });

        $('#regencyId').change(function (e) {
            var id;
            id = $(this).val();
            if(id !=''){
                var url = "{{url('/admin/district/read-by-regency/')}}/" + $(this).val();
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function (s) {
                        $('#districtId').children('option:not(:first)').remove().end();
                        $('#districtId').select2({
                            data: s
                        });

                    }
                });
            }
        });

        $('#frmUsers').validate({
            rules: {
                fullName: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                },
                sex: {
                    required: true,
                },
                roleId: {
                    required: true,
                },
                provinceId: {
                    required: true
                },
                regencyId: {
                    required: true
                },
                districtId: {
                    required: true
                },
                address: {
                    required: true
                }
            },

            messages: {
                fullName: {
                    required: "Full name must be fill"
                },
                email: {
                    required: "Email must be fill",
                    email: "Invalid email format"
                },
                phone: {
                    required: "Phone number must be fill",
                },
                sex: {
                    required: "Must select one of these sex",
                },
                roleId: {
                    required: "Must select on of these user role",
                },
                provinceId: {
                    required: "Must select on of these user province"
                },
                regencyId: {
                    required: "Must select on of these user regency"
                },
                districtId: {
                    required: "Must select on of these user district"
                },
                address: {
                    required: "Address must be fill"
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit

            },

            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            submitHandler: function (form) {
                runWaitMe('body', 'progressBar', 'Saving please wait...');
                var userId;
                var url;
                var notifMessage;

                notifMessage = "Successfully added new user";
                url = "{{route('postUser')}}";
                userId = $('#userId').val();

                if (userId != '' || typeof userId == 'undefined') {
                    url = "{{route('updateUser')}}";
                    notifMessage = "Successfully update existing user";
                }
                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        fullName: $('#fullName').val(),
                        email: $('#email').val(),
                        sex: $('input[name=rbSex]:checked').prop('id'),
                        phone: $('#phone').val(),
                        mobilePhone: $('#mobilePhone').val(),
                        roleId: $('#roleId').val(),
                        role: $('#roleId').val(),
                        provinceId: $('#provinceId').val(),
                        regencyId: $('#regencyId').val(),
                        districtId: $('#districtId').val(),
                        address: $('#address').val(),
                        id: userId
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrow) {
                        $('body').waitMe('hide');
                        notificationMessage(errorThrow, 'error');
                    },
                    success: function (s) {
                        if (s.isSuccess) {
                            $('body').waitMe('hide');
                            notificationMessage(notifMessage, 'success');
                            resetInput();

                            $('#modalUsers').modal('hide');
                            $('#tblUsers').bootgrid('reload');
                        } else {
                            $('body').waitMe('hide');
                            var errorMessagesCount = s.message.length;
                            for (var i = 0; i < errorMessagesCount; i++) {
                                notificationMessage(s.message[i], 'error');
                            }
                        }
                    }
                })
            }
        });
    });


    function resetInput() {
        $('input').val('').prop('disabled', false);
        $('textarea').val('').prop('disabled', false);
        $('select').val('').prop('disabled',false).trigger('change');

        $('#fullName').focus();
        $('#btnEdit').hide();
        $('#btnSave').show();
    }

    function showModal(action) {
        $('#modalUsers').modal('show');
        $('#modalUsers').on('shown.bs.modal', function () {
            if (action == 'add') {
                $('#modal-title').text('New User');
                resetInput();
                $('#detailInfo').hide();
            } else if (action == 'edit') {
                $('#modal-title').text('Edit User');
                $('input').prop('disabled', false);
                $('textarea').prop('disabled', false);
                $('select').prop('disabled', false);
                $('#btnEdit').hide();
                $('#btnSave').show();
                $('#detailInfo').hide();
            } else {
                $('#modal-title').text('Detail User');
                $('input').prop('disabled', true);
                $('textarea').prop('disabled', true);
                $('select').show().prop('disabled', true);
                $('#btnEdit').show();
                $('#btnSave').hide();
                $('#detailInfo').show();
            }
        });

    }

    function readData(id, type) {
        runWaitMe('body', 'progressBar', 'Read data, please wait...');
        $.ajax({
            method: "GET",
            url: "{{url('/admin/user/read')}}/" + id,
            error: function (XMLHttpRequest, textStatus, errorThrow) {
                $('body').waitMe('hide');
                notificationMessage(errorThrow, 'error');
            },
            success: function (s) {
                if (s.isSuccess) {
                    $('body').waitMe('hide');
                    showModal(type);
                    $('#userId').val(s.data.id);
                    $('#fullName').val(s.data.full_name);
                    $('#email').val(s.data.email);
                    $('input[name=rbSex][value=' + s.data.sex + ']').prop('checked', true);
                    $('#phone').val(s.data.phone);
                    $('#mobilePhone').val(s.data.mobile_phone);
                    $('#roleId').val(s.data.role_id).trigger('change');
                    $('#provinceId').val(s.data.province_id);
                    $('#regencyId').val(s.data.regency_id);
                    $('#districtId').val(s.data.district_id);
                    $('#select2-provinceId-container').text(s.data.province_name);
                    $('#select2-regencyId-container').text(s.data.regency_name);
                    $('#select2-districtId-container').text(s.data.district_name);
                    $('#address').val(s.data.address);
                    $('#createdAt').text(s.data.created_at);
                    $('#createdBy').text(s.data.created_by);
                    $('#lastModifiedBy').text(s.data.last_modified_by);
                    $('#updatedAt').text(s.data.updated_at);
                } else {
                    $('body').waitMe('hide');
                    var errorMessagesCount = s.message.length;
                    for (var i = 0; i < errorMessagesCount; i++) {
                        notificationMessage(s.message[i], 'error');
                    }
                }
            }
        });
    }

    function paginationTable() {
        var grid = $('#tblUsers').bootgrid({
            ajax: true,
            url: "{{url('/admin/user')}}",
            post: function () {
            },
            formatters: {
                "action": function (column, row) {
                    return "<div class=\"btn-group\">" +
                            "<a href=\"#\" data-row-id=\"" + row.id + "\" class=\"btn btn-info cmd-detail\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detail\"><i class=\"fa fa-eye\"></i></a>" +
                            "<a href=\"#\" data-row-id=\"" + row.id + "\" class=\"btn btn-warning cmd-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a>" +
                            "<a href=\"#\" data-row-id=\"" + row.id + "\"  class=\"btn btn-danger cmd-delete\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash-o\"></i></a>" +
                            "</div>";
                },
                "isActive": function (column, row) {
                    if (row.is_active == 1) {
                        return "<div class=\"btn-group btn-toggle\">" +
                                "<button class=\"btn btn-default btn-on btn-sm active \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"The user is on Active state\" disabled>Yes</button>" +
                                "<button class=\"btn btn-default btn-sm btn-off btnIsActiveNo\" data-row-email=\"" + row.email + "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Click this button for set state user to unactive\">No</button>" +
                                "</div>";
                    } else {
                        return "<div class=\"btn-group btn-toggle\">" +
                                "<button class=\"btn btn-default btn-sm btn-off btnIsActiveYes\" data-row-email=\"" + row.email + "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Click this button for set state user to active\">Yes</button>" +
                                "<button class=\"btn btn-default btn-sm btn-on active\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"The user is on unactive state\" disabled>No</button>" +
                                "</div>";
                    }
                },
                "isBlock": function (column, row) {
                    console.log(row.is_blocked);
                    if (row.is_blocked == 1) {
                        return "<div class=\"btn-group btn-toggle\">" +
                                "<button class=\"btn btn-default btn-on btn-sm active\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"The user is on block state\" disabled>Yes</button>" +
                                "<button class=\"btn btn-default btn-sm btn-off btnIsBlockNo\" data-row-email=\"" + row.email + "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Click this button for set state user to unblock\">No</button>" +
                                "</div>";
                    } else {
                        return "<div class=\"btn-group btn-toggle\">" +
                                "<button class=\"btn btn-default btn-sm btn-off btnIsBlockYes\" data-row-email=\"" + row.email + "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Click this button for set user state to block\">Yes</button>" +
                                "<button class=\"btn btn-danger btn-sm btn-on active\" data-placement=\"right\" title=\"The user is on unblock state\" disabled>No</button>" +
                                "</div>";
                    }
                }
            }
        }).on("loaded.rs.jquery.bootgrid", function () {
            $('[data-toggle="tooltip"]').tooltip();
            grid.find(".cmd-delete").on("click", function (e) {
                e.preventDefault();
                var url;
                var msg;
                msg = 'Are you want to delete this user?';
                url = "{{url('/admin/user/delete')}}" + '/' + $(this).data('row-id');
                popUpConfirmation(url, 'tblUsers', msg, 'Deleting process please wait...', 'User successfully deleted');
                return false;
            });

            grid.find(".cmd-edit").on("click", function (e) {
                readData($(this).data('row-id'), 'edit');

                return false;
            });

            grid.find(".cmd-detail").on("click", function (e) {
                readData($(this).data('row-id'), 'detail');

                return false;
            });

            grid.find(".btnIsActiveNo").on("click", function (e) {
                var url;
                var msg;

                msg = 'Are you sure want to set this user to Unactive?';
                url = "{{url('/admin/user/set-active')}}/" + $(this).data('row-email') + "/0";
                popUpConfirmation(url, 'tblUsers', msg, 'Set state unactive, please wait...', 'User successfully set to unactive');
            });

            grid.find(".btnIsActiveYes").on("click", function (e) {
                var url;
                var msg;

                msg = 'Are you sure want to set this user to active?';
                url = "{{url('/admin/user/set-active')}}/" + $(this).data('row-email') + "/1";
                popUpConfirmation(url, 'tblUsers', msg, 'Set state active, please wait...', 'User successfully set to active');
            });

            grid.find(".btnIsBlockYes").on("click", function (e) {
                var url;
                var msg;

                msg = 'Are you sure want to set this user to block?';
                url = "{{url('/admin/user/set-block')}}/" + $(this).data('row-email') + "/1";
                popUpConfirmation(url, 'tblUsers', msg, 'Set state block, please wait...', 'User successfully set to block');
            });

            grid.find(".btnIsBlockNo").on("click", function (e) {
                var url;
                var msg;

                msg = 'Are you sure want to set this user to unblock?';
                url = "{{url('/admin/user/set-block')}}/" + $(this).data('row-email') + "/0";
                popUpConfirmation(url, 'tblUsers', msg, 'Set state unblock, please wait...', 'User successfully set to unblock');
            });
        });
    }
</script>