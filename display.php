<?php
require_once "connection.php";
$str = "select * from users";
echo $str;
$res = $conn->query($str) or die($conn->connect_error);
print_r($res);


?>
<div class="conatiner">
	<div class="row">
		<table class="table">
			<tr>
				<th>name</th>
				<th>email</th>
				<th>mobile</th>
				<th>address</th>
				<th>action</th>
			</tr>
			<?php
            while($ans = $res->fetch_assoc()){
            	?>
			<tr>
				<td><?php echo $ans['name'];?></td>
				<td><?php echo $ans['email'];?></td>
				<td><?php echo $ans['mobile'];?></td>
				<td><?php echo $ans['address'];?></td>
				<td><a href="edit.php?ab=<?php echo $ans['id'];?>">edit</a></td>
				<td><a href="delete.php?ab=<?php echo $ans['id'];?>">delete</a></td>
			</tr>
			<?php
		}

			?>
		</table>
		
	</div>
	
</div>