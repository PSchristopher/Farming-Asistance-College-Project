<?php
include "../condb.php";
session_start();
if (isset($_POST["submit"]))
{
    $avatar_path='profile/'.$_FILES['avatar']['name'];
    $crop_name = $_POST['crop_name'];
    $crop_quantity = $_POST['crop_quantity'];
    $ads_desc = $_POST['ads_desc'];

     // mysqli_query($con,"INSERT INTO `farmer_log_tb` (`username`, `password`,) VALUES ('$username','$password')") or die(mysqli_error($con));
		//$last_login_id = mysqli_insert_id($con);

        $avatar_path=mysqli_real_escape_string($con,$avatar_path);
   if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
       $_SESSION['avatar']=$avatar_path;

    mysqli_query($con,"INSERT INTO `ads_tb` (`ads_id`,`ads_image`,`crop_name`,`crop_quantity`,`ads_desc`) VALUES(NULL,'$avatar_path','$crop_name','$crop_quantity','$ads_desc')");
    echo "<script> alert('added');</script>";

}
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Supplier Assisstance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
            <style>
            div.gallery {
            margin: 5px;
            border: 1px solid red;
            float: center;
            width : 1000px;
               height : 500px;
            }

            div.gallery:hover {
            border: 1px solid blue;
           
            }

            div.gallery img {
               width : 100%;
               height : 100%;
            }


        </style>

   

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader"  style="background-color:orange;">
        <div class="loader"  style="background-color:white;"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container" >
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php">Supplier Assisstance </a>
                </div>
            </div>
            <div style="background-color:orange;" class="main-menu">
                <div class="menu-inner">
                    <nav>
                    <ul class="nav offset-menu-tab">
                        <li><a class="active" data-toggle="tab" href="#admin" style="color:white"><b>DASHBOARD</b></a></li>
                       
                    </ul>
                    <ul class="metismenu" id="menu"> 
                        
                             <li>
                                <a href="supplier_profile.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">PROFILE</span></b></a>
                             </li>
                        
                             <li>
                                <a href="post_ads.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">POST ADVERTISEMENTS</span></b></a>
                                <ul class="collapse">
                                    <li><a href="post_ads.php" aria-expanded="true" style="color:black"><b><span>Post_ads</span></b> </a></li>
                                    <li><a href="view_ads.php"  aria-expanded="true" style="color:black"><b><span>View_ads</span></b></a></li>
                                </ul>
                            </li>
                        
                            <li>
                                <a href="view_received_crops.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">VIEW RECEIVED CROPS</span></b></a>
                               
                            </li>
                            

                            <li>
                                <a href="add_feedbacks.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">ADD FEEDBACKS </span></b></a>
        </li> 
    
                           
        <li>
                                <a href="view_reply.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black"> VIEW_REPLY </span></b></a>
                            </li> 
                          
                    </ul> 
                                        
                         
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">SUPPLIER DASHBOARD </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">SUPPLIER</a></li>
                                <li><span>HOME</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">PROFILE <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                                <a class="dropdown-item" href="../logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">POST ADVERTISEMENTS</h4>
                                        <form method="POST"  enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Upload image</label>
                                                <input type="file" class="inp" id="avatar" name ="avatar" >
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Crop_Name</label>
                                                <input type="text" class="form-control" id="crop_name" name ="crop_name" placeholder="enter your crop_name">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Crop_Quantity</label>
                                                <input type="text" class="form-control" id="crop_quantity" name ="crop_quantity" placeholder="enter your crop_quantity">
                                                
                                            </div>
                                            
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Ads_Desc</label>
                                                <input type="text" class="form-control" id="ads_desc" name ="ads_desc" placeholder="enter your description">
                                                
                                            </div>
                                          
                                            <button type="submit" name ="submit" >Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                           
                        </div>
                    </div>
                </div>
            </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->

    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
