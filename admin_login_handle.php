<?php
include '\xampp\htdocs\sms_project\db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$admin_email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$sql="SELECT * FROM `admin` WHERE admin_email='$admin_email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$admin_id=$row['admin_id'];
$admin_name=$row['admin_name'];

if($num==1){
    session_start();
    $_SESSION['admin_loggedin']=true;
    $_SESSION['admin_id']=$admin_id;
    $_SESSION['admin_name']=$admin_name;
    
    header("location:admin/admin_dashboard.php?loggin=true");  
    exit();
}
else{
  header("location:login.php?loggin=false");
  exit();
}
}
?>