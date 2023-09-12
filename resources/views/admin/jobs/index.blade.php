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
                                            <th>Job Name</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Experience Level</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($jobs as $job)
                                        <tr>
                                            <td>{{$job->j_name ?? '--'}}</td>
                                            <td>{{$job->j_date ?? '--'}}</td>
                                            <td>{{$job->j_location ?? '--'}}</td>
                                            <td>{{$job->j_exp_lvl ?? '--'}}</td>
                                            <td>{{$job->j_description	 ?? '--'}}</td>

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
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Job Name</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Experience Level</th>
                                            <th>Description</th>
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
