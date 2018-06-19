<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Back Office Tripyuk</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backoffice.partials.styles')

</head>

<body class="horizontal-nav">

<div id="app">

</div>
@include('backoffice.partials.scripts')

</body>
</html>