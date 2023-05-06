<?php

 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
  $admin_id=$_POST['id'];
  $admin_password=$_POST['password'];
  $hash=password_hash($admin_password  ,PASSWORD_DEFAULT);
  $sql="UPDATE `admin` SET `admin_pass` = '$hash'  WHERE admin_id='$admin_id'";
$result=mysqli_query($conn,$sql);
  if($result){
    header("location:change_admin_password.php?success=true");
  }
}
?>