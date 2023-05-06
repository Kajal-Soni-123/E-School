<?php

 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
    $lesson_id=$_POST['id'];
  $lesson_name=$_POST['lesson_name'];
  $lesson_desc=$_POST['lesson_desc'];
  $course_name=$_POST['course_name'];
  $sql="UPDATE `lesson` SET `lesson_name` = '$lesson_name', `lesson_desc` = '$lesson_desc', `course_name` = '$course_name' WHERE lesson_id='$lesson_id'";
$result=mysqli_query($conn,$sql);
  if($result){
    header("location:lesson.php");
  }
}
?>