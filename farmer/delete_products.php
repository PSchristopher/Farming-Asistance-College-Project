<!doctype html>
<?php
include '../condb.php';

$delete_row=$_GET['del_id'];
$query=mysqli_query($con,"SELECT * FROM products_tb WHERE product_id ='$delete_row'");

$delete=mysqli_query($con,"DELETE FROM products_tb WHERE product_id= '$delete_row'");
header('location:view_products.php');


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $avatar_path='profile/'.$_FILES['avatar']['name'];
    $pname = $_REQUEST['pname'];
 
    $pdesc = $_REQUEST['pdesc'];
    $pquantity =  $_REQUEST['pquantity'];

   
    mysqli_query($con,"UPDATE products_tb SET `avatar_path` = '$avatar_path',`pname` = '$pname',`pdesc` = '$pdesc',`pquantity` = '$pquantity' WHERE product_id='$tyre'");
    echo "<script> alert('Details updated');</script>";
    echo "<script>window.location.href='view_products.php';</script>";



}
?>


