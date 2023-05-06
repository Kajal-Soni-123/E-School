<?php
$servername="localhost";
$username="root";
$password="";
$database="sms";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("error in establishing connection".mysqli_connect_error());
}
?>