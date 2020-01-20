<?php

  $id   = $_POST["id"];
  $name   = $_POST["name"];
  $email	   =$_POST["email"];
  $telephone   =$_POST["telephone"];
  $address    =$_POST["address"];
  $account   = $_POST["account"];
  $password   = $_POST["password"];


if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','sdatabase');
	
	
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}

	
	$ac=mysqli_query($conn,"INSERT INTO user VALUES ('$id', '$name','$email', '$telephone', '$address','$account', '$password') ");
	
	if($ac)
	{
		 echo "successs";
	}
	
	else
	{
		 echo "fail";
	}
}
?>