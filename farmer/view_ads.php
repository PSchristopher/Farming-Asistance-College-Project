<!doctype html>
<html class="no-js" lang="en">
<?php
include "../condb.php";
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Farmer Assisstance</title>
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
                    <a href="index.php">FARMER Assisstance </a>
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
                                <a href="farm_profile.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">PROFILE</span></b></a>
                             </li>
                        
                            
                           
                        
                            <li>
                                <a href="view_products.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">VIEW PRODUCTS ADS</span></b></a>
                               
                            </li>
                            

                          
                            
                            <li>
                                <a href="add_complains.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">FEEDBACK </span></b></a>
        </li> 
                                <li><a href="view_reviews.php" aria-expanded="true"><i class="ti-palette"></i><b><span style="color:black">FEEDBACK STATUS</span></b></a></li>
    
                           
                           </li>
                          
                           
                    </ul>            
                         
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">FARMER DASHBOARD </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">FARMER</a></li>
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
                    <!-- table primary start -->
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Advertisements Info</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                <th scope="col">Ads</th>
                                                <th scope="col">Crop_name</th>
                                                <th scope="col">Crop_quantity</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Supplier_name</th>
                                                    <th scope="col">Supplier_contactno:</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php

                                                    include '../condb.php';
                                                    
                                                    $query = "select * from ads_tb";
                                                    $result = mysqli_query($con,$query) or die(mysqli_error($con));
                                                    
                                                    while ($row=mysqli_fetch_assoc($result)) {
                                                       ?>
                                                       
                                                    
                                                    <tr>
                                                        
                                                    <td><img src="<?php echo $row['ads_image'];?>"></td> 
                                                    <td><?php echo $row['crop_name'];?></td> 
                                                    <td><?php echo $row['crop_quantity'];?></td> 
                                                    <td><?php echo $row['ads_desc'];?></td> 
                                                    <td> <?php 

$sql = "select name from register_tb"; 

$res_user = mysqli_query($con,$sql);
while($row_user=mysqli_fetch_assoc($res_user))
   {
       ?>
       
  <option><?php echo $row_user['name']?></option>
   <?php } ?>   </td>
   <td> <?php 

$sql = "select mobile from register_tb"; 

$res_user = mysqli_query($con,$sql);
while($row_user=mysqli_fetch_assoc($res_user))
   {
       ?>
       
  <option><?php echo $row_user['mobile']?></option>
   <?php } ?>   </td>
                                                    </tr>
                                                        <?php   
                                                    
                                                        }
                                                        ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table primary end -->
                   
                    
                    
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
