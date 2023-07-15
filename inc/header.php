<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- PAGE TITLE HERE -->
    <title>Payroll Management System</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
    <link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


    <!-- tagify-css -->
    <link href="vendor/tagify/dist/tagify.css" rel="stylesheet">

    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.php" class="brand-logo">
            <span>Payroll</span>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="input-group search-area">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item ps-3">
                            <div class="dropdown header-profile2">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="header-info2 d-flex align-items-center">
                                        <div class="header-media">
                                            <img src="images/tab/1.jpg" alt="">
                                        </div>
                                        <div class="header-info">
                                            <h6>Thomas Fleming</h6>
                                            <p>info@gmail.com</p>
                                        </div>

                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <div class="card border-0 mb-0">
                                        <div class="card-header py-2">
                                            <div class="products">
                                                <img src="images/tab/1.jpg" class="avatar avatar-md" alt="">
                                                <div>
                                                    <h6>Thomas Fleming</h6>
                                                    <span>Web Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 py-2">
                                            <a href="#" class="dropdown-item ai-icon "><span class="ms-2">Profile </span></a>
                                            <a href="#" class="dropdown-item ai-icon "><span class="ms-2">Change Email</span></a>
                                            <a href="#" class="dropdown-item ai-icon "><span class="ms-2">Change Password</span></a>
                                        </div>
                                        <div class="card-footer px-0 py-2">

                                            <a href="#" class="dropdown-item ai-icon"><span class="ms-2">Logout </span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>