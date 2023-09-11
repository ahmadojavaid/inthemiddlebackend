
<!-- BEGIN: Vendor JS-->
<script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{--<script src="{{asset('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>--}}
<script src="{{asset('assets/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Datatables Vendor JS-->
{{--<script src="{{asset('assets/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>--}}

<!-- END: Datatables Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
 <script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
 <script src="{{asset('assets/app-assets/js/scripts/pages/app-invoice-list.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
