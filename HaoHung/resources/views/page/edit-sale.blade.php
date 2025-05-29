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
                        <div class="main-content">
                            <div class="header"> Edit Manage Vouchers</div>
                            <form action="{{ route('sale.postUpdateSale') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$sales->id}}">
                                <div class="form-group">
                                    <label>Name voucher :</label>
                                    <input class="form-control" type="text" name="Name_Sale" value="{{$sales->Name_Sale}}"
                                        placeholder="Enter name voucher">
                                </div>

                                <div class="form-group">
                                    <label>Code voucher :</label>
                                    <input class="form-control" type="text" name="Code_Voucher" value="{{$sales->Code_Voucher}}"
                                        placeholder="Enter code voucher">
                                </div>

                                <div class="form-group">
                                    <label>How much % :</label>
                                    <input class="form-control" type="text" name="Moneny" value="{{$sales->Moneny}}"
                                        placeholder="Enter % voucher">
                                </div>

                                <div class="form-group">
                                    <label>Discount description :</label>
                                    <input class="form-control" type="text" name="description"
                                        value="{{$sales->description}}" placeholder="Enter the description">
                                </div>
                                <button class="btn btn-primary" type="submit">
                                    Edit Vouchers
                                </button>
                            </form>
                        </div>
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
</body>



<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

</html>