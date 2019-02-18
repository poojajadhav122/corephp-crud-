<?php
require_once "connection.php";
$uid=$_GET['ab'];
$str = "delete from users where id='$uid'";
echo $str;
$res =$conn->query($str) or die($conn->connect_error);
print_r($res);
echo "data is delete";

?>