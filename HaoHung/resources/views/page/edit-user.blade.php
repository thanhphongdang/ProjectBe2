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
                                    <h1>Updata User</h1>
                                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                        <span><i class="mdi mdi-chevron-right"></i></span>Update
                                    </p>
                                </div>
                                <div>
                                    <a href="product-list.html" class="btn btn-primary"> View All
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-default">
                                        <div class="card-header card-header-border-bottom">
                                            <h2>Update User</h2>
                                        </div>
                                        <form class="row g-3" action="{{ route('post.update') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row ec-vendor-uploads">
                                                    <div class="col-lg-8">
                                                        <div class="ec-vendor-upload-detail">

                                                            @csrf
                                                            <input name="updated_at" type="hidden"
                                                                value="{{ $user->updated_at }}">
                                                            <input name="id" type="hidden" value="{{ $user->id }}">
                                                            <div class="col-md-6">
                                                                <label for="inputEmail4" class="form-label">Update
                                                                    Name</label>
                                                                <input type="text" name="name"
                                                                    class="form-control slug-title" maxlength="30"
                                                                    placeholder="Name" id="name" value="{{$user->name}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Email</label>
                                                                <input type="email" name="email"
                                                                    class="form-control slug-title"
                                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                                    placeholder="Email" id="email" value="{{$user->email}}">
                                                                @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror

                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Address</label>
                                                                <input type="text" name="address"
                                                                    class="form-control slug-title"
                                                                    pattern="[a-zA-Z0-9\s.,'-]+" placeholder="Address"
                                                                    id="address" value="{{$user->address}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Phone</label>
                                                                <input type="phone" name="phone"
                                                                    class="form-control slug-title" maxlength="10"
                                                                    placeholder="Phone" id="phone" value="{{$user->phone}}">
                                                                      @error('phone')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail5" class="form-label">Image</label>
                                                                <input type="file" name="image"
                                                                    class="form-control slug-title" placeholder="Phone"
                                                                    id="image">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail8" class="form-label">Password</label>
                                                                <input type="password" name="password"
                                                                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"
                                                                    class="form-control" placeholder="Password"
                                                                    id="password">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="inputEmail8" class="form-label">Confirm
                                                                    Password</label>
                                                                <input type="password" name="password"
                                                                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$"
                                                                    class="form-control" placeholder="Coflim Password"
                                                                    id="password">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="product_add_cancel_button">
                                                                    <button type="button"
                                                                        class="btn btn-border">Cancel</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="ec-vendor-img-upload">
                                                            <div class="ec-vendor-main-img">
                                                                <div class="avatar-upload">
                                                                    <div class="avatar-edit">
                                                                    </div>
                                                                    <div class="avatar-preview ec-preview">
                                                                        <div class="imagePreview ec-div-preview">
                                                                            <img class="ec-image-preview"
                                                                                src="image/{{ $user->image }}" alt="edit" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

    <script>
        document.querySelector('input[name="password"]').addEventListener('input', function () {
            this.value = this.value.replace(/\s/g, '');
        });
    </script>

    @if (session('error'))
        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3 z-3">
            <div class="toast text-bg-danger border-0 show" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'));
            toastElList.forEach(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, { delay: 3000 });
                toast.show();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElList = [].slice.call(document.querySelectorAll('.alert'));
            toastElList.forEach(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, { delay: 800 });
                toast.show();
            });
        });
    </script>
</body>



<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

</html>