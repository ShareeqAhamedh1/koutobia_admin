<?php
include "backend/conn.php";


    ?>

<!DOCTYPE html>
<php lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard php5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, php admin panel template, bootstrap admin template, php and css templates, bootstrap, bootstrap php template, php admin dashboard template, bootstrap dashboard, admin panel php template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


<link rel="stylesheet" href="assets/libs/apexcharts/apexcharts.css">

</head>

<body>

   


    <!-- Loader -->
    <div id="loader" >
        <img src="assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.php" class="header-logo">
                                <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                                <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle mx-0 my-auto"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link -->
                        <!-- <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bx bx-search-alt-2 header-link-icon"></i>
                        </a> -->
                        <div class="main-header-search ms-3 d-none d-lg-block my-auto">
                            <input class="form-control" placeholder="Search for anything..." type="search"> <button
                                class="btn"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    

                     <!-- Start::header-element -->
                     <div class="header-element header-search d-block d-lg-none">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="ti ti-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                  

                  

                    <!-- Start::header-element -->
                    <div class="header-element meassage-dropdown d-none d-xl-block">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-message-square header-link-icon"></i>
                            <span class="pulse-danger"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">You have Messages</p>
                                    <span class="badge bg-success fw-normal" id="message-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll1">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/1.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Madeleine<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 3 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Hey! there I'
                                                    am available....</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/2.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Anthony<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 5 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New product
                                                    Launching...</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/3.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Olivia<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block">45 mintues ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New Schedule
                                                    release......</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/4.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Sanderson<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block">20 mintues ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New Schedule
                                                    release......</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/2.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Senrio<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 10 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New product
                                                    Launching...</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-shopping-cart header-link-icon"></i>
                            <span class="badge rounded-pill bg-success cart-badge fw-normal" id="cart-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                                    <span class="badge bg-success fw-normal" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="assets/images/pngs/1.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.php">Cup Set</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$1,299.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>White Set</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid">
                                    <a href="checkout.php" class="btn text-muted p-0 border-0">Proceed to checkout</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="shop.php" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue
                                        shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                 
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element d-none d-sm-block">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="#" class="header-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvassidebar">
                            <i class="fe fe-menu header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <!-- <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <i class="fe fe-settings header-link-icon"></i>
                        </a> -->
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>

                <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.php" class="header-logo">
                    <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                    <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="index.php" class="side-menu__item">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="categories.php" class="side-menu__item">
                                <i class="ri-hotel-line side-menu__icon"></i>
                                <!-- <i class="ri-hotel-line"></i> -->
                                <span class="side-menu__label">Categories</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="products.php" class="side-menu__item">
                                <i class="ri-hotel-line side-menu__icon"></i>
                                <!-- <i class="ri-hotel-line"></i> -->
                                <span class="side-menu__label">Products</span>
                            </a>
                        </li>
                       
                    

                    
                
                       

                     
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            
                            <ul class="slide-menu child1">
                                
                                <li class="slide">
                                    <a href="login.php" class="side-menu__item"> Login</a>
                                </li>
                                <li class="slide">
                                    <a href="register.php" class="side-menu__item"> Register</a>
                                </li>
                                <li class="slide">
                                    <a href="forgot-password.php" class="side-menu__item"> Forgot Password</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen.php" class="side-menu__item"> Lock screen</a>
                                </li>
                                <li class="slide">
                                    <a href="construction.php" class="side-menu__item"> Under Construction</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- End::slide -->



                        
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

