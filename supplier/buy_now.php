<?php
if (isset($_POST["submit"]))
{
    echo'<script>alert("SUCCESS");window.location.href="view_products.php"</script>';}
?>
<form action="" method="POST">
 
        <b style="color:red;">Confirm Quantity : </b><input type="text" name="" value="">
        
           <!-- Display the payment button. --> 
           <input type="submit"name ="submit" value="submit" border="0" 
           src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
            alt="Buy Now"> <img alt="" border="0" width="1" height="1" 
            src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">

 </form>
 