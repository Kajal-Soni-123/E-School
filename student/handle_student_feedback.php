<?php
include '\xampp\htdocs\sms_project\db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $student_id=$_POST['id'];
    $student_feedback=$_post['feedback'];
    $sql="INSERT INTO `student_feedback` (`feedback_desc`, `student_id`, `time_stamp`) VALUES ('$student_feedback','$student_id', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:student_feedback.php?success=true");
    }
}
?>