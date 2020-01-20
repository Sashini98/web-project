<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM user";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title>Delete User</title>
	<link rel="stylesheet" type="text/css" href="css/acc.css">
	
	</head>
<body>

<div class="loginbox">
	<table border=1 padding=00px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>ID</td>
			<td>Name</td>
			<td>Account</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['account'] ?></td>
			<?php echo "<td><a href =Delete_user2.php?id='".$row['id']."' > Delte </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
		
</div>
	
</body>
</html>
