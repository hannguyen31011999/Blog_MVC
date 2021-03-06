<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard 1 | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../public/Admin/assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="../public/Admin/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="../public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="../public/Admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="../public/Admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-email-outline noti-icon"></i>
                            <span class="badge badge-purple rounded-circle noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Chat
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <div class="inbox-widget">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="../public/Admin/assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Cristina Pride</p>
                                            <p class="inbox-item-text text-truncate">Hi, How are you? What about our next meeting</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="../public/Admin/assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Sam Garret</p>
                                            <p class="inbox-item-text text-truncate">Yeah everything is fine</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="../public/Admin/assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Karen Robinson</p>
                                            <p class="inbox-item-text text-truncate">Wow that's great</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="../public/Admin/assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Sherry Marshall</p>
                                            <p class="inbox-item-text text-truncate">Hi, How are you? What about our next meeting</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="../public/Admin/assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shawn Millard</p>
                                            <p class="inbox-item-text text-truncate">Yeah everything is fine</p>

                                        </div>
                                    </a>
                                </div> <!-- end inbox-widget -->

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <i class="mdi mdi-comment-account-outline text-info"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="noti-time">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-success">
                                        <i class="mdi mdi-account-plus text-primary"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="noti-time">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-danger">
                                        <i class="mdi mdi-heart text-danger"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked 
                                        <small class="noti-time">3 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-warning">
                                        <i class="mdi mdi-comment-account-outline text-primary"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admi
                                        <small class="noti-time">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-purple">
                                        <i class="mdi mdi-account-plus text-danger"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="noti-time">7 days ago</small>
                                    </p>
                                </a>

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-danger">
                                        <i class="mdi mdi-heart text-danger"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                                        <small class="noti-time">Carlos Crouch liked</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-item notify-all">
                                    See all notifications
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../public/Admin/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Quản trị viên   <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Xin chào</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Thông tin</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Đăng xuất</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="../public/Admin/assets/images/logo-dark.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="../public/Admin/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="../public/Admin/assets/images/logo-light.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="../public/Admin/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <!-- LOGO -->
  

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Danh mục </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-list"></i>
                        <span> Quản lí bài viết </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="../admin/typepost">Loại bài viết</a></li>
                        <li><a href="../admin/post">Bài viết</a></li>
                        <li><a href="../admin/comment">Bình luận</a></li>
                    </ul>
                </li>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Xin chào !</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard 1</li>
                                        </ol>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                       

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0">Weekly Sales Report</h5>
                                    </div>
                                    <div id="cardCollpase1" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="morris-bar-example" class="morris-charts" dir="ltr" style="height: 320px;"></div>
                                                    <div class="row text-center mt-4 mb-4">
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 126</h5>
                                                            <small class="text-muted"> Today's Sales</small>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 967</h5>
                                                            <small class="text-muted">This Week's Sales</small>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 4500</h5>
                                                            <small class="text-muted">This Month's Sales</small>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 87,000</h5>
                                                            <small class="text-muted">This Year's Sales</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->

                            </div>
                            <!-- end col -->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="card-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h5 class="header-title mb-0"> Yearly Sales Report</h5>
                                    </div>
                                    <div id="cardCollpase2" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="morris-line-example" class="morris-charts" dir="ltr" style="height: 200px;"></div>
                                                    <div class="row text-center mt-4">
                                                        <div class="col-sm-4">
                                                            <h5>$ 86,956</h5>
                                                            <small class="text-muted"> This Year's Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h5>$ 86,69</h5>
                                                            <small class="text-muted">Weekly Sales Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h5>$ 948,16</h5>
                                                            <small class="text-muted">Yearly Sales Report</small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="status">
                                                    <h3 class="mt-2">61.5%</h3>
                                                    <p class="mb-1">US Dollar Share</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-3">
                                                <span class="sparkpie-big"><canvas width="98" height="50" style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End row -->
                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="../public/Admin/assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="../public/Admin/assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="../public/Admin/assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../public/Admin/assets/js/vendor.min.js"></script>

        <script src="../public/Admin/assets/libs/moment/moment.min.js"></script>
        <script src="../public/Admin/assets/libs/jquery-scrollto/jquery.scrollTo.min.js"></script>
        <script src="../public/Admin/assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Chat app -->
        <script src="../public/Admin/assets/js/pages/jquery.chat.js"></script>

        <!-- Todo app -->
        <script src="../public/Admin/assets/js/pages/jquery.todo.js"></script>

        <!--Morris Chart-->
        <script src="../public/Admin/assets/libs/morris-js/morris.min.js"></script>
        <script src="../public/Admin/assets/libs/raphael/raphael.min.js"></script>

        <!-- Sparkline charts -->
        <script src="../public/Admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Dashboard init JS -->
        <script src="../public/Admin/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="../public/Admin/assets/js/app.min.js"></script>

    </body>
</html>