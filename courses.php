<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include '\xampp\htdocs\sms_project\header.php';
    include '\xampp\htdocs\sms_project\db.php';
    ?>

    <!--All available courses-->
    <section class="my-5">
<div>
  <h1 class="text-center">All courses</h1>
</div>
  <div class="container">
  <div class="row">
    <!--first column-->

    <?php
    $sql="SELECT * FROM `courses`";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      $course_name=$row['course_name'];
      $course_duration=$row['course_duration'];
      $course_sell_price=$row['course_sell_price'];
      $course_image=$row['course_image'];
      $course_id=$row['course_id'];
    echo'
    <div class="col-lg-3 my-2">
    <div class="card mx-2" style="width: 15rem;">
  <img height="20%" width="20%"src="sms_image/'.$course_image.'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$course_name.'</h5>
    <p class="card-text">
     <b> Duration:</b> '.$course_duration.'hours<br>
    <b>Price:</b>'.$course_sell_price.'/-Rs</p> 
    <a href="course_detail.php?id='.$course_id.'" class="btn btn-primary">View Detail</a>
    <a href="payment.php?id='.$course_id.'" class="btn btn-secondary">Buy Now</a>
  </div>
</div> 
</div>';
    }
?>




</div>
</div>
</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>