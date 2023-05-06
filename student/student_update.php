<?php
 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
    $student_id=$_POST['id'];
  $student_name=$_POST['name'];
  $student_email=$_POST['email'];
  
  $sql="UPDATE `register` SET `name` = '$student_name', `email` = '$student_email' WHERE user_id='$student_id'";
$result=mysqli_query($conn,$sql);
  if($result){
    header("location:student_profile.php");
  }
}
?>