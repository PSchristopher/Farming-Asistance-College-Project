<?php
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="farm_db";
$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_errno())
{
echo"failed to connectto mysql". mysqli_connect_error($con);
}
?>