<?php
include("auth.php");
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Menu</title>
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

.product-list-vertical{
    
list-style:none;
   
margin: 0 auto;
    
max-width: 700px;
    
padding: 10px;

}


.product-list-vertical li{
    
box-sizing:border-box;
    
overflow: hidden;

    
/*text-align:left;*/
    
font:normal 12px sans-serif;

    
background-color:#ffffff;
    
border:1px solid #dbe3e7;
    
border-radius: 3px;
    
box-shadow: 1px 3px 1px rgba(0, 0, 0, 0.08);

    
max-width:700px;
    
margin-bottom: 25px;
    
padding: 25px;

}

/* Product image */


.product-list-vertical .product-photo{
    
float:left;
    
display: block;

    
text-align: center;   
box-shadow : 0 0 20px 8px #f3f3f3 inset;

    
width: 150px;
    
height: 100px;
    
margin-right: 25px;
    
padding: 20px 0;
    
box-sizing: border-box;

}


.product-list-vertical .product-details{
    
max-width: 450px;
    
float: right;

}

/* Product title */


.product-list-vertical .product-details h2{
    
display: block;
    
margin:0;
    
font-size: 18px;
    
white-space: nowrap;
    
overflow: hidden;
    
text-overflow:ellipsis;

}


.product-list-vertical .product-details h2 a{
    
color: #2b2b2b;
    
text-decoration: none;

}





/* Product rating */


.product-list-vertical .product-details .product-rating div{
    
display: inline-block;
    
width: 80px;
    
margin-top: 10px;

}


.product-list-vertical .product-details .product-rating .product-stars{
    
display: inline-block;

    
color: #f09911;
    
font-size: 14px;
    
overflow: hidden;
    
white-space: nowrap;

    
margin: 0 5px -3px 0;

}


.product-list-vertical .product-details .product-rating .product-stars i{

margin-right: 2px;

}


.product-list-vertical .product-details .product-rating span a{
    
color: #808080;
    
text-decoration: none;

}


/* Product description */


.product-list-vertical .product-details .product-description{
    
color: #5d5d5d;
    
font-size: 14px;
    
line-height: 20px;
    
white-space: normal;

    
margin: 20px 0;

}


/* Product button and price */


.product-list-vertical .product-details input{
    
border-radius: 2px;
    
background-color:  #87bae1;
    
box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12);
    
border: 0;
    
color: #ffffff;
    
font-weight: bold;
    
font-size: 13px;
    
cursor: pointer;

    
width: 95px;
    
height: 32px;

}


.product-list-vertical .product-details .product-price{
    

    
color:  #4e4e4e;
    
font-weight: bold;
    
font-size: 20px;

    
padding-top: 6px;
    
margin: 0;

}


/* Making the product list responsive */


@media (max-width: 600px){

    
.product-list-vertical li{
        
max-width:265px;
        
margin-left: auto;
        
margin-right: auto;
    
}

    
.product-list-vertical .product-photo{
        
float:none;
        
margin: 0 0 25px 0;
    
}

 
.product-list-vertical .product-details{
        
float: none;
    
}

    
.product-list-vertical .product-details .product-description{
        
margin-top: 10px;
    
}


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
<h1 style="text-align:center"><b>FoodShala</b></h1>
</header>
<div class="topnav">
<a href="indexauth.php">Home</a>
<a href="menuauth.php">Menu</a>
<a href="logout.php">Logout</a>
</div>

<article>
<?php
$username = "root";
$password = "";
$database = "foodshala";
$mysqli = new mysqli("localhost",$username,$password,$database);
$query = "select * from adder";
if( $result = $mysqli->query($query)) {
while($row = $result->fetch_assoc()) {
$field1name = $row["Dish Name"];
$field2name = $row["Restaurant"];
$field3name = $row["Description"];
$field4name = $row["Price"];
$field12name = $row["Choice"];
$field13name = $row["image"];
?>
<form method="post" action="get-pass.php">
<ul class="product-list-vertical">

        
<li>

            
<a href="#" class="product-photo">
<input type="text" name="107" value="images/<?php echo $field13name; ?>" style="border:none;font-weight:bold;font-size:20px;display:none;">
                
<img src="images/<?php echo $field13name; ?>" height="100" />
            
</a>

            
<div class="product-details">
                                
<h2><a href="#" ><input type="text" name="101" value="<?php echo $field1name; ?>" style="border:none;font-weight:bold;font-size:20px;display:none;"></a><b><?php echo $field1name; ?></h2>

                
<div class="product-rating">
                    
<div>
                        
<span class="product-stars" >
                            
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
                        
</span>
                    
</div>

                    
</div>


                
<p class="product-make"><b><input type="text" name="102" value="<?php echo $field2name; ?>" style="border:none;font-weight:bold;font-size:20px; display:none;"><?php echo $field2name; ?> :</b><input type="text" name="103" value="<?php echo $field3name; ?>" style="border:none;font-weight:bold;font-size:20px; display:none;"><?php echo $field3name; ?></p>
<p  class="product-cost"><b>Price: </b><input type="text" name="104" value="<?php echo $field4name; ?>" style="border:none;font-weight:bold;font-size:20px; display:none;"><?php echo $field4name; ?></p>
<br>
<p  class="product-type"><b>Food Type: </b><?php echo $field12name; ?></p>
<input type="submit" name="submit" value="Order Now!"/>              


            
</div>

        
</li>



        


    
</ul>
</form>

<?php
}$result->free();
}
?>
</article>
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
