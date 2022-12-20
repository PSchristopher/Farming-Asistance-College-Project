<?php
	session_start();
	include "../condb.php";



   // $product_id = $_GET['product_id'];
   if (isset($_POST["submit"]))
    {
        $regid = $_SESSION['id'];
        $name = $_POST['name'];
       
        $mobile = $_POST['mobile'];
        
    

        $sql = "INSERT INTO transaction_tb (`tid`,`regid`, `product_id`, `name`, `mobile`)
                VALUES (NULL,'$regid', '$product_id', '$name', '$mobile')";
        $result = mysqli_query($con, $sql);
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            header('Location: Login/success.php');
        }
        else {
            echo $result->mysqli_error();
            //$_SESSION['message'] = "Sorry!<br />Order was not placed";
            //header('Location: Login/error.php');
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>AgroCulture: Transaction</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="Blog/commentBox.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
</head>
<body>

  

    <section id="main" class="wrapper" >
        <div class="container">
        <center>
                <h2>Transaction Details</h2>
        </center>
        <section id="two" class="wrapper style2 align-center">
        <div class="container">
            <center>
                <form method="post" action="view_products.php?product_id=<?= $product_id; ?>" style="border: 1px solid black; padding: 15px;">
                    <center>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                        </div>
                        
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                        </div>

                      
                    </div>

                    <br />
                    <p>
                    <button type="submit" name ="submit" value="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>

                    </p>
                </center>
            </form>
        </fieldset>
