<!DOCTYPE html>
<html>
<title>Food Shala</title>
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
 .slider-holder
        {
            width: 100%;
            height: 300px;
            background-color: yellow;
           
           
            text-align: center;
            overflow: hidden;
          
        }
       
        .image-holder
        {
            width: 100%;
            background-color: red;
            height: 500px;
            clear: both;
            position: relative;
            display:block;
        }
       
       
        
hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 5px;
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
</head>
<body>
<header>
<h1 style="text-align:center"><b>FoodShala</b></h1>
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
<hr>
<section>
<article>
<div class="slider-holder">
        <span id="slider-image-1"></span>
        <div class="image-holder">
            <img src="duo.jpg" class="slider-image" />
        </div>
    </div>
<hr>
<h2 style="text-align:center">Welcome to FoodShala</h1>
<br>
<br>
<h3 style="text-align:center">Are you drooling around for food? We've got everything you need!</h2>
<br>
<br>
<h4 style="text-align:center"> Click on menu to Browse from the entire range of your favourite restaurants and choose any of your own choice from the entire range of dishes!</h4>
<br>
<br>

</article>
</section>
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
