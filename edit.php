<?php
require_once "connection.php";
$uid=$_GET['ab'];
$str = "select * from users where id='$uid'";
echo $str;
$res = $conn->query($str) or die($conn->connect_error);
print_r($res);
$ans=$res->fetch_assoc();

?>
<style>

input,textarea{width:200px}

input[type=submit]{width:100px}

</style>

<form method="post" action="update-action.php">

<table width="218" border="0">



  <tr>

    <td width="208"><input type="text"  value="<?php echo $ans['name'];?>" name="name" placeholder="Enter your name"/></td>

  </tr>

  <tr>

    <td><input type="text" name="email" value="<?php echo $ans['email'];?>" placeholder="Enter your email"/></td>

  </tr>

  <tr>

    <td><input type="text" name="mobile" value="<?php echo $ans['mobile'];?>" placeholder="Enter your mobile"/></td>

  </tr>

  <tr>

    <td><input type="text" name="address" value="<?php echo $ans['address'];?>" placeholder="Enter your address"/></td>
    
  </tr>
    <tr>

    <td><input type="text" name="id" value="<?php echo $ans['id'];?>" /></td>
    
  </tr>

  <tr>

    <td>

  <input type="submit" name="update" value="Update Data"/>

  

  </td>

  </tr>

</table>

</form>
<?php
require_once "disconnect.php";

?>