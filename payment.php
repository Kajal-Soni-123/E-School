<?php
$student_email="";
if(isset($_GET['id'])){
    $course_id=$_GET['id'];
}

include '\xampp\htdocs\sms_project\db.php';
session_start();
if(!isset($_SESSION['loggedin'])){
header("location:login.php");
}
else {
?>
<?php
 $student_id=$_SESSION['user_id'];
 $sql="SELECT * FROM `register` WHERE user_id=$student_id";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 $student_email=$row['email'];
 


$fetch_sql="SELECT * FROM `courses` WHERE course_id='$course_id'";
$fetch_result=mysqli_query($conn,$fetch_sql);
$fetch_row=mysqli_fetch_assoc($fetch_result);
$amount=$fetch_row['course_sell_price'];
$order_id=mt_rand();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Payment</title>
  </head>
  <body>
    <div style="background-color: rgb(179, 175, 175); width:50%" class="container my-5 p-5">
    <h2 class="text-center">Welcome to the Payment Page</h2>
    <form class="p-5" action="checkout.php" method="post">
      <input type="hidden" name="course_id" value="<?php echo $course_id ?>"/>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Order Id</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" name="order_id" value="<?php echo $order_id?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="student_email" value="<?php echo $student_email ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Amount</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="amount" value="<?php echo $amount?>">
    </div>
  </div>
  <div class="d-flex align-items-center justify-content-center mt-5">
<input type="submit" value="Checkout" class="btn btn-primary"/>
<a class="btn btn-secondary text-light px-3 mx-2" href="index.php">Cancel</a>

  </div>

</form>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}?>
