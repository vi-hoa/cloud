<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: white; margin: 0px;">

<div class="header">
			<div class="logo"><a href="home.php"><img src="../img/Asset 1.png" width="200px"></a></div>
			
			<div id="formSearch">
				<form>
					<input type="text" name="search" placeholder="  Search">
					<input type="submit" name="">
					<a href="login.php" class="signInsignUp">Sign in</a>
					<a href="register.php" class="signInsignUp">Sign up</a>
				</form>
			</div>
			
		</div>
	<div class="menu">
			<p style="padding-left: 450px; float: left;"></p>
			<a href="home.php" class="home">Home</a>
			<a href="#" class="news">News</a>
			<a href="#" class="pro1">Classic</a>
			<a href="#" class="pro2">Poetry</a>
			<div class="dropdown">
				 <button class="dropbtn">Fiction</button>
				 <div class="dropdown-content">
   				<a href="#">Romance</a>
				<a href="#">Thriller</a>
  				<a href="#">Historical Fiction</a>
  				</div>
			</div>
			<a href="about.html" class="about">About us!</a>
			<a href="contact.html" class="contact">Contact</a>
			</div>
	</div>

<form method="POST">
	<div style="padding-top:50px; height: 570px;">
	<p style="font-size:40px;text-align: center;">Sign Up</p>
	<div style="width:fit-content; margin:auto; align-items: center;">
	
	<!-- <table class="signuptbl">
		<tr>
			<td> User ID</td>
			<td><input type="text" name="user_id" required	> </td>
		</tr>
		<tr>
			<td> UserName</td>
			<td><input type="text" name="username" required	> </td>
		</tr>
		<tr>
			<td> Password</td>
			<td><input type="password" name="password" required	> </td>
		</tr>
		<tr>
			<td> </td>
			<td><input type="submit" name="register" value="Sign Up" class="signupbtn"> </td>
		</tr>
	</table> -->

	<form >
			<input type="text" name="user_id" required placeholder=" User Id"style="width: 350px;height: 45px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 20px;"> <br>
			<input type="text" name="username" required	placeholder=" UserName"style="width: 350px;height: 45px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 20px;"> <br>
			<input type="password" name="password" required placeholder=" Password" style="width: 350px;height: 45px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom:20px;"> <br>
			<input type="submit" name="register" value="Sign Up" class="signupbtn" style="width: 355px; height: 40px; cursor: pointer; margin-bottom: 50px;"> <br>
		
		</form>

	</div>
	</div>
</form>


<?php 
$connect = mysqli_connect('localhost','root','','onlinestore');
// if($connect){
// 	echo "Kết nối thành công";
// }
// else{
// 	echo "Kết nối thất bại";
// }
if(isset($_POST['register'])){
	$user_id = $_POST['user_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "INSERT INTO user VALUES('$user_id','$username','$password')";
	$result = mysqli_query($connect,$sql);
	if($result){
		echo "<script> alert('Account added successfully!') </script>";
	}else{
		echo"Error";
	}
}
?>

<div class="footer">
			<div id="parent">
			<div class="child"><img src="../img/Asset 1.png" width="170px" style="padding-left:200px; 
			padding-bottom: 15px;"></div>
			
			<div class="child" style="padding-left:300px;">
				<p style="font-weight: bold; font-size: 18px;">theStoryKeeper</p>
				<a href="">home</a> <br>
				<a href="">buy</a>
			</div>
			<div class="child"> 
				<p style="font-weight: bold; font-size: 18px;">About Us</p>
				<a href="">news</a> <br>
				<a href="">about</a>
			</div>
			<div class="child">
				<p style="font-weight: bold; font-size:18px;">Contact Us</p>
				<a href="">help</a> <br>
				<a href="">FAQs</a>
			</div>
			<div class="child" >
            <form action="" >
            	
            	<div style="padding-top: 10px;">
            	
          	<input type="text" name="" placeholder="  Email" style="margin-bottom:5px; width:220px; height: 30px; border: none;">
          	<button style="margin-bottom: 10px ;" class="subcribebtn">Subscribe</button> <br>
          	<!-- <p style="margin: 0px; padding:0px;"> Follow us at: </p> <br> -->
          	<a href="https://www.facebook.com"><img src="../img/toppng.com-facebook-icon-white-circle-facebook-logo-1274x1274.png" style="width: 20px; padding-left:5px; padding-top: 10px;"></a>
          	<a href="https://www.instagram.com/"><img src="../img/Instagram-icon-isolated-on-transparent-background-PNG.png" style="width: 20px;padding-left:10px;"></a>
          	<a href="https://www.tiktok.com"><img src="../img/Hand-drawn-Tiktok-icon-isolated-on-transparent-background-PNG.png" style="width: 20px;padding-left:10px;"></a>
          		</div>
            </form>
      
          </div>
			</div>
</body>
</html>