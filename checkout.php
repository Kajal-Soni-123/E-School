<?php
 include '\xampp\htdocs\sms_project\db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$order_id=$_POST['order_id'];
$course_id=$_POST['course_id'];
$student_email=$_POST['student_email'];
$amount=$_POST['amount'];
$payment_status="Pending";
$sql="INSERT INTO `order` (`order_id`, `course_id`, `Amount`, `student_email`, `order_status`, `order_date`) VALUES ('$order_id', '$course_id', '$amount', '$student_email', '$payment_status', current_timestamp())";
$result=mysqli_query($conn,$sql);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paymet</title>
  </head>
  <body>
    <?php
   
    include '\xampp\htdocs\sms_project\header.php';
    ?>
    <div class=" container my-5">
        <h2 class="text-center mb-3">Make your Payment</h2>
<img width="100%" src="sms_image\payment.png" class="border border-dark" alt="..."/>
</div>
<div class="container my-3 d-flex align-items-center justify-content-center">
  <button type="submit" class="btn btn-primary text-light" name="pay">Pay Offline</button>
<a href="index.php" class="btn btn-secondary mx-2">Close</a>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>