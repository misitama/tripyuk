<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Back Office Tripyuk | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backoffice.partials.styles')

</head>

<body class="horizontal-nav ">



@include('backoffice.partials.topbar')

@include('backoffice.partials.navbar')

<div id="page-container">
    <div id="page-content">
        <div id="wrap">
            @yield('page-header')

            @yield('content')
        </div> <!-- #wrap -->
    </div> <!-- page-content -->

















    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li>AVANT &copy; 2015</li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->
@include('backoffice.partials.scripts')

</body>
</html>