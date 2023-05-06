<?php
   include '\xampp\htdocs\sms_project\db.php';
   session_start();
   if(!isset($_SESSION['loggedin'])){
    header("location:login.php");
   }
   else{
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
    <!-- As a heading -->
<nav class="navbar navbar-light bg-primary">
    <div class="d-flex">
  <span class="navbar-brand mb-0 h1 text-light">School Management System</span>
  <span class="navbar-brand h3 text-light">Admin Area</span> 
</nav>
<div class="row">
    <!--side bar in the admin panel-->
   <div class="col-md-3">
  <?php
   include '\xampp\htdocs\sms_project\admin\sidebar.php';
  ?>
</div>

<!--dash board content-->
<div class="col-md-9">

<!--second child of div panel-->
<div class="container-fluid mt-5 bg-dark">
    <h2 class="text-center text-light py-2">Course offered</h2>
</div>

<div class="container-fluid">
<table class="table">
  <thead>
  <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Order Status</th>
      <th scope="col">Order Date</th>
      <th scope="col">Amount</th>
     <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
<?php
$student_id=$_SESSION['user_id'];
$student_email=$_SESSION['email'];
$sql="SELECT * FROM `order` WHERE student_email='$student_email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==0){
    echo '<h2 class="text-center text-danger">No order is placed by'.$student_email.'';
}
else{
    while($row=mysqli_fetch_array($result)){
    $order_id=$row['order_id'];
    $course_order_id=$row['course_order_id'];
    $student_email=$row['student_email'];
    $order_status=$row['order_status'];
    $amount=$row['Amount'];
    $course_id=$row['course_id'];
    $order_date=$row['order_date'];
echo'
<tr>
<th scope="row">'.$order_id.'</th>
<td>'.$course_id.'</td>
<td>'.$order_status.'</td>
<td>'.$order_date.'</td>
<td>'.$amount.'</td>
<td><form action="" method="post" class="d-inline"><input type="hidden" value='.$course_order_id.' name="id"/>
<button type="submit" class="btn btn-dark text-light" name="delete">Remove</button></form></td>
</tr>
   ';}
}

    ?>
</tbody>
</tabel>
  
    
 
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['id'])){
  $feedback_id=$_POST['id'];
  $delete_sql="DELETE FROM `order` WHERE course_order_id='$course_order_id'";
  $delete_result=mysqli_query($conn,$delete_sql);
}
}
  ?>
  </div>
</div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
?>