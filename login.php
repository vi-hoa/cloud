<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
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

 <?php
	$connect = mysqli_connect('localhost','root','','onlinestore');
// if($connect){
// 	echo "Kết nối thành công";
// }
// else{
// 	echo "Kết nối thất bại";
// }
?>

<!-- form đăng nhập tài khoản -->
<form action="" method="post">
	<div style="padding-top:50px; height: 570px;">
	<p style="font-size:40px;text-align: center;">Member Login</p>
	<div style="width:fit-content; margin:auto; align-items: center;">	
		<!-- <table cellpadding="10px">
		<tr>
			<td style="font-size:20px">UserName:</td>
			<td><input type="text" name="username" required placeholder="username" style="width: 300px;height: 40px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1);"></td>
		</tr>
		<tr>
			<td style="font-size:20px">Password:</td>
			<td><input type="password" name="password" required placeholder="password" style="width: 300px;height: 40px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1);"></td>
		</tr>
		<tr>
			<td></td>
			<td ><input type="submit" name="login" value="login" class="loginbtn" ></td>
		</tr>
		</table> -->
		<form >
			<input type="text" name="username" required placeholder=" UserName"style="width: 350px;height: 45px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 20px;"> <br>
			<input type="password" name="password" required placeholder=" Password" style="width: 350px;height: 45px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom:20px;"> <br>
			<input type="submit" value="Sign In" name="login" class="loginbtn" style="width: 355px; height: 40px;"> <br>
			<p style="text-align:center; margin:30px; text-decoration: none;"><a href="register.php">Create account</a>  or  <a href="">Reset password!</a></p>
		</form>
	</div> 
	</div>
</form>

<!--Nhận dữ liệu từ form -->
<?php 
if(isset($_POST['login'])){
$username = $_POST['username'];
$password =$_POST['password'];
//Lựa từ bảng user cột username = username nhập từ form và cột password = giá trị password nhập từ form
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
// Thực thi truy vấn từ csdl dùng hàm mysqli_query
$result = mysqli_query($connect,$sql);
$num_rows = mysqli_num_rows($result);
if($num_rows==0){
	echo "Username or password is incorrect";
}
else{
	echo "<script> alert('Login successful!')</script>";
             echo"<script>window.open('home.php','_self')</script>";
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