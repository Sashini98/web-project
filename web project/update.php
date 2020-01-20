<?php

require_once('conect.php');
    if(isset($_POST['update']))
    {
        echo $_REQUEST['name'];
        $sql2 = "UPDATE user SET name = '".$_POST['name']."',email = '".$_POST['email']."',telephone = '".$_POST['telephone']."',address = '".$_POST['address']."' WHERE id ='".$_POST['id']."'";
        $result2 = mysqli_query($connection,$sql2);
        // $sql3 = "SELECT * FROM user WHERE id =".$_POST['id'];
        // $result3 = mysqli_query($connection,$sql3);
        // $row=mysqli_fetch_assoc($result3);
        //echo"<script> alert('Updated Sucessfully') </script>";
    }




?>