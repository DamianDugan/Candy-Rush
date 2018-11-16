<?php
include_once "connect_db.php";
include_once "config.php";
include_once "product_admin.php";
session_start();

if ($_SESSION["is_admin"] == 1 ) {

	$product = new ProductAdmin();
	$array = $product->displayProduct($_SESSION["user_id"], "username", "email", "admin");
	//echo ($array["name"]);
	$username = $array["username"];
	$email = $array["email"];
	$admin  = $array["admin"];
	if ($admin == 1) {
		$is_admin = "Administrator";
	} else {
		$is_admin = "Regular user";
	}

} else {
	header("Location: index.php");
	exit;
}


?>

<!DOCTYPE html>
<html>
	<?php echo $username ;?><br>
	<?php echo $email ;?> <br>
	<?php echo $is_admin ;?><br>
</html>