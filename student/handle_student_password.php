<?php

 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
  $atudent_id=$_POST['id'];
  $student_password=$_POST['password'];
  $hash=password_hash($student_password  ,PASSWORD_DEFAULT);
  $sql="UPDATE `register` SET `password` = '$hash'  WHERE user_id='$student_id'";
$result=mysqli_query($conn,$sql);
  if($result){
    header("location:student_change_password.php?success=true");
  }
}
?>