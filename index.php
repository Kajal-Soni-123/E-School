<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>School Management System</title>
  </head>
  <body>
    <?php
  include '\xampp\htdocs\sms_project\header.php';
  include '\xampp\htdocs\sms_project\db.php';
    ?>

    <!--displaying alerts-->
    <?php
    if(isset($_GET['success'])&& $_GET['success']=="true"){
     echo'
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!</strong> You have been registered successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    if(isset($_GET['success'])&& $_GET['success']=="false"){
      $error=$_GET['error'];
      echo'
      <div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Sorry!</strong>'.$error.'.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
    }
    ?>
    <!--body first child-->
    <div class="d-flex shadow" style="height:50% ;background:linear-gradient(45deg , grey, transparent);">
    <div class="container-fluid my-5">
      <div class="row">
        <div class="col-md-8">
         <h1 style="font-weight:bold" class="display-3">School Management System</h3> 
         <p>this is one of teh best school of india in this school we will provide the best education
          in this school along with arts and skill.
         </p>
         <a class="btn btn-primary" href="#">Call to contact</a>
</div>
<div class="col-md-4">
  <div style=" width:70%" class="border container p-2 m-2">
  <form>
    <h3 class="text-center">Inquiry Form</h3>
    <div class="form-group">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your name" reqiured>
    </div>
    <div class="form-group">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" id="inputPassword4" placeholder="Enter your mail" required>
    </div>
  
  <div class="form-group">
    <label for="inputAddress">Phone number</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter your mobile number" required>
  </div>
  <div class="form-group">
    <label for="inputAddress">Class</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter your class" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit form</button>
</form>
</div>
</div>
</div>
</div>
</div>


<!--forth child of the body-->
<div class="container my-3">
<div class="row">
<div class="col-md-6">
<h1>About</br> School Management System</h1>
<p>this is an application that is going to help you out in managing your school 
  system online .this will to provide best education with less efforts and money.
</p>
<p>yhth ghghfg ghytjkhgmhg hjtyhgm fadwrsd bn,jkluik fgewrrwgdf bjutj ddwewer jyuk datefmt_get_error_messagedfg
  yjytujyt hghthyt dfdfgret htyu65u eeewre hjhj kgjrig igrejoti fgnt dfpiejre vbyhlkm fewriknj trgrgji iojfoirtg
</p>
<a href="#" class="btn btn-primary">Home Page</a>
</div>
<div class="col-md-6">
  <img height="100%" width="100%" src="https://tse4.mm.bing.net/th?id=OIP.mCTLsUz7EDx9au8XiXBA8wHaE5&pid=Api&P=0" alt="....">
</div>
</div>

</div>






<!--second child of the body-->
<section class="my-5">
<div>
  <h1 class="text-center"> Top Courses</h1>
</div>
  <div class="container">
  <div class="row">
    <!--first column-->
    <?php
    $sql="SELECT * FROM `courses` limit 8";
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

<!--second child of the body-->



<?php

include '\xampp\htdocs\sms_project\footer.php';
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>