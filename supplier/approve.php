<?php 
include "../condb.php";



$dis = $_GET['edit_id'];


$update_status=mysqli_query($con,"UPDATE register_tb SET status='1' WHERE regid='$dis'");

header('location:view_students.php');



?>