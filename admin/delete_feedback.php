
<?php
include '../condb.php';

$delete_row=$_GET['delete_id'];
$query=mysqli_query($con,"SELECT * FROM feedback_tb WHERE feed_id ='$delete_row'");

$delete=mysqli_query($con,"DELETE FROM feedback_tb WHERE feed_id= '$delete_row'");
header('location:view_feedback.php');

?>