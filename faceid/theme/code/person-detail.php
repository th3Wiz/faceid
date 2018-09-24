<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>FaceID Management</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/node_modules/dropify/dist/css/dropify.min.css">
    <link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">FaceID Management</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img src="dist/img/logo.png" class="light-logo" alt="homepage" width="80%"/>
                     </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Quyen &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Dam Ba Quyen</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="icon-speedometer"></i>Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="query-image.php" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Query image</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Tracking camera</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="tracking-camera.php">Filter log</a></li>
                                <li><a href="tracking-streaming.php">Livestream log</a></li>
                            </ul>
                        </li>
                        <li class="active"> <a class="waves-effect waves-dark" href="person.php" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Person</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-login.php" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Person detail</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Person detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="card">
                            <img src="../assets/images/users/2.jpg" alt="user" width="100%">
                            <div class="card-body"> 
                                <small class="text-muted">ID</small>
                                <h6>1275129012</h6>
                                <small class="text-muted p-t-30 db">Name</small>
                                <h6>Đàm Bá Quyền</h6>
                                <small class="text-muted p-t-30 db">Gender</small>
                                <h6>Male</h6>
                                <small class="text-muted p-t-30 db">Age</small>
                                <h6>23</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tracking log</h4>
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5">
                                                <div class="form-group">
                                                    <label class="control-label">Date from</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-lg-5">
                                                <div class="form-group">
                                                    <label class="control-label">Date to</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-lg-2">
                                                <button type="button" class="m-t-30 btn waves-effect waves-light btn-primary">Filter</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row" style="overflow-y: scroll; max-height: 150px; margin-bottom: 15px">
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 col-3 image-box">
                                                <img src="../assets/images/users/2.jpg" alt="user">
                                                <div class="image-box-overlay">
                                                    <div class="image-box-info">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr class="row">
                                                                <th class="col-md-6">Photos</th>
                                                                <th class="col-md-3">Location</th>
                                                                <th class="col-md-3">Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="row">
                                                                <td class="col-md-6">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                </td>
                                                                <td class="col-md-3">Mall</td>
                                                                <td class="col-md-3">2018/08/26 15:24</td>
                                                            </tr>
                                                            <tr class="row">
                                                                <td class="col-md-6">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                </td>
                                                                <td class="col-md-3">School</td>
                                                                <td class="col-md-3">2018/08/26 15:20</td>
                                                            </tr>
                                                            <tr class="row">
                                                                <td class="col-md-6">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                </td>
                                                                <td class="col-md-3">Le Van Luong Street</td>
                                                                <td class="col-md-3">2018/08/26 12:00</td>
                                                            </tr>
                                                            <tr class="row">
                                                                <td class="col-md-6">
                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                                </td>
                                                                <td class="col-md-3">Mall</td>
                                                                <td class="col-md-3">2018/08/25 17:30</td>
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-40 align-items-center no-block">
                                    <h4 class="card-title ">Activities statistic</h4>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-cyan"></i> Mall</li>
                                            <li><i class="fa fa-circle text-primary"></i> School</li>
                                            <li><i class="fa fa-circle text-purple"></i> Le Van Luong</li>
                                            <li><i class="fa fa-circle text-success"></i> Giang Van Minh</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="morris-area-chart" style="height: 340px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 FaceID by TVLab
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard1.js"></script>
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>

    <!-- ============================================================== -->
    <!-- jQuery file upload -->
    <script src="../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!-- <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script> -->
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
        Morris.Area({
            element: 'morris-area-chart'
            , data: [{
                month: '2017-08', 
                mall: 50, 
                school: 0, 
                levanluong: 23,
                giangvanminh: 15
            }, {
                month: '2017-09', 
                mall: 20, 
                school: 50, 
                levanluong: 21,
                giangvanminh: 17
            }, {
                month: '2017-10', 
                mall: 30, 
                school: 80, 
                levanluong: 12,
                giangvanminh: 24
            }, {
                month: '2017-11', 
                mall: 15, 
                school: 100, 
                levanluong: 25,
                giangvanminh: 2
            }, {
                month: '2017-12', 
                mall: 26, 
                school: 80, 
                levanluong: 5,
                giangvanminh: 6
            }, {
                month: '2018-01', 
                mall: 64, 
                school: 50, 
                levanluong: 12,
                giangvanminh: 10
            }, {
                month: '2018-02', 
                mall: 12, 
                school: 20, 
                levanluong: 27,
                giangvanminh: 10
            }, {
                month: '2018-03', 
                mall: 23, 
                school: 30, 
                levanluong: 15,
                giangvanminh: 19
            }, {
                month: '2018-04', 
                mall: 52, 
                school: 80, 
                levanluong: 11,
                giangvanminh: 19
            }, {
                month: '2018-05', 
                mall: 12, 
                school: 90, 
                levanluong: 20,
                giangvanminh: 21
            }, {
                month: '2018-06', 
                mall: 6, 
                school: 40, 
                levanluong: 12,
                giangvanminh: 6
            }, {
                month: '2018-07', 
                mall: 23, 
                school: 5, 
                levanluong: 17,
                giangvanminh: 9
            }, {
                month: '2018-08', 
                mall: 12, 
                school: 9, 
                levanluong: 20,
                giangvanminh: 10
            }]
            , xkey: 'month'
            , ykeys: ['mall', 'school', 'levanluong', 'giangvanminh']
            , labels: ['Mall', 'School', 'Le Van Luong Street', 'Giang Van Minh Street']
            , pointSize: 3
            , fillOpacity: 0
            , pointStrokeColors: ['#00bfc7', '#fb9678', '#9675ce', '#00c292']
            , behaveLikeLine: true
            , gridLineColor: '#e0e0e0'
            , lineWidth: 3
            , hideHover: 'auto'
            , lineColors: ['#00bfc7', '#fb9678', '#9675ce', '#00c292']
            , resize: true
        });
    </script>
</body>

</html>