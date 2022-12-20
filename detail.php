<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product Detail</title>
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
	
	<!-- Detail -->
	<div style="width: 60%; margin:auto;">
		<div style="height:580px;">
			<div style=" padding-top:80px; height: fit-content;">

				<?php 
				$connect = mysqli_connect('localhost','root','','onlinestore');

				if(!$connect){
					echo "Kết nối thất bại";
				}
				$id = $_GET['id'];
				$sql="SELECT * FROM product WHERE product_id = '$id'";

				$result = mysqli_query($connect,$sql);

				//Tìm và trả về kết quả dưới dạng 1 mảng và lấy từng dòng dữ liệu

				while($row = mysqli_fetch_array($result)){

					//lấy ra từng dòng dữ liệu truy vấn được và hiển thị
					//$row['product_id'];
					//$row['product_name'];
					//$row['product_img'];
					//$row['product_price'];
					?>
				<div style="float: left	;"><img src="Img/<?php echo $row['product_image']; ?>" style="width: 300px;"></div>
				<div style="display: inline-block; padding-left: 70px;  width: 60%;">
					<p style="font-family: Arial; font-weight:bold; font-size: 50px; height: 100px;"><?php echo $row['product_name']; ?></p>
					<p style="font-size: 18px;">by  <span style="font-style:italic;"><?php echo $row['author']; ?></span></p>
					<p style="font-size:18px;">Publisher: | Status: In stock</p>
					<p style="padding-bottom: 15px; font-size: 30px; ">$<?php echo $row['product_price']; ?></p>
					<a href="cart.php?id=<?php echo $row['product_id']; ?>">
					<!-- <input type="submit" name="add_cart" value="Add" class="addtocart" style="margin-top: 20px; margin-bottom: 20px;" > -->
					<a href=""class="buynow" style="cursor:pointer; text-decoration: none;">Buy now</a>
				</div>
			</div>
		</div>
		<div >
			<p style="font-size:30px; ">Overview</p>
			<p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quam rerum, perferendis architecto totam eveniet vel soluta incidunt
				 dolorum suscipit alias eius magnam vitae deserunt voluptate labore sint odio autem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt necessitatibus error provident aperiam? Beatae assumenda animi, iure voluptates a 
				 necessitatibus, reiciendis, eum iusto repudiandae deleniti officiis nam dignissimos provident consequuntur.</p>
			 <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quam rerum, perferendis architecto totam eveniet vel soluta incidunt
			 dolorum suscipit alias eius magnam vitae deserunt voluptate labore sint odio autem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt necessitatibus error provident aperiam? Beatae assumenda animi, iure voluptates a 
			 necessitatibus, reiciendis, eum iusto repudiandae deleniti officiis nam dignissimos provident consequuntur.</p>

			<!-- <p style="font-size: 20px;">Ketterdam: a bustling hub of international trade where anything can be had for the right price—and no one knows that better than criminal prodigy Kaz Brekker. Kaz is offered a chance at a deadly heist that could make him rich beyond his wildest dreams. But he can’t pull it off alone. . . .</p>
			<p style="font-style:italic; font-size: 20px;"> A convict with a thirst for revenge</p>
			<p style="font-style:italic;font-size: 20px;"> A sharpshooter who can’t walk away from a wager</p>
			<p style="font-style:italic;font-size: 20px;"> A runaway with a privileged past</p>
			<p style="font-style:italic;font-size: 20px;"> A spy known as the Wraith</p>
			<p style="font-style:italic;font-size: 20px;"> A Heartrender using her magic to survive the slums</p>
			<p style="font-style:italic;font-size: 20px;"> A thief with a gift for unlikely escapes</p>
			<p style="font-size: 20px;">Kaz’s crew is the only thing that might stand between the world and destruction—if they don’t kill each other first.</p> -->
		</div>
	</div>


	<?php
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



			<?php
if (isset($_GET["add_cart"])) {

$product_id = $_GET['add_cart'];
//Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];

//Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa? Nếu sản phẩm đã có
//rồi thì hiển thị thông báo

$sql="select * from cart where product_id = $product_id AND

user_id='$user_id'";

$result = mysqli_query($connect, $sql);
$check_product = mysqli_num_rows($result);
if ($check_product > 0) {
echo "<script>alert('Products already in the cart')</script>";
echo "<script>window.open('home.php','_self')</script>";
}
else {

$sql = " insert into cart values (', $product_id, '$user_id',1,) ";
$result = mysqli_query($connect, $sql);
if ($result) {
echo "<script>alert('Product added to the cart

successfully!')</script>";

echo "<script>window.open('cart.php','_self')</script>";
}
else {
echo "<script>alert('Error')</script>";
echo "<script>window.open('home.php','_self')</script>";
}
}
}
else {
echo "<script>alert('You need to be logged in to perform this action')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
}

?>
</body>
</html>