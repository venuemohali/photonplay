<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/notify/index.js') }}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>

{{-- <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script> --}}
<script async src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script async src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
{{--<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>--}}

@yield('script')

@if(Route::current()->getName() != 'popover')
	<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endif

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>  -->


{{-- @if(Route::current()->getName() == 'index')
	<script src="{{asset('assets/js/layout-change.js')}}"></script>
@endif --}}
<!-- include summernote css/js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            // document.querySelector(
                // "body").style.visibility = "hidden";
            document.querySelector(
                "#basic-2").style.visibility = "hidden";

            document.querySelector(
                "#loader").style.visibility = "visible";
        } else {
            document.querySelector(
                "#loader").style.display = "none";
            document.querySelector(
                "body").style.visibility = "visible";
            document.querySelector(
                "#basic-2").style.visibility = "visible";

        }
    };
</script>
