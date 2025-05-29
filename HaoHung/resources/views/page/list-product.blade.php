<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

    <title>ADMIN</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- Data Tables -->
    <link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link id="style.css" rel="stylesheet" href="assets/css/style.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">


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
                            <div class="breadcrumb-wrapper breadcrumb-contacts">
                                <div>
                                    <h1>Customer list</h1>
                                    <p class="breadcrumbs"><span><a href="{{ route('user.list') }}">Home</a></span>
                                        <span><i class="mdi mdi-chevron-right"></i></span>Customer
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('addProduct') }}" class="btn btn-primary"> ADD
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="ec-cat-list card card-default">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="responsive-data-table" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Photo</th>
                                                            <th>Name Car</th>
                                                            <th>Company</th>
                                                            <th>Price</th>
                                                            <th>Countries</th>
                                                            <th>Joined</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $user->ID_Car }} </td>
                                                                <td>
                                                                    <img class="cat-thumb"
                                                                        src="{{ asset('image/' . $user->Image) }}"
                                                                        alt="Product Image" />
                                                                </td>

                                                                <td> {{ $user->Name_Car }}</td>
                                                                <td>{{ $user->Car_Company }}</td>
                                                                <td>{{ $user->Price }}</td>
                                                                <td>{{ $user->Countries }}</td>
                                                                <td>{{ $user->created_at }}</td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-success">Info</button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false" data-display="static">
                                                                            <span class="sr-only">Info</span>
                                                                        </button>
                                                                        <div class="dropdown-menu">

                                                                            <a href="{{ route('warehouse.move', $user->id) }}"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Chắc chắn chuyển xe này sang danh mục bán?')">
                                                                                Add to Product
                                                                            </a>
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('delete.product', ['id' => $user->id]) }}">Delete</a>
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('update.product', ['id' => $user->id]) }}">Edit</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Content -->
                    </div>
                </div>
            </div>
        </main>
    @endsection

    <!-- Footer -->
    @include('outside.footer')


    <!-- Common Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Data Tables -->
    <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
    <script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
    <script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
    @if (session('success'))
        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3">
            <div class="toast align-items-center text-bg-success border-0 show" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.querySelector('.toast');
        if (toastEl) {
            var toast = new bootstrap.Toast(toastEl, { delay: 2000 });
            toast.show();
        }
    });
</script>


</body>



<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

</html>