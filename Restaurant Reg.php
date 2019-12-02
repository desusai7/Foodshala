<!DOCTYPE html>
<html>
<title>Restaurant Registration</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
header {
  background-color: #333;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
  height:125px;
}
.topnav {
  overflow: hidden;
  background-color: #666;
}

.topnav a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 34px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 0px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #ddd;
  color:black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
.login-page {
  width: 760px;
  padding: 15% 0 0;
  margin: auto;
  height:1100px;
}
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
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
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

footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

</style>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['restname'])){
$restname = stripslashes($_REQUEST['restname']);
$restname = mysqli_real_escape_string($con,$restname);
$ownname = stripslashes($_REQUEST['ownname']);
$ownname = mysqli_real_escape_string($con,$ownname);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con,$email);
$phonenumber = $_REQUEST['phonenumber'];
$query = "INSERT into `restregister` (`restname`,`ownname`, `password`, `email`, `phonenumber`) VALUES ('$restname','$ownname', '".md5($password)."','$email', '$phonenumber')";
$result = mysqli_query($con,$query);
if($result){
echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href=' Restaurant login.php'>Login</a></div>";
}
}else{
?>
<header>
<h1 style="text-align:center"><b>Food Shala</b></h1>
</header>
<div class="topnav">
<a href="index.php">Home</a>
<a href="menu.php">Menu</a>
  <div class="dropdown">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Customer login.php">Customer</a>
      <a href="Restaurant login.php">Restaurant</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Register 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a  class="active" href="Customer Reg.php">Customer</a>
      <a href="Restaurant Reg.php">Restaurant</a>
    </div>
  </div>
</div>
<div class="login-page">
<div class="form">
<form class="login-form">
<h3 style="text-align:center"><u>Restaurant Registration</u></h3>
Restaurant Name<input type="text" placeholder=" Enter Restaurant Name" name="restname" required/>
Owner Name<input type="text" placeholder=" Enter Owner Name" name="ownname" required/>
Password<input type="password" placeholder=" Set password" name="password" required/>
Enter your Password again<input type="password" placeholder=" Set password"/>
Opening time<input type="text" placeholder=" Enter Opening Time"/>
Closing time<input type="text" placeholder=" Enter Closing Time"/>
Address Details<input type="text" placeholder=" Enter your Home Address"/>
Email Address<input type="text" placeholder=" Enter your Mail address" name="email"/>
Phone Number<input type="text" placeholder=" Enter your Contact Number" name="phonenumber"/>
<button>Register</button>
<p class="message">Already registered? <a href="Customer login.php">Login Here</a></p>
</form>
</div>
</div>
<footer>
<div class="copyright">
<p>&copy 2019 - Organisation</p>
</div>
<div class="social" style="text-align:center" >
<!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
</div>
</footer>
<?php } ?>
</body>
</html> 
