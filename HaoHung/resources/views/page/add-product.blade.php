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
                            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                                <div>
                                    <h1>ADD WareHouse</h1>
                                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                        <span><i class="mdi mdi-chevron-right"></i></span>PRODUCT
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-default">
                                        <div class="card-header card-header-border-bottom">
                                            <h2>ADD WareHouse</h2>
                                        </div>

                                        <div class="card-body">
                                            <div class="row ec-vendor-uploads">
                                                <div class="col-lg-8">
                                                    <div class="ec-vendor-upload-detail">
                                                        <form class="row g-3" action="{{ route('post.warehouse') }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-md-6">
                                                                <label for="inputEmail4" class="form-label">Name</label>
                                                                <input type="text" name="Name_Car"
                                                                    class="form-control slug-title" placeholder="Name Car"
                                                                    id="Name_Car" maxlength="50" minlength="2">
                                                                    
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Company</label>
                                                                <select name="Car_Company" id="Car_Company"
                                                                    class="form-select">
                                                                    <option value="Audi">Audi</option>
                                                                    <option value="Nissan">Nissan</option>
                                                                    <option value="Toyota">Toyota</option>
                                                                    <option value="Ford">Ford</option>
                                                                    <option value="Mercedes">Mercedes</option>
                                                                    <option value="Lamborghini">Lamborghini</option>
                                                                    <option value="Ferrari">Ferrari</option>
                                                                    <option value="Ferrari">Bentley</option>
                                                                    <option value="Ferrari">Porsche</option>
                                                                    <option value="Ferrari">BMW</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Countries</label>
                                                                <select name="Countries" id="Countries" class="form-select">
                                                                    <option value="Germany">Germany</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="America">America</option>
                                                                    <option value="Việt Nam">Việt Nam</option>
                                                                    <option value="Bazil">Bazil</option>
                                                                    <option value="England">England</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Price</label>
                                                                <input type="price" name="Price"
                                                                    class="form-control slug-title" placeholder="Price"
                                                                    id="Price" maxlength="12" minlength="3" >
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Image</label>
                                                                <input type="file" name="Image"
                                                                    class="form-control slug-title" placeholder="Image"
                                                                    id="Image">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Quantity</label>
                                                                <input type="number" name="Quantity"
                                                                    class="form-control slug-title" placeholder="Quantity"
                                                                    id="Quantity" maxlength="3" minlength="1">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="form-label">Information</label>
                                                                <textarea class="form-control" name="information"
                                                                    id="information" rows="2" ></textarea>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="product_add_cancel_button">
                                                                    <button type="button"
                                                                        class="btn btn-border">Cancel</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Add</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="ec-vendor-img-upload">
                                                        <div class="ec-vendor-main-img">
                                                            <div class="avatar-upload">
                                                                <div class="avatar-preview ec-preview">
                                                                    <div class="imagePreview ec-div-preview">
                                                                        <img class="ec-image-preview"
                                                                            src="img/Bentley flying spur.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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