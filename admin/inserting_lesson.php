<?php
 include '\xampp\htdocs\sms_project\db.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
  $lesson_name=$_POST['lesson_name'];
  $lesson_desc=$_POST['lesson_desc'];
  $course_name=$_POST['course_name'];
  $sql_fetch="SELECT * FROM `courses` WHERE course_name='$course_name'";
  $fetch_result=mysqli_query($conn, $sql_fetch);
  $row=mysqli_fetch_assoc($fetch_result);
  $course_id=$row['course_id'];
  $sql='INSERT INTO `lesson` (`lesson_name`, `lesson_desc`, `course_name`, `course_id`, `time_stamp`) VALUES ("'.$lesson_name.'", "'.$lesson_desc.'", "'.$course_name.'", "'.$course_id.'", current_timestamp())';
  $result=mysqli_query($conn,$sql);
  if($result){
    header("location:lesson.php");
  }
}
?>