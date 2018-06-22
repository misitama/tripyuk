<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Tripyuk!!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- stylesheet --}}
    @include('frontoffice.partials.styles')
    {{-- end stylesheet --}}

    <title>Tripyuk</title>
</head>
<body>

<div id="app">

</div>

{{-- js --}}
@include('frontoffice.partials.scripts')
{{-- end js --}}

</body>
</html>
