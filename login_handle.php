
<?php
include '\xampp\htdocs\sms_project\db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "yes";
$user_email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$user_id=$_POST['user_id'];
$sql="SELECT * FROM `register` WHERE email='$user_email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
$row=mysqli_fetch_assoc($result);
$user_id=$row['user_id'];
$authority=$row['authority'];
$user_name=$row['name'];
$user_email=$row['email'];

if($num==1){
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['user_id']=$user_id;
    $_SESSION['name']=$user_name;
    $_SESSION['email']=$user_email;
    
    header("location:index.php?loggin=true");  
    exit();
}
else{
  header("location:login.php?loggin=false");
  exit();
}
}
?>