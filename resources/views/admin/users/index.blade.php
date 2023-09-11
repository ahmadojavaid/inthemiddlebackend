@extends('admin_layout.admin_main_layout')
@section('main_content')
    <!-- BEGIN: Content-->
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">--}}

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">




                <!-- Row grouping -->
                <section id="row-grouping-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">All Users</h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-row-grouping table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Usama</td>
                                            <td>CEO</td>
                                            <td>usam@gmail.com</td>
                                            <td>Lahore</td>
                                            <td>13-Sep-23</td>
                                            <td>3450000</td>
                                            <td>Active</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>Options
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="me-2 fas fa-edit"></i>
                                                            Block
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="me-2 fas fa-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Row grouping -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{--<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>--}}


<script>
    $(document).ready(function () {
        $('.dt-row-grouping').DataTable();
    });
</script>
