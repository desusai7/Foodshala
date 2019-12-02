<!DOCTYPE html>
<html>
<title>Add menu item</title>
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
input[name = "register"] {
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
<header>
<h1 style="text-align:center"><b>Food Shala</b></h1>
</header>
<div class="topnav">
<a href="index.php">Home</a>
<a href="menuauth1.php">Menu</a>
<a href="add items.php">Add Items</a>
<a href="vieworders.php">View Orders</a>
<a href="logout.php">Logout</a>
</div>
<div class="login-page">
<div class="form">
<form class="login-form" action="22.php"  method="post" enctype="multipart/form-data" autocomplete="off">
<h3 style="text-align:center"><u>Add an item to menu</u></h3>
Dish Name<input type="text" placeholder=" Enter Dish Name" name="dname" required/>
Description<input type="text" placeholder="Describe your dish" name="desc" required/>
Price<input type="text" placeholder="Enter Price" name="price" required/>
Choose your choice:
<select name="choice">
  <option value="NA">Choose here</option>
  <option value="Non-Veg">Non-Veg</option>
  <option value="Vegetarian">Vegetarian</option>
  </select>
Upload image <input type="file" name="image" accept="image/*" required/>
<input type="submit" value="Add Item" name="register" />
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
</body>
</html> 
