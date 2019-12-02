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
$restname = $_SESSION['restaname'];
$conn = mysqli_connect('localhost','root','','foodshala');
if (isset($_POST['register'])) {
$dname = $_POST['dname'];
$desc = $_POST['desc'];
$choice = $_POST['choice'];
$price = $_POST['price'];
$imagename = time() . '_' . $_FILES['image']['name'];
$target = 'images/' .$imagename;
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
$sql = "INSERT INTO `adder` (`id`, `Dish Name`, `Restaurant`, `Description`, `Price`, `image`, `Choice`) VALUES (NULL, '$dname', '$restname', '$desc', '$price', '$imagename', '$choice')";	
if(mysqli_query($conn,$sql))
{
	echo "<div class='form'>
                   <h3>Added successfully.</h3>
                   <br/>Still more to add  <a href='add items.php'>Click Here</a></div>";
				   header("Refresh: 1.5;menuauth1.php");
 
}
else
{
	echo "<div class='form'>
                   <h3>Failed to add .</h3>
                   <br/>Click here to try  <a href='add items.php'>Click Here</a></div>";
				   header("Refresh: 1.5;add items.php");
				 
 

}
}
else
{

	echo "Failed to upload";
}

}
?>
</html>