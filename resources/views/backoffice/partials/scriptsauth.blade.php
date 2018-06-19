<script src="{{asset('backoffice/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('vendors/validation/validate.min.js')}}"></script>
<script src="{{asset('vendors/validation/additional_methods.min.js')}}"></script>
<script src="{{asset('vendors/jquerybootgrid/jquery.bootgrid.js')}}"></script>
<script src="{{asset('vendors/jquerybootgrid/jquery.bootgrid.fa.js')}}"></script>
<script src="{{asset('vendors/sweetalert/sweetalert2.js')}}"></script>
<script src="{{asset('vendors/toastr/toastr.js')}}"></script>
<script src="{{asset('vendors/waitme/waitMe.js')}}"></script>
<script src="{{asset('js/base.js')}}"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>
@yield('customscripts')