<?php
    session_start();
    //load file config
    include "control/config.php";
    //load model
    include "control/model.php";

    $model = new model();

    $cameras = $model->fetch("SELECT * FROM camera JOIN location WHERE location.id = camera.idLocation");
    $selected_camera = $cameras[0];

    $maxid = $model->fetch_one("SELECT max(id) as maxid FROM image WHERE image.idCamera=".$selected_camera['id'])['maxid'];
?>
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
                    <div class="col-lg-8 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Camera</h4>
                                            <select class="select2 m-b-10" style="width: 100%" data-placeholder="Choose camera">
                                                <optgroup label="Cung văn hóa Trí Thức">
                                                    <?php foreach($cameras as $row){ ?>
                                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'].' - '.$row['HTTPUrl'] ?></option>
                                                    <?php } ?>
                                                </optgroup>
                                                <!-- <optgroup label="School">
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
                                                </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img style="-webkit-user-select: none;" src="http://<?php echo $selected_camera['HTTPUrl']?>" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Result</h4>
                            </div>
                            <div id="notify-box" class="comment-widgets" style="overflow-y: scroll; max-height: 400px">
                                <div class="d-flex no-block comment-row border-top bg-danger text-white">
                                    <div class="col-md-3 col-lg-3 text-center">
                                        <img src="../assets/images/users/2.jpg" alt="user" width="100%">
                                    </div>
                                    <div class="col-md-9 col-lg-9" style="">
                                        <div class="row">
                                            1123876124 - Đàm Bá Quyền<br>
                                            2018/08/24 15:35<br>
                                            <strong>Crime level: 5</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex no-block comment-row border-top">
                                    <div class="col-md-3 col-lg-3 text-center">
                                        <img src="../assets/images/users/2.jpg" alt="user" width="100%">
                                    </div>
                                    <div class="col-md-9 col-lg-9" style="">
                                        <div class="row">
                                            1123876124 - Đàm Bá Quyền<br>
                                            2018/08/24 15:35<br>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="d-flex no-block comment-row border-top">
                                    <div class="col-md-3 col-lg-3 text-center">
                                        <img src="../assets/images/users/2.jpg" alt="user" width="100%">
                                    </div>
                                    <div class="col-md-9 col-lg-9" style="">
                                        <div class="row">
                                            1123876124 - Đàm Bá Quyền<br>
                                            2018/08/24 15:35<br>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex no-block comment-row border-top bg-danger text-white">
                                    <div class="col-md-3 col-lg-3 text-center">
                                        <img src="../assets/images/users/2.jpg" alt="user" width="100%">
                                    </div>
                                    <div class="col-md-9 col-lg-9" style="">
                                        <div class="row">
                                            1123876124 - Đàm Bá Quyền<br>
                                            2018/08/24 15:35<br>
                                            <strong>Crime level: 5</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex no-block comment-row border-top">
                                    <div class="col-md-3 col-lg-3 text-center">
                                        <img src="../assets/images/users/2.jpg" alt="user" width="100%">
                                    </div>
                                    <div class="col-md-9 col-lg-9" style="">
                                        <div class="row">
                                            1123876124 - Đàm Bá Quyền<br>
                                            2018/08/24 15:35<br>
                                        </div>
                                    </div>
                                </div> -->
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
        });
        $('#btn').click(function(){
            console.log('aaa')
            $('#notify-box').prepend("<div class='d-flex no-block comment-row border-top bg-danger text-white'>"
                                    + "<div class='col-md-3 col-lg-3 text-center'>"
                                        + "<img src='../assets/images/users/2.jpg' alt='user' width='100%'>"
                                    + "</div>"
                                    + "<div class='col-md-9 col-lg-9'>"
                                        + "<div class='row'>"
                                            + "1123876124 - Đàm Bá Quyền<br>"
                                            + "2018/08/24 15:35<br>"
                                            + "<strong>Crime level: 5</strong>"
                                        + "</div>"
                                    + "</div>"
                                + "</div>");
        
        });
        function doAjax(){
            var dict = {
                type: 'POST',
                url: 'post_log.php',
                data: {'maxid': <?php echo $maxid ?>},
                dataType: 'json',
                success: function (data) {
                    // console.log('success');
                    // $('#hidden').val(data);// first set the value     
                },
                complete: function (data) {
                    console.log(data['responseJSON']['data']);
                    $.each(data['responseJSON']['data'], function(k, row) {
                        console.log(row);
                        var content = "<div class='d-flex no-block comment-row border-top";
                        if(row['crimeLevel'] > 0) content += " bg-danger text-white";
                        content += "'>";
                        content += "<div class='col-md-3 col-lg-3 text-center'>";
                        content += "<img src='data:image/jpeg;base64, ";
                        content += row['b64Face'] + "' alt='user' width='100%'>";
                        content += "</div>";
                        content += "<div class='col-md-9 col-lg-9'>";
                        content += "<div class='row'>";
                        content += row['idPerson'] + " - " + row['name'] + "<br>";
                        content += row['time'] + "<br>";
                        if(row['crimeLevel'] > 0) content += "<strong>Crime level: " + row['crimeLevel'] + "</strong>";
                        content += "</div></div></div>";
                        $('#notify-box').prepend(content);
                    });
                    <?php $maxid = $model->fetch_one("SELECT max(id) as maxid FROM image WHERE image.idCamera=".$selected_camera['id'])['maxid']; ?>
                    setTimeout(doAjax, 1000);
                }
            };
            console.log(dict);
            $.ajax(dict);
        };
        setTimeout(doAjax, 1000);
    </script>
</body>

</html>