<html>
<head>

</head>
<body>
<p>Congratulation, on step to complete your registration,click link below to activate your user</p>
<p><a href="{{route('confirmationUser',['email'=>$email,'key'=>$activationKey])}}">confirm</a> </p>
<p>Use bellow credential to login to your dashboard</p>
<p>Username : {{$email}}</p>
<p>Password : {{$password}}</p>
</body>
</html>