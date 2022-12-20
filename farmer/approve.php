<?php 
include "../condb.php";



$dis = $_GET['edit_id'];


$update_status=mysqli_query($con,"UPDATE products_tb SET status='1' WHERE product_id='$dis'");

header('location:view_products.php');



?>