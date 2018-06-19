{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--paginationTable();--}}
        {{--resetInput();--}}
        {{--$('#btnAddNewRole').click(function (e) {--}}
            {{--showModal("add");--}}
        {{--});--}}

        {{--$('#btnEdit').click(function () {--}}
            {{--$('#btnSave').show();--}}
            {{--$('#btnEdit').hide();--}}
            {{--$('#detailInfo').hide();--}}
            {{--$('#roleName').prop('disabled',false).focus();--}}
            {{--$('#description').prop('disabled',false);--}}
        {{--});--}}

        {{--$('#modalRole').on('hidden.bs.modal',function () {--}}
            {{--resetInput();--}}
        {{--});--}}

        {{--$('#frmRole').validate({--}}
            {{--rules: {--}}
                {{--roleName: {--}}
                    {{--required: true--}}
                {{--}--}}
            {{--},--}}

            {{--messages: {--}}
                {{--roleName: {--}}
                    {{--required: "Role name cannot be blank"--}}
                {{--}--}}
            {{--},--}}

            {{--invalidHandler: function (event, validator) { //display error alert on form submit--}}

            {{--},--}}

            {{--highlight: function (element) { // hightlight error inputs--}}
                {{--$(element).closest('.form-group').addClass('has-error'); // set error class to the control group--}}
            {{--},--}}

            {{--success: function (label) {--}}
                {{--label.closest('.form-group').removeClass('has-error');--}}
                {{--label.remove();--}}
            {{--},--}}

            {{--submitHandler: function (form) {--}}
                {{--runWaitMe('body', 'progressBar', 'Saving please wait...');--}}
                {{--var roleId;--}}
                {{--var url;--}}
                {{--var notifMessage;--}}

                {{--notifMessage = "Successfully added new role";--}}
                {{--url = "{{route('postRole')}}";--}}
                {{--roleId = $('#roleId').val();--}}

                {{--if (roleId != '' || typeof roleId == 'undefined') {--}}
                    {{--url = "{{route('updateRole')}}";--}}
                    {{--notifMessage = "Successfully update existing role";--}}
                {{--}--}}

                {{--$.ajax({--}}
                    {{--url: url,--}}
                    {{--method: "POST",--}}
                    {{--data: {--}}
                        {{--name: $('#roleName').val(),--}}
                        {{--description: $('#description').val(),--}}
                        {{--id: roleId--}}
                    {{--},--}}
                    {{--error: function (XMLHttpRequest, textStatus, errorThrow) {--}}
                        {{--$('body').waitMe('hide');--}}
                        {{--notificationMessage(errorThrow, 'error');--}}
                    {{--},--}}
                    {{--success: function (s) {--}}
                        {{--if (s.isSuccess) {--}}
                            {{--$('body').waitMe('hide');--}}
                            {{--notificationMessage(notifMessage, 'success');--}}

                            {{--resetInput();--}}

                            {{--$('#modalRole').modal('hide');--}}
                            {{--$('#tblRoles').bootgrid('reload');--}}
                        {{--} else {--}}
                            {{--$('body').waitMe('hide');--}}
                            {{--var errorMessagesCount = s.message.length;--}}
                            {{--for (var i = 0; i < errorMessagesCount; i++) {--}}
                                {{--notificationMessage(s.message[i], 'error');--}}
                            {{--}--}}
                        {{--}--}}
                    {{--}--}}
                {{--})--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}

    {{--function resetInput() {--}}
        {{--$('#roleName').val('');--}}
        {{--$('#roleId').val('');--}}
        {{--$('#description').val('');--}}
        {{--$('#detailInfo').hide();--}}
        {{--$('#btnedit').hide();--}}
        {{--$('#btnSave').show();--}}
    {{--}--}}

    {{--function showModal(action) {--}}
        {{--$('#modalRole').modal('show');--}}
        {{--$('#modalRole').on('shown.bs.modal', function (e) {--}}
            {{--if (action == "add") {--}}
                {{--$('#modal-title').text('New Role');--}}
                {{--$('#roleName').prop('disabled',false).focus();--}}
                {{--$('#description').prop('disabled',false);--}}
                {{--$('#detailInfo').hide();--}}
            {{--} else if(action == "edit"){--}}
                {{--$('.modal-title').text('Edit Role');--}}
                {{--$('#roleName').prop('disabled',false).focus();--}}
                {{--$('#description').prop('disabled',false);--}}
                {{--$('#detailInfo').hide();--}}
                {{--$('#btnedit').hide();--}}
                {{--$('#btnSave').show();--}}
            {{--}else{--}}
                {{--$('.modal-title').text('Detail Role');--}}
                {{--$('#roleName').prop('disabled',true);--}}
                {{--$('#description').prop('disabled',true);--}}
                {{--$('#detailInfo').show();--}}
                {{--$('#btnedit').show();--}}
                {{--$('#btnSave').hide();--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}

    {{--function readDataRole(id,type) {--}}
        {{--runWaitMe('body', 'progressBar', 'Read data, please wait...');--}}
        {{--$.ajax({--}}
            {{--method: "GET",--}}
            {{--url: "{{url('/admin/role/read')}}/" + id,--}}
            {{--error: function (XMLHttpRequest, textStatus, errorThrow) {--}}
                {{--$('body').waitMe('hide');--}}
                {{--notificationMessage(errorThrow, 'error');--}}
            {{--},--}}
            {{--success: function (s) {--}}
                {{--if (s.isSuccess) {--}}
                    {{--$('body').waitMe('hide');--}}
                    {{--showModal(type);--}}
                    {{--$('#roleId').val(s.data.id);--}}
                    {{--$('#roleName').val(s.data.name);--}}
                    {{--$('#description').val(s.data.description);--}}
                    {{--$('#createdAt').text(s.data.created_at);--}}
                    {{--$('#createdBy').text(s.data.created_by);--}}
                    {{--$('#lastModifiedBy').text(s.data.last_modified_by);--}}
                    {{--$('#updatedAt').text(s.data.updated_at);--}}
                {{--} else {--}}
                    {{--$('body').waitMe('hide');--}}
                    var errorMessagesCount = s.message.length;
                    for (var i = 0; i < errorMessagesCount; i++) {
                        notificationMessage(s.message[i], 'error');
                    }
                {{--}--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}

    {{--function paginationTable() {--}}
        {{--$('#tblRoles').bootgrid({--}}
            {{--ajax: true,--}}
            {{--url: "{{url('/admin/role')}}",--}}
            {{--post: function () {--}}
            {{--},--}}
            {{--formatters: {--}}
                {{--"action": function (column, row) {--}}
                    {{--return "<div class=\"btn-group\">" +--}}
                            {{--"<a href=\"#\" data-row-id=\"" + row.id + "\" class=\"btn btn-info cmd-detail\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detail\"><i class=\"fa fa-eye\"></i></a>" +--}}
                            {{--"<a href=\"#\" data-row-id=\"" + row.id + "\" class=\"btn btn-warning cmd-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a>" +--}}
                            {{--"<a href=\"#\" data-row-id=\"" + row.id + "\"  class=\"btn btn-danger cmd-delete\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-trash-o\"></i></a>" +--}}
                            {{--"</div>";--}}
                {{--}--}}
            {{--}--}}
        {{--}).on("loaded.rs.jquery.bootgrid", function () {--}}
            {{--$('[data-toggle="tooltip"]').tooltip();--}}
            {{--grid.find(".cmd-delete").on("click", function (e) {--}}
                {{--e.preventDefault();--}}
                {{--var url;--}}
                {{--var msg;--}}
                {{--msg = 'Are you want to delete this role?';--}}
                {{--url = "{{url('/admin/role/delete')}}" + '/' + $(this).data('row-id');--}}
                {{--popUpConfirmation(url, 'tblRoles', msg, 'Deleting process please wait...', 'Role');--}}
                {{--return false;--}}
            {{--});--}}

            {{--grid.find(".cmd-edit").on("click", function (e) {--}}
                {{--readDataRole($(this).data('row-id'),'edit');--}}
            {{--});--}}

            {{--grid.find(".cmd-detail").on("click",function (e) {--}}
                {{--readDataRole($(this).data('row-id'),'detail');--}}
            {{--})--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}