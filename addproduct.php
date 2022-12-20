<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add_product</title>
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

	
	<form method="POST" enctype="multipart/form-data">
		<div style="padding-top:50px; height:570px;">
			<p style="font-size:40px; padding-left:500px ;">Add products</p>
			<div style="width: 60%; margin-left: 600px;">
		<table>
			<tr>
				<td style="text-align:right; padding-right: 20px;">Product ID: </td>
				<td><input type="text" name="product_id" required style="width: 320px;height: 35px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 10px;"></td>
			</tr>
			<tr>
				<td style="text-align:right; padding-right: 20px;">Product Name:</td>
				<td><input type="text" name="product_name" required style="width: 320px;height: 35px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 10px;"></td>
			</tr>
			<tr>
				<td style="text-align:right; padding-right: 20px;">Author:</td>
				<td><input type="text" name="author" required style="width: 320px;height: 35px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 10px;"></td>
			</tr>
			<tr>
				<td style="text-align:right; padding-right: 20px;">Price: </td>
				<td><input type="text" name="product_price" required style="width: 320px;height: 35px; border-color: #5E454B; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); margin-bottom: 10px;"></td>
			</tr>
			<tr>
				<td style="text-align:right; padding-right: 20px;">Product Img: </td>
				<td><input type="file" name="product_img" class="file" required ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="add_product" value="Add" class="addtocart" style="margin-top: 20px; margin-bottom: 20px;" ></td>
			</tr>
		</table>
		</div>
	</div>
	</form>
	<?php
	$connect = mysqli_connect('localhost','root','','onlinestore');
	if(isset($_POST['add_product'])){
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$author = $_POST['author'];
		$product_price = $_POST['product_price'];
		
		//lâý ảnh từ máy tính
		$product_img = $_FILES['product_img']['name'];
		//di chuyen anh tu thu muc bat ky sang thu muc tmp_name cua htdocs
		$product_img_tmp = $_FILES['product_img']['tmp_name'];
		//Dua anh tu thu muc tmp sang thu muc can luu
		move_uploaded_file($product_img_tmp, "../img/$product_img");

		//them sp vao co so du lieu
		$sql = "INSERT INTO product VALUES('$product_id','$product_name','author','$product_img','$product_price')";
		$result = mysqli_query($connect,$sql);
		if($result){
			echo"<script>alert('Added product successful!')</script>";
			echo"<script> window.open('home.php','_self')</script>";
		}
		else {
			echo"<script>alert('Error!')</script>";
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
