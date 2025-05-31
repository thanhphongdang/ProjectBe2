<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

    <title>Andshop - Admin Dashboard HTML Template.</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- custom css -->
    <link id="style.css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- FAVICON -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background-color: #f8f8f8;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #000;
            padding: 10px 20px;
        }

        .nav-list {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .nav-list li {
            margin: 5px 10px;
        }

        .nav-list a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-list input[type="text"] {
            padding: 5px;
            border-radius: 4px;
            border: none;
        }

        .nav-list button {
            padding: 5px 10px;
            margin-left: 5px;
            border: none;
            background-color: black;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Slider */
        .slider-container {
            position: relative;
            width: 100%;
            height: 550px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slider-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease;
            border-radius: 10px;
        }

        .slider-image.active {
            opacity: 1;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 30px;
            padding: 8px 12px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            z-index: 10;
        }

        .slider-btn.prev {
            left: 10px;
        }

        .slider-btn.next {
            right: 10px;
        }

        /* Products */
        .products {
            padding: 40px 20px;
            text-align: center;
        }

        .products h2 {
            margin-bottom: 30px;
            font-size: 28px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            height: 100%;
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
        }

        .product-card h3 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .product-card p {
            margin: 5px 0;
        }

        .product-card button {
            padding: 8px 12px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .product-card button:first-of-type {
            background-color: black;
            color: white;
        }

        .product-card button:last-of-type {
            background-color: #ddd;
        }

        /* Footer */
        .footer {
            background-color: white;
            padding: 20px;
            text-align: right;
            font-weight: bold;
            color: green;
            font-size: 18px;
        }



        /* Thông Báo Update Thành Công */
        .custom-success-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) perspective(600px) rotateX(5deg);
            background: linear-gradient(145deg, #4caf50, #388e3c);
            color: white;
            padding: 20px 40px;
            border-radius: 15px;
            box-shadow:
                0 10px 20px rgba(0, 0, 0, 0.3),
                0 6px 6px rgba(0, 0, 0, 0.2);
            font-size: 1.4rem;
            font-weight: 600;
            text-align: center;
            z-index: 9999;

            /* Animation: scale + shadow pulse */
            animation: successPopup 1.5s ease forwards;
        }

        @keyframes successPopup {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) perspective(600px) rotateX(5deg) scale(0.8);
                box-shadow:
                    0 2px 4px rgba(0, 0, 0, 0.1);
            }

            50% {
                opacity: 1;
                transform: translate(-50%, -50%) perspective(600px) rotateX(5deg) scale(1.05);
                box-shadow:
                    0 15px 30px rgba(0, 0, 0, 0.4);
            }

            100% {
                opacity: 1;
                transform: translate(-50%, -50%) perspective(600px) rotateX(5deg) scale(1);
                box-shadow:
                    0 10px 20px rgba(0, 0, 0, 0.3);
            }
        }




        /* Thông Báo Update Không Thành Công */
        .custom-error-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) perspective(600px) rotateX(5deg);
            background: linear-gradient(145deg, #bf1e1b, #690000);
            color: white;
            padding: 20px 40px;
            border-radius: 15px;
            box-shadow:
                0 10px 20px rgba(0, 0, 0, 0.3),
                0 6px 6px rgba(0, 0, 0, 0.2);
            font-size: 1.4rem;
            font-weight: 600;
            text-align: center;
            z-index: 9999;

            animation: errorPopup 1.5s ease forwards;
        }

        @keyframes errorPopup {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) perspective(600px) rotateX(5deg) scale(0.8);
                box-shadow:
                    0 2px 4px rgba(0, 0, 0, 0.1);
            }

            50% {
                opacity: 1;
                transform: translate(-50%, -50%) perspective(600px) rotateX(5deg) scale(1.05);
                box-shadow:
                    0 15px 30px rgba(0, 0, 0, 0.4);
            }

            100% {
                opacity: 1;
                transform: translate(-50%, -50%) perspective(600px) rotateX(5deg) scale(1);
                box-shadow:
                    0 10px 20px rgba(0, 0, 0, 0.3);
            }
        }
    </style>

</head>

<body>

    <!-- Thông Báo Setting Profile -->
    @if (session('success'))
        <div class="custom-success-message">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="custom-error-message">
            {{ session('error') }}
        </div>
    @endif




    <!-- Sidebar / Navbar -->
    @include('outside.navbar-index')

    <!-- Main Content -->
    @section('content')
        <main class="main-content">
            <div class="wrapper">
                <div class="ec-page-wrapper">
                    <div class="ec-content-wrapper">
                        <div class="content">
                            <div class="breadcrumb-wrapper breadcrumb-contacts">

                                <div>
                                    <h1>Customer profile</h1>
                                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                        <span><i class="mdi mdi-chevron-right"></i></span>Profile
                                    </p>
                                </div>
                                
                            </div>



                            <div class="user_profile_wrapper_top card">
                                <div class="user_profile_top_bg"></div>
                                <div class="user_profile_top_des">
                                    <div class="user_profile_img" style="position: relative; display: inline-block;">
                                        <!-- Ảnh đại diện -->
                                        <img src="{{ asset('image/' . $user->image) }}" alt="" width="150"
                                            style="border-radius: 50%;">

                                        <!-- Nút icon upload giữa ảnh -->
                                        <label for="image" class="upload-icon"
                                            style="
                                            position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);
                                            background: rgba(0, 0, 0, 0.6);
                                            border-radius: 50%;
                                            padding: 10px;
                                            cursor: pointer;
                                        ">
                                            <i class="fas fa-camera text-white"></i>
                                        </label>

                                        <!-- Form upload ảnh -->
                                        <form id="image-upload-form" action="{{ route('update.profile') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" name="image" id="image" style="display: none;"
                                                onchange="document.getElementById('image-upload-form').submit();">
                                        </form>
                                    </div>

                                    <div class="user_profile_text_top">
                                        <h3>{{ $user->name }}</h3>
                                        <p>{{ $user->address }}</p>
                                    </div>
                                </div>
                            </div>


                            <div class="card bg-white profile-content">
                                <div class="row">
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="profile-content-left profile-left-spacing">
                                            

                                            <hr class="w-100">

                                            <div class="contact-info pt-4">
                                                <h5 class="text-dark">Contact Information</h5>
                                                <div class="contact_info_sidebar_item">
                                                    <h3>Address</h3>
                                                    <p>{{$user->address}}</p>
                                                </div>

                                                <div class="contact_info_sidebar_item">
                                                    <h3>Email</h3>
                                                    <p>{{$user->email}}</p>
                                                </div>
                                                <div class="contact_info_sidebar_item">
                                                    <h3>Phone number</h3>
                                                    <p>{{$user->phone}}</p>
                                                </div>

                                                <div class="contact_info_sidebar_item">
                                                    <h3>Social Profile</h3>

                                                    <ul>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                                                <i class="mdi mdi-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="mb-1 btn btn-outline btn-skype rounded-circle">
                                                                <i class="mdi mdi-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-xl-9">
                                        <div class="profile-content-right profile-right-spacing py-5">
                                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="purchased-tab"
                                                        data-bs-toggle="tab" data-bs-target="#purchased" type="button"
                                                        role="tab" aria-controls="purchased"
                                                        aria-selected="true">Purchased</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                        data-bs-target="#r-orders" type="button" role="tab"
                                                        aria-controls="orders" aria-selected="false">Recent
                                                        orders</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                                        data-bs-target="#settings" type="button" role="tab"
                                                        aria-controls="settings" aria-selected="false">Settings</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                                <div class="tab-pane fade show active" id="purchased" role="tabpanel"
                                                    aria-labelledby="purchased-tab">
                                                    <div class="tab-widget mt-5">
                                                        <div class="user_profile_top_heading">
                                                            <h3>All purchased products</h3>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-1.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for men</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-2.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for boys</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-3.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for boys</a></h3>
                                                                            <p>$155.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-4.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Pink inner
                                                                                    for
                                                                                    women</a></h3>
                                                                            <p>$145.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-5.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Sports
                                                                                    t-shirt</a></h3>
                                                                            <p>$105.90</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-6.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for men</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-7.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for men</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-8.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Smart
                                                                                    watch</a></h3>
                                                                            <p>$589.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-9.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Laptop</a>
                                                                            </h3>
                                                                            <p>$1495.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-10.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for men</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-11.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Casual shirt
                                                                                    for men</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <div class="card-wrapper">
                                                                    <div class="card-container">
                                                                        <div class="card-top">
                                                                            <img class="card-image"
                                                                                src="assets/img/products/pro-big-12.png"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="card-bottom">
                                                                            <h3><a href="product-detail.html">Double sofa
                                                                                    set</a></h3>
                                                                            <p>$195.00</p>
                                                                        </div>
                                                                        <div class="card-action">
                                                                            <div class="card-edit"><i
                                                                                    class="mdi mdi-circle-edit-outline"></i>
                                                                            </div>
                                                                            <div class="card-preview"><i
                                                                                    class="mdi mdi-eye-outline"></i>
                                                                            </div>
                                                                            <div class="card-remove"><i
                                                                                    class="mdi mdi mdi-delete-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="r-orders" role="tabpanel"
                                                    aria-labelledby="orders-tab">
                                                    <div class="tab-widget mt-5">
                                                        <div class="user_profile_top_heading">
                                                            <h3>Recent orders</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card card-default">
                                                                    <div class="card-body">
                                                                        <div class="table-responsive">
                                                                            <table id="responsive-data-table"
                                                                                class="table" style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Product name</th>
                                                                                        <th>Unit</th>
                                                                                        <th>Price</th>
                                                                                        <th>Order date</th>
                                                                                        <th>Status</th>
                                                                                    </tr>
                                                                                </thead>


                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>#JK5876GH</td>
                                                                                        <td>Corporate office chair</td>
                                                                                        <td>10 Units</td>
                                                                                        <td>$10,000</td>
                                                                                        <td>25 Feb 2022</td>
                                                                                        <td>Completed</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="settings" role="tabpanel"
                                                    aria-labelledby="settings-tab">
                                                    <div class="tab-widget mt-5">
                                                        <div class="user_profile_top_heading">
                                                            <h3>Customer settings</h3>
                                                        </div>
                                                        <div class="tab-pane-content mt-5">
                                                            <form action="{{ route('profile.update') }}" method="POST">
                                                                @csrf
                                                                <div class="row mb-2">

                                                                    <!-- User Name -->
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="userName">User name</label>
                                                                            <input type="text" name="userName"
                                                                                class="form-control" id="userName"
                                                                                value="{{ old('userName', Auth::user()->name) }}">
                                                                            @error('userName')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!-- Email -->
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" name="email"
                                                                                class="form-control" id="email"
                                                                                value="{{ old('email', Auth::user()->email) }}">
                                                                            @error('email')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!-- Phone -->
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="number">Phone</label>
                                                                            <input type="text" name="number"
                                                                                class="form-control" id="number"
                                                                                value="{{ old('number', Auth::user()->phone) }}">
                                                                            @error('number')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!-- Address -->
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="address">Địa chỉ</label>
                                                                            <input type="text" name="address"
                                                                                class="form-control" id="address"
                                                                                value="{{ old('address', Auth::user()->address) }}">
                                                                            @error('address')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!-- New Password -->
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="newPassword">New password</label>
                                                                            <input type="password" name="newPassword"
                                                                                class="form-control" id="newPassword">
                                                                            @error('newPassword')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="d-flex justify-content-end mt-5">
                                                                    <button type="submit"
                                                                        class="btn btn-primary mb-2 btn-pill">Update
                                                                        Profile</button>
                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>

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
    @include('outside.footerByKy')


    <!-- Common Javascript -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>

    <!-- Option Switcher -->
    <script src="{{ asset('assets/plugins/options-sidebar/optionswitcher.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>



    <!-- Thông báo Profile js -->
    <script>
        setTimeout(() => {
            const message = document.querySelector('.custom-success-message');
            if (message) {
                message.style.transition = 'opacity 0.5s ease';
                message.style.opacity = '0';
                setTimeout(() => {
                    message.remove();
                }, 500);
            }
        }, 1000); // 3 giây
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMsg = document.querySelector('.custom-success-message');
            const errorMsg = document.querySelector('.custom-error-message');

            [successMsg, errorMsg].forEach(msg => {
                if (msg) {
                    setTimeout(() => {
                        msg.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        msg.style.opacity = '0';
                        msg.style.transform += ' scale(0.9)';
                        setTimeout(() => msg.remove(), 500); // gỡ khỏi DOM sau khi ẩn
                    }, 1000); // 3 giây
                }
            });
        });
    </script>


</body>



<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

</html>
