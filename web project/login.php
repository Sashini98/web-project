<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php


session_start();
if(isset($_POST["submit"]))
{
	

  $id   = $_POST["id"];
  $password	   =$_POST["password"];
  $account;
  
      
      $sql = "SELECT * FROM user WHERE id = '$id' and password = '$password'";
	  
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      

      if($count == 1) 
	  {
      
         $_SESSION['id'] = $id;
		 
	  $account=$row['account'];
		 
		 
		 
         if($account=="admin")
		 {
            header("location: Admin.html");
		 }
		 
		 if($account=="supplier")
		 {
            header("location: supplier.html");
		 }
		 
		 if($account=="customer")
		 {
            header("location: customer.html");
		 }
      }
	  else {
        
		 echo '<script language="javascript">';
		 echo 'alert("Your Login ID or Password is invalid")';
		 echo '</script>';

}
	 }

?>


