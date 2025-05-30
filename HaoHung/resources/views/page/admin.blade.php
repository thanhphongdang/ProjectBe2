<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:08:56 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

    <title>Andshop - Admin Dashboard HTML Template.</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- custom css -->
    <link id="style.css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">



    <!-- Header -->
    @include('outside.header')

    <!-- Sidebar / Navbar -->
    @include('outside.navbar')

    <!-- Main Content -->
    @section('content')
        <main class="main-content">
            <div class="wrapper">
                <div class="ec-page-wrapper">
                    <div class="ec-content-wrapper">
                        <div class="content">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                    <div class="card card-mini dash-card card-1">
                                        <div class="card-body">
                                            <h2 class="mb-1">1,503</h2>
                                            <p>Daily Signups</p>
                                            <span class="mdi mdi-account-arrow-left"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                    <div class="card card-mini dash-card card-2">
                                        <div class="card-body">
                                            <h2 class="mb-1">79,503</h2>
                                            <p>Daily Visitors</p>
                                            <span class="mdi mdi-account-clock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                    <div class="card card-mini dash-card card-3">
                                        <div class="card-body">
                                            <h2 class="mb-1">15,503</h2>
                                            <p>Daily Order</p>
                                            <span class="mdi mdi-package-variant"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                    <div class="card card-mini dash-card card-4">
                                        <div class="card-body">
                                            <h2 class="mb-1">$98,503</h2>
                                            <p>Daily Revenue</p>
                                            <span class="mdi mdi-currency-usd"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8 col-md-12 p-b-15">
                                    <!-- Sales Graph -->
                                    <div id="user-acquisition" class="card card-default">
                                        <div class="card-header">
                                            <h2>Sales Report</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content pt-4" id="salesReport">
                                                <div class="tab-pane fade show active" id="source-medium" role="tabpanel">
                                                    <div class="mb-6" style="max-height:247px">
                                                        <canvas id="linechart"></canvas>
                                                        <div id="acqLegend" class="customLegend mb-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-12 p-b-15">
                                    <!-- Doughnut Chart -->
                                    <div class="card card-default">
                                        <div class="card-header justify-content-center">
                                            <h2>Orders Overview</h2>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="polar"></canvas>
                                        </div>
                                        <a href="#" class="pb-5 d-block text-center text-muted"><i
                                                class="mdi mdi-download mr-2"></i>
                                            Download overall report</a>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8 col-md-12 p-b-15">
                                    <!-- User activity statistics -->
                                    <div class="card card-default" id="user-activity">
                                        <div class="no-gutters">
                                            <div>
                                                <div class="card-header justify-content-between">
                                                    <h2>User Activity</h2>
                                                    <div class="date-range-report ">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="userActivityContent">
                                                        <div class="tab-pane fade show active" id="user" role="tabpanel">
                                                            <canvas id="activity" class="chartjs"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex flex-wrap bg-white border-top">
                                                    <a href="#" class="text-uppercase py-3">In-Detail Overview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12 p-b-15">
                                    <div class="card card-default">
                                        <div class="card-header flex-column align-items-start">
                                            <h2>Current Users</h2>
                                        </div>
                                        <div class="card-body">
                                            <canvas id="currentUser" class="chartjs"></canvas>
                                        </div>
                                        <div class="card-footer d-flex flex-wrap bg-white border-top">
                                            <a href="#" class="text-uppercase py-3">In-Detail Overview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    <!-- Footer -->
    @include('outside.footer')


    <!-- Common Javascript -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>

    <!-- Chart -->
    <script src="{{ asset('assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <!-- Google map chart -->
    <script src="{{ asset('assets/plugins/charts/google-map-loader.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts/google-map.js') }}"></script>

    <!-- Date Range Picker -->
    <script src="{{ asset('assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/date-range.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:09 GMT -->

</html>