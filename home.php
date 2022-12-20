<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #2c3338; margin: 0px;">

	<div class="wrapper">
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
			<a href="#" class="pro1">Boys</a>
			<a href="#" class="pro2">Girls</a>
			<div class="dropdown">
				 <button class="dropbtn">Discount!</button>
				 <div class="dropdown-content">
   				<a href="#">10%</a>
				<a href="#">20%</a>
  				<a href="#">30% </a>
  				</div>
			</div>
			<a href="about.html" class="about">About us</a>
			<a href="contact.html" class="contact">Contact</a>
			</div>
	</div>

		<div class="banner">
			<div style="height: 550px;">
				<div><div class="bannertext" >Best seller!</div>
				<div style="text-align: center;  font-weight: bold;"><a href="" style="text-decoration: none;color: #D8B384;">Pick one >></a></div>
				<div class="bannerimg" style="padding-left:150px; padding-top: 50px;">
					<span style="padding-left:50px"><img src="https://i.pinimg.com/564x/cc/dd/3d/ccdd3d1110e693281402c648c1d7e1e4.jpg" style="width: 200px; box-shadow: 3px 4px 6px 3px rgba(0, 0, 0, 0.3); "></span>
					<span style="padding-left:50px"><img src="https://i.pinimg.com/564x/a5/80/09/a5800902b3bf9185ee3ec4b1f5f3d54e.jpg" style="width: 200px; box-shadow: 3px 4px 6px 3px rgba(0, 0, 0, 0.3); "></span>
					<span style="padding-left:50px"><img src="https://i.pinimg.com/564x/8a/74/d5/8a74d5cdd8c04b266005dcb713c4b6d4.jpg" style="width: 200px; box-shadow: 3px 4px 6px 3px rgba(0, 0, 0, 0.3); "></span>
					<span style="padding-left:50px"><img src="https://i.pinimg.com/564x/15/eb/a8/15eba88c4c237de3a9d26ee4ae4f190d.jpg" style="width:200px; box-shadow: 3px 4px 6px 3px rgba(0, 0, 0, 0.3);"></span>
					<span style="padding-left:50px"><img src="https://i.pinimg.com/736x/cb/bb/d9/cbbbd9ac072dfd97dde73d3b4e1af227.jpg" style="width: 200px; box-shadow: 3px 4px 6px 3px rgba(0, 0, 0, 0.3);"></span>
				</div>
				</div>
		</div>


			<!-- <table>
			<tr>
				<td style="margin-right: 0px;">
			<p class="lost">Let's get lost in pages!</p>
			<p class="desbanner">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</td>
				<td><div style="padding-left:100px;padding-top: 90px;"><img src="https://i0.wp.com/www.bloggingwithdragons.com/wp-content/uploads/2015/07/missperegrine.jpg?fit=334%2C518&ssl=1" width="180px" style="box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.35);" ></div></td>
				<td><div style="padding-left:50px;padding-top: 90px;"><img src="https://cdn-amz.fadoglobal.io/images/I/91MZxAcAvsL.jpg" width="180px" style="box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.35);" ></div></td>
				<td><div style="padding-left:50px;padding-top: 90px;"><img src="https://images-na.ssl-images-amazon.com/images/I/91GXC09xGBL.jpg" width="180px" style="box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.35);" ></div></td>
			</tr>
			</table> -->
		</div>


		<div class="content">
			<div class="left"> <p style="text-align: center;padding: 200px 0; "></p></div>
			
				<div class="right" style="margin:auto;">
				<!--ảnh sp -->
          	<div style="white-space: nowrap; display: inline-block;">
          		<p style="font-size:30px; display: inline-block;">New Arrival:</p>
          		<a href="#" style="float: right; display: inline-block; padding: 40px; text-decoration: none; color: #5E454B; font-weight:bold;">See more >></a>
          	</div>
			<div class="product">
				<?php 
				$connect = mysqli_connect('localhost','root','','onlinestore');

				if(!$connect){
					echo "Kết nối thất bại";
				}
				$sql="SELECT * FROM product";

				$result = mysqli_query($connect,$sql);

				//Tìm và trả về kết quả dưới dạng 1 mảng và lấy từng dòng dữ liệu

				while($row = mysqli_fetch_array($result)){

					//lấy ra từng dòng dữ liệu truy vấn được và hiển thị
					//$row['product_id'];
					//$row['product_name'];
					//$row['product_img'];
					//$row['product_price'];
					?>
					<div class="card">
					<a href="detail.php?id=<?php echo $row['product_id']; ?>">
					
					<img src="Img/<?php echo $row['product_image']; ?>" style="width: 100%;">
					<p class="booksname"> <?php echo $row['product_name'] ?> </p>
					<p class="price"> $<?php echo $row['product_price']; ?>  </p>
						<!--id=<?php echo $row['product_id'] ?> -->
					</a>
				</div>	
				<?php
				}
				?>



          		</div>
          		<div class="right2"></div>
		</div>
				
		
		
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

			
		</div>
	</div>

</body>
</html>