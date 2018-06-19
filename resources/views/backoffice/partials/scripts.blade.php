<script src="{{asset('backoffice/js/jquery-1.10.2.min.js')}}"></script>
<script type='text/javascript' src="{{asset('vendors/jqueryui/jquery-ui.js')}}"></script>
<script type='text/javascript' src={{asset('/backoffice/js/bootstrap.min.js')}}></script>
<script type='text/javascript' src="{{asset('vendors/moment/moment.js')}}"></script>
<script type='text/javascript' src="{{asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/js/enquire.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/js/jquery.cookie.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/js/jquery.nicescroll.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/plugins/codeprettifier/prettify.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/plugins/easypiechart/jquery.easypiechart.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/plugins/sparklines/jquery.sparklines.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/plugins/form-toggle/toggle.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/js/placeholdr.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/js/application.js')}}"></script>
<script type='text/javascript' src="{{asset('/backoffice/demo/demo.js')}}"></script>
<script src="{{asset('vendors/validation/validate.min.js')}}"></script>
<script src="{{asset('vendors/validation/additional_methods.min.js')}}"></script>
<script src="{{asset('vendors/jquerybootgrid/jquery.bootgrid.js')}}"></script>
<script src="{{asset('vendors/jquerybootgrid/jquery.bootgrid.fa.js')}}"></script>
<script src="{{asset('vendors/sweetalert/sweetalert2.js')}}"></script>
<script src="{{asset('vendors/toastr/toastr.js')}}"></script>
<script src="{{asset('vendors/waitme/waitMe.js')}}"></script>
<script src="{{asset('vendors/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('js/base.js')}}"></script>

{{--<script>--}}
    {{--$(function () {--}}
        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
        {{--});--}}
    {{--})--}}
{{--</script>--}}
<script src="/backoffice/js/app.js"></script>
@yield('customscripts')