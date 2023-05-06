<?php

 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
    $course_id=$_POST['id'];
  $course_name=$_POST['course_name'];
  $course_desc=$_POST['desc'];
  $author=$_POST['author'];
  $course_duration=$_POST['course_duration'];
  $course_org_price=$_POST['course_org_price'];
  $course_sell_price=$_POST['course_sell_price'];
  $course_img=$_POST['image'];
  $sql="UPDATE `courses` SET `course_name` = '$course_name', `course_desc` = '$course_desc', `author` = '$author',`course_duration`='$course_duration',`course_org_price`='$course_org_price', `course_sell_price`='$course_sell_price' WHERE `courses`.`course_id` = '$course_id'";
$result=mysqli_query($conn,$sql);
  if($result){
    header("location:courses_handle.php");
  }
}
?>