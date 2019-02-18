<?php
require_once "connection.php";
//print_r($_POST);
if(empty($_POST['name'])){
	echo "invalid name";
}
elseif(empty($_POST['email'])){
	echo "invalid email";
}
elseif(empty($_POST['mobile'])){
	echo "invalid mobile";
}
elseif(empty($_POST['address'])){
	echo "invalid address";
}
else{
	$id=$_POST['id'];
	$n=$_POST['name'];
	$e = $_POST['email'];
	$m = $_POST['mobile'];
	$a =$_POST['address'];

	$str = "update users set name='$n',email='$e',mobile='$m',address='$a' where id ='$id'";
	echo $str;
	$res = $conn->query($str) or die($conn->connect_error);
	print_r($res);
	echo "update done";

}
?>