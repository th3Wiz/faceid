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
                        <li class="active"> <a class="waves-effect waves-dark" href="person-profile.php" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Person</span></a>
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
                        <h4 class="text-themecolor">Person</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Person</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="search">Search</label>
                                                    <input type="email" id="search" name="search" class="form-control" placeholder="Type name or ID ...">
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="m-t-30 btn waves-effect waves-light btn-primary">Find</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr class="row">
                                                        <th class="col-md-1">#</th>
                                                        <th class="col-md-2">Avatar</th>
                                                        <th class="col-md-3">Name</th>
                                                        <th class="col-md-2 text-center">Gender</th>
                                                        <th class="col-md-1 text-center">Age</th>
                                                        <th class="col-md-2 text-center">Crime lv</th>
                                                        <th class="col-md-1 text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-1">1</td>
                                                        <td class="col-md-2">
                                                            <img src="../assets/images/users/2.jpg" alt="user" width="30px">
                                                        </td>
                                                        <td class="col-md-3"><a href="person-detail.php"><strong>Đàm Bá Quyền</strong></a></td>
                                                        <td class="col-md-2 text-center">Male</td>
                                                        <td class="col-md-1 text-center">22</td>
                                                        <td class="col-md-2 text-center">0</td>
                                                        <td class="col-md-1 text-center">
                                                            <a href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;&nbsp;
                                                            <a href="#"><i class="fas fa-trash-alt"></i> </a>
                                                        </td>
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
    <!-- <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script> -->
</body>

</html>