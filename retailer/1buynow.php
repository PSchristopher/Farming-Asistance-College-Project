

 <!doctype html>
<?php
session_start();

include '../condb.php';
$user=$_SESSION['uname'];
$id=$_SESSION['lid'];
$tyre = $_GET['edit_id'];
$tyre_query = mysqli_query($con,"select * from products_tb where product_id='$tyre'");
$tyre_data = mysqli_fetch_assoc($tyre_query);
$pname = $tyre_data['pname'];
$name = $tyre_data['name'];

// $lid = $tyre_data['logid'];
if (isset($_POST["submit"]))
{
    
    $quantity = $_POST['quantity'];

    
    mysqli_query($con,"INSERT INTO `buy_product` (`b_id`,`product_id`,`pname`,`name`,`quantity`,`logid`,`username`) 
    VALUES(NULL,'$tyre','$pname','$name','$quantity','$id','$user')");
    echo "<script> alert('added');</script>";
}




// if($_SERVER["REQUEST_METHOD"]=="POST")
// {

//     $name = $_REQUEST['pname'];
//     $address = $_REQUEST['pprice'];
   
  
//     $username = $_REQUEST['username'];
    
//     mysqli_query($con,"UPDATE product_tb SET `pname` = '$name',`pprice` = '$address' WHERE product_id='$tyre'");
//     echo "<script> alert('Details updated');</script>";
//     echo "<script>window.location.href='customer_profile.php';</script>";



// }
?>

<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>CONFIRM PRODUCT </h2>

<div class="container">
  <form action="" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname"> Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="pname" name="pname"  value="<?php echo $tyre_data['pname'];?>">  
      </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Price</label>
    </div>
    <div class="col-75">
      <input type="text" id="pprice" name="pprice" value="<?php echo $tyre_data['pprice'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Quantity</label>
    </div>
    <div class="col-75">
      <input type="text" id="quantity" name="quantity">
    </div>
  </div>

  

  
  
  
  
  
  <br>
  <div class="row">
    <input type="submit" name="submit" value="submit">
  </div>
  </form>
</div>

</body>
</html>
