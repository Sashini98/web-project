
<?php
require_once('conect.php');
if(isset($_POST['update']))
{
	$sql2 = "UPDATE user SET name = '".$_POST['name']."',email = '".$_POST['email']."',telephone = '".$_POST['telephone']."',address = '".$_POST['address']."' WHERE id ='".$_POST['id']."'";
	$result2 = mysqli_query($connection,$sql2);
	// $sql3 = "SELECT * FROM user WHERE id =".$_POST['id'];
	// $result3 = mysqli_query($connection,$sql3);
	// $row=mysqli_fetch_assoc($result3);
	echo"<script> alert('Updated Sucessfully') </script>";
}
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
?>




<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<body>
    <div class="loginbox">
        <table id="edituser">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone No</th>
                <th>Address</th>
            </tr>
            <form action="Edit_user2.php" method="POST">
                
                <?php
                    $sql1 = "SELECT * FROM user WHERE id =".$_GET['id'];
                    $result = $conn-> query($sql1);
                    if($result-> num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo '<tr>
                                    <td>
                                        <input type="text" name="id" class=text_box required value='.$row['id'].'disabled>
                                    </td>
                                    <td>
                                        <input type="text" name="name" required value='.$row['name'].'>
                                    </td>
                                    <td>
                                        <input type="text" name="email" required value='.$row['email'].'></td>
                                    </td>
                                    <td>
                                        <input type="text" name="telephone" required value='.$row['telephone'].'></td>
                                    </td>
                                    <td>
                                        <input type="text" name="address" required value='.$row['address'].'></td>
                                    </td>
                                </tr>';
                        }
                    }
                ?>
                <tr>
                    <td colspan=5><input type="submit" value="update" name="update"></td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>