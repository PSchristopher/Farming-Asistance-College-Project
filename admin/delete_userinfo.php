<!doctype html>
<?php
include '../condb.php';

$delete_row=$_GET['del_id'];
$query=mysqli_query($con,"SELECT * FROM register_tb WHERE register_id ='$delete_row'");

$delete=mysqli_query($con,"DELETE FROM register_tb WHERE register_id= '$delete_row'");
header('location:view_userinfo.php');


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
     $email = $_REQUEST['email'];
     $mobile = $_REQUEST['mobile'];
    mysqli_query($con,"UPDATE register_tb SET name = '$name',`username` = '$username',`email` = '$email',`mobile` = '$mobile' WHERE register_id='$tyre'");
    echo "<script> alert('Details updated');</script>";
    echo "<script>window.location.href='view_userinfo.php';</script>";



}
?>


