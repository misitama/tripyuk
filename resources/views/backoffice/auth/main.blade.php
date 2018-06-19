<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Back Office Tripyuk | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@include('backoffice.partials.stylesauth')

</head><body class="focusedform">

<div class="verticalcenter">
    <a href="index.htm"><img src="{{asset('backoffice/img/logotripyuk.png')}}" alt="Logo" class="brand" /></a>
    @yield('content')
</div>

@include('backoffice.partials.scriptsauth')
</body>
</html>