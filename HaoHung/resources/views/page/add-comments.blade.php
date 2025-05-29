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


    @section('content')
    <main class="main-content">
        <div class="wrapper">
            <div class="ec-page-wrapper">
                <div class="ec-content-wrapper">
                    <div class="main-content">
                        <div class="header">Manage Comments</div>
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="product_id">Product:</label>
                                <select class="form-control" name="product_id" id="product_id" required>
                                    @foreach ($products as $product)
                                    <option value="{{ $product->ID_Car }}">{{ $product->Name_Car }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user_id">User:</label>
                                <select class="form-control" name="user_id" id="user_id" required>
                                    {{-- Bạn cần truyền danh sách user từ controller --}}
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="content">Comment Content:</label>
                                <textarea class="form-control" name="content" id="content" rows="4" required placeholder="Write your comment..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="parent_id">Reply to (optional):</label>
                                <select class="form-control" name="parent_id" id="parent_id">
                                    <option value="">-- No parent (root comment) --</option>
                                    @foreach ($comments as $comment)
                                    <option value="{{ $comment->id }}">{{ Str::limit($comment->content, 50) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection

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