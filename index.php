<?php
require_once "connection.php";

?>
<style>

input,textarea{width:200px}

input[type=submit]{width:100px}

</style>

<form id="insert_form">

<table width="218" border="0">



  <tr>

    <td width="208"><input type="text" name="name" placeholder="Enter your name"/></td>

  </tr>

  <tr>

    <td><input type="text" name="email" placeholder="Enter your email"/></td>

  </tr>

  <tr>

    <td><input type="text" name="mobile" placeholder="Enter your mobile"/></td>

  </tr>

  <tr>

    <td><textarea name="address" placeholder="Enter your address"></textarea></td>

  </tr>

  <tr>

    <td>

  
  
  <button type="button" class="insert_btn">Save Data</button>
  <div class="msg_form"></div>
  <a href="display.php">Display new data</a>

  </td>

  </tr>

</table>

</form>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/simple.js"></script>

<?php
require_once "disconnect.php";

?>
