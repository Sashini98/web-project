<?php require_once('conect.php'); ?>

<?php


if(isset($_GET['id']))
{
	$sql1 = "SELECT * FROM user WHERE id =".$_GET['id'];
	$result = mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result);
	
	if($result)
	{
	}
	
	echo "Sucessfull";
	
}

if(isset($_POST['update']))
{
	$sql2 = "UPDATE user SET name = '".$_POST['name']."',email = '".$_POST['email']."',telephone = '".$_POST['telephone']."',address = '".$_POST['address']."' WHERE id ='".$_POST['id']."'";
	$result2 = mysqli_query($connection,$sql2);
	$sql3 = "SELECT * FROM user WHERE id =".$_POST['id'];
	$result3 = mysqli_query($connection,$sql3);
	$row=mysqli_fetch_assoc($result3);
	echo"<script> alert('Updated Sucessfully') </script>";
}

?>

<html>
<head>
	
    <title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="css/edit.css">
	<title></title>
	
	<div class="loginbox">
	<table border=1 padding=10px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Telephone Number</td>
			<td>Address</td>

		</tr>
		<form action='Edit_user2.php' method ='POST'>
			<tr bgcolor=none>
			<?php 
			
			$id=$row['id'];
			$name=$row['name'];
			$email=$row['email'];
			$tel=$row['telephone'];
			$add=$row['address'];
			?>
			
			<td><input type = 'text' name='id' class=text_box required value =<?php echo $id ?> readonly></td>";
			<td><input type = 'text' name='name' required value =<?php echo $name ?>></td>";
			<td><input type = 'text' name='email' required value =<?php echo $email ?>></td>";
			<td><input type = 'text' name='telephone' required value =<?php echo $tel ?>></td>";
			<td><input type = 'text' name='address' required value =<?php echo $add ?>></td>";
			
		</tr>
		<tr>
			<td colspan =5><input type='submit' value="update" name='update' align='center'></td>
			
		</tr>
		</form>
	</table>
	
	</div>
</head>
<body>
	
</body>
</html>


