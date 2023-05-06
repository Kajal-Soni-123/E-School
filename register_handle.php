<?php
include '\xampp\htdocs\sms_project\db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $cpassword=$_POST['cpass'];
    $sql="SELECT * FROM `register` WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
    if($num>0){
        $showError="This email already exist please try with some other email";
        header("location:index.php?success=false & error='$showError' ");
        exit();
    }
    if($password!=$cpassword){
        $showError="the pasword do not matches please try again";
        header("location:index.php?success=false & error='$showError' ");
        exit();
    }
    if($num==0 && $password==$cpassword){
        $insert="INSERT INTO `register` (`name`, `email`, `password`, `time`) VALUES ('$name', '$email','$hash', current_timestamp())";
        $result=mysqli_query($conn,$insert);
        if($result){
            header("location:index.php?success=true");
        }
    }
}
?>
