<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Coba | Laravel
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="" content="">
    <!-- Base Css Files -->
    <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
    <link href="assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- Code Highlighter for Demo -->
    <link href="assets/libs/prettify/github.css" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/jquery-notifyjs/styles/metro/notify-metro.css">

    <link rel="shortcut icon" href="/images/unugiri.ico">
</head>

<body class="fixed-left">


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <div class="topbar-left">
                <div class="logo">
                    <h1><a href="./"><img src="images/logoatas.png" loading="lazy" alt="Logo unugiri"></a></h1>
                </div>
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-collapse2">
                        <ul class="nav navbar-nav hidden-xs">
                        </ul>
                        <ul class="nav navbar-nav navbar-right top-navbar">
                            <li class="dropdown topbar-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Wahyu <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="?hlm=dashboard">My Profile</a></li>
                                    <li><a href="#">Change Password</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a class="md-trigger" data-toggle="modal" data-target=".logout-modal"><i class="icon-logout-1"></i>
                                            Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!-- Search form -->
                <form role="search" class="navbar-form" action="?hlm=cari" method="POST">
                    <div class="form-group">

                        <input type="text" name="id" placeholder="Cari Fasilitas" class="form-control">
                        <button type="submit" name="cari" class="btn search-button"><i class="fa fa-search"></i></button>

                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                        <a href="./" class="rounded-image profile-image"><img src="images/logounugiri.png"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>
                                Wahyu
                            </b>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>

                <div id="sidebar-menu">
                    <ul>
                        <li class=''>
                            <a href="index.php">
                                <i class='fa fa-home'></i><span>Dashboard</span> </i>
                            </a>
                        </li>

                        <li class='has_sub'><a href='javascript:void(0);'>
                                <i class='fa fa-book'></i><span>Data Fasilitas</span>
                                <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href='?hlm=gedung'><i class="fa fa-building-o"></i> <span>Fasilitas
                                            Gedung</span></a></li>
                                <li><a href='?hlm=barang'><i class="fa fa-dashboard"></i> <span>Fasilitas
                                            barang</span></a></li>
                            </ul>
                        </li>
                        <li class=''>
                            <a href="?hlm=riwayat">
                                <i class='fa fa-folder'></i><span>Riwayat Peminjaman</span> </i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Left Sidebar End -->
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
            <h1>HALLO</h1>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->
</div>

<!-- End right content -->
<footer>
    Native is Real &copy; 2022
    <div class="footer-links pull-right">
        <a href="#">About</a>
        <a href="#">Support</a>
        <a href="#">Terms of Service</a>
        <a href="#">Legal</a>
        <a href="#">Help</a>
        <a href="#">Contact Us</a>
    </div>
</footer>

</div>
</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
    var resizefunc = [];

</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
<script src="assets/libs/jquery-detectmobile/detect.js"></script>
<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
<script src="assets/libs/fastclick/fastclick.js"></script>
<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/libs/nifty-modal/js/classie.js"></script>
<!-- <script src="assets/libs/nifty-modal/js/modalEffects.js"></script> -->
<script src="assets/libs/sortable/sortable.min.js"></script>
<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/libs/pace/pace.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

<!-- Demo Specific JS Libraries -->
<script src="assets/libs/prettify/prettify.js"></script>

<script src="assets/js/init.js"></script>
<script src="assets/libs/jquery-notifyjs/notify.min.js"></script>
<script src="assets/libs/jquery-notifyjs/styles/metro/notify-metro.js"></script>
<script src="assets/js/pages/notifications.js"></script>
</body>
</body>

</html>
