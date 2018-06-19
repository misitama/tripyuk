<script>
    $(document).ready(function () {
        $('#frmLogin').validate({
            rules: {
                email: {
                    required: true,
                    email:true
                },
                password: {
                    required: true,
                    minlength:6
                }
            },

            messages: {
                email: {
                    required: "Email cannot be blank",
                    email:"Invalid email format"
                },
                password: {
                    required: "Password cannot be blank",
                    minlength:"password is at least 6 characters"
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
                runWaitMe('body', 'progressBar', 'Authentication in progress...');

                $.ajax({
                    url: "{{route('checkLogin')}}",
                    method: "POST",
                    data: {
                        email: $('#email').val(),
                        password:$('#password').val(),
                        remember:$('#remember').val(),
                        _token:"{{csrf_token()}}"
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrow) {
                        $('body').waitMe('hide');
                        notificationMessage(errorThrow, 'error');
                    },
                    success: function (s) {
                        if (s.isSuccess) {
                            $('body').waitMe('hide');
                            runWaitMe('body','progressBar','Redirecting to your dashboard, please wait...');
                            window.location = "{{url('/admin/dashboard')}}";
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
</script>
