<?php
 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
    $student_id=$_POST['id'];
  $student_name=$_POST['name'];
  $student_email=$_POST['email'];
  $student_pass=$_POST['paas'];
  $hash=password_hash($student_pass,PASSWORD_DEFAULT);
  
  $sql="UPDATE `register` SET `name` = '$student_name', `email` = '$student_email', `password` = '$hash' WHERE user_id='$student_id'";
$result=mysqli_query($conn,$sql);
  if($result){
    header("location:student.php");
  }
}
?>