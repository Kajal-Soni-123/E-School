<?php
if(isset($_GET['id'])){
  $course_id=$_GET['id'];
}
?>
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
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-5">
        <?php
$sql="SELECT * FROM `courses` WHERE course_id='$course_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  $course_image=$row['course_image'];
echo'
<img height="100%" width="100%" src="sms_image/'.$course_image.'"  alt="...">
';
}?>

</div>
<?php
$sql="SELECT * FROM `courses` WHERE course_id='$course_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  $course_name=$row['course_name'];
  $course_desc=$row['course_desc'];
  $course_duration=$row['course_duration'];
  $course_price=$row['course_sell_price'];
  $course_image=$row['course_image'];
  $course_id=$row['course_id'];
echo'
<div class="col-md-6">
  <div class="container">
    <p><h2>course name:</h2>'.$course_name.'</p>
    <p><h2>Course description:</h2>'.$course_desc.'</p>
    <p><h2>Course duration:</h2>'.$course_duration.'hrs</p>
    <p><h2>Course price:</h2>'.$course_price.'/-</p>
    <a href="payment.php?id='.$course_id.'" class="btn btn-secondary float-right my-2">Buy Now</a>
</div>
</div>';
}
?>

</div>
<div>
<table class="table">
  <thead>
    <tr>
      <th  class="text-center" scope="col">Lesson No</th>
      <th class="text-center" scope="col">Lesson Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `lesson` WHERE course_id='$course_id'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      $lesson_id=$row['lesson_id'];
      $lesson_name=$row['lesson_name'];
    echo'
    <tr>
      <th class="text-center" scope="row">'.$lesson_id.'</th>
      <td class="text-center">'.$lesson_name.'</td>
    </tr>';
    }
    ?>
  
  </tbody>
</table>
</div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>