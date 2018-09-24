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
                        <li> <a class="waves-effect waves-dark" href="person.php" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Person</span></a>
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
                        <h4 class="text-themecolor">Filter camera log</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">Tracking by camera</li>
                                <li class="breadcrumb-item active">Filter log</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Camera</h4>
                                            <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose camera">
                                                <optgroup label="Mall">
                                                    <option value="1">Camera 1 - 192.168.1.1</option>
                                                    <option value="2">Camera 2 - 192.168.1.2</option>
                                                </optgroup>
                                                <optgroup label="School">
                                                    <option value="3">Camera 3 - 192.168.1.3</option>
                                                    <option value="4">Camera 4 - 192.168.1.4</option>
                                                    <option value="5">Camera 5 - 192.168.1.5</option>
                                                    <option value="6">Camera 6 - 192.168.1.6</option>
                                                    <option value="7">Camera 7 - 192.168.1.7</option>
                                                    <option value="8">Camera 8 - 192.168.1.8</option>
                                                </optgroup>                                    
                                                <optgroup label="Le Van Luong Street">
                                                    <option value="9">Camera 9 - 192.168.1.9</option>
                                                    <option value="10">Camera 10 - 192.168.1.10</option>
                                                    <option value="11">Camera 11 - 192.168.1.11</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Date from</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Date to</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Age from</label>
                                            <input type="number" class="form-control" value=18>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Age to</label>
                                            <input type="number" class="form-control" value=30>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <label class="control-label">Age</label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="male">
                                                    <label class="custom-control-label" for="male">Male</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="female">
                                                    <label class="custom-control-label" for="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group text-center" style="margin-bottom: 15px">
                                <button type="button" class="btn waves-effect waves-light btn-lg btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- Comment widgets -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Result</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    123123123 <br>
                                                    Dam Ba Quyen <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-check-square text-success"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    UNKNOWN <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-window-close text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    123123123 <br>
                                                    Dam Ba Quyen <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-check-square text-success"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    123123123 <br>
                                                    Dam Ba Quyen <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-check-square text-success"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    UNKNOWN <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-window-close text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    123123123 <br>
                                                    Dam Ba Quyen <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-check-square text-success"></i>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 image-box">
                                        <a href="person-detail.php">
                                            <img src="../assets/images/users/2.jpg" alt="user">
                                            <div class="image-box-overlay">
                                                <div class="image-box-info">
                                                    123123123 <br>
                                                    Dam Ba Quyen <br>
                                                    Giang Van Minh <br>
                                                    2018/08/27 08:54
                                                </div>
                                            </div>
                                            <i class="fas fa-check-square text-success"></i>
                                        </a>
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
    <script src="../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
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
    </script>
</body>

</html>