<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

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
echo "<script>window.open('index.php','_self')</script>";
}
else {

$sql = " insert into cart values (', $product_id, '$user_id',1,) ";
$result = mysqli_query($connect, $sql);
if ($result) {
echo "<script>alert('Product added to the cart

successfully!')</script>";

echo "<script>window.open('mycart.php','_self')</script>";
}
else {
echo "<script>alert('Error')</script>";
echo "<script>window.open('index.php','_self')</script>";
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