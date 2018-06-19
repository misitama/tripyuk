<script>
    $(document).ready(function () {
        runWaitMe('body','progressBar','Activating in progress, please wait..');
       $.ajax({
           url:"{{route('postConfirmationUser')}}",
           method:"POST",
           data:{
               email:"{{$email}}",
               activationKey:"{{$activationKey}}",
               _token:"{{csrf_token()}}"
           },
           error: function (XMLHttpRequest, textStatus, errorThrow) {
               $('body').waitMe('hide');
               notificationMessage(errorThrow, 'error');
           },
           success: function (s) {
               if (s.isSuccess) {
                   $('body').waitMe('hide');
                   notificationMessage('Activation successfull','success');
                   setTimeout(function () {
                       window.location = "{{url('/admin')}}";
                   },3000);
               } else {
                   $('body').waitMe('hide');
                   var errorMessagesCount = s.message.length;
                   for (var i = 0; i < errorMessagesCount; i++) {
                       notificationMessage(s.message[i], 'error');
                   }
               }
           }

       })
    });
</script>