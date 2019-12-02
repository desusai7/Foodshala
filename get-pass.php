<html>
<style>
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 760px;
  margin: 0 auto 100px;
  padding: 45px;
  
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input,select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
body{
  background: #76b852;  fallback for old browsers 
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  
}
</style>
<?php
session_start();
require('db.php');
$username = stripslashes($_SESSION['username']);
$username = mysqli_real_escape_string($con,$username);
$dishname = stripslashes($_POST["101"]);
$dishname = mysqli_real_escape_string($con,$dishname);
$restaurant = stripslashes($_POST["102"]);
$restaurant = mysqli_real_escape_string($con,$restaurant);
$description = stripslashes($_POST["103"]);
$description = mysqli_real_escape_string($con,$description);
$price = stripslashes($_POST["104"]);
$price = mysqli_real_escape_string($con,$price);
$path = $_POST["107"];


$query = "INSERT INTO `ordernow` (`dishname`, `restaurant`, `description`, `price`, `username`,`image`) VALUES ('$dishname', '$restaurant', '$description', '$price', '$username','$path')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
                   <h3>  Ordered successfully.</h3>
                   <br/><b>Redirecting to Menu Page</b></a></div>";
				   header("Refresh: 0.4;menuauth.php");
        }

    else{
		echo "<div class='form'>
                   <h3>Failed to order </h3>
                   <br/>Click here to <a href='menuauth.php'>Order Again</a></div>";
	}

?>
</html>




