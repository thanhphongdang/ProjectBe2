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

    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- custom css -->
    <link id="style.css" rel="stylesheet" href="/assets/css/style.css" />

    <!-- FAVICON -->
    <link href="/assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        @include('Design.navbarKhachHang')



            <!-- Header -->
            @include('Design.header')

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper breadcrumb-contacts">
                        <div>
                            <h1>Thông Tin Cá Nhân</h1>
                            <p class="breadcrumbs"><span><a href="index.html">Trang Chủ</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Thông Tin Cá Nhân
                            </p>
                        </div>
                    </div>
                    <div class="user_profile_wrapper_top card">
                        <div class="user_profile_top_bg"></div>
                        <div class="user_profile_top_des">
                            <div class="user_profile_img">
								<img src="{{ asset('assets/img/' . $customer->image) }}" alt="avatar" width="130px" height="150px">
                            </div>
                            <div class="user_profile_text_top">
                                <h3>{{$customer->Name}}</h3>
                            </div>
                        </div>

                    </div>

                    <hr class="w-100">

                    <div class="contact-info pt-4">
                        <h5 class="text-dark">Thông tin liên hệ</h5>
                        <div class="contact_info_sidebar_item">
                            <h3>Địa Chỉ</h3>
                            <p>{{$customer->Address}}</p>
                        </div>

                        <div class="contact_info_sidebar_item">
                            <h3>Email</h3>
                            <p>{{$customer->Email}}</p>
                        </div>
                        <div class="contact_info_sidebar_item">
                            <h3>Số Điện Thoại</h3>
                            <p>{{$customer->Phone}}</p>
                        </div>

                        <div class="contact_info_sidebar_item">
                            <h3>Hồ sơ xã hội</h3>

                            <ul>
                                <li>
                                    <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                                        <i class="mdi mdi-skype"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('Design.footer')
            <!-- Footer -->
    </div> <!-- End Wrapper -->


    <!-- Common Javascript -->
    <script src="/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="/assets/plugins/slick/slick.min.js"></script>

    <!-- Option Switcher -->
    <script src="/assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- custom js -->
    <script src="/assets/js/custom.js"></script>

</body>


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

</html>