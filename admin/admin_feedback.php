<?php
    include '\xampp\htdocs\sms_project\db.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>feedback</title>
  </head>
  <body>
        <!-- As a heading -->
<nav class="navbar navbar-light bg-primary">
    <div class="d-flex">
    <a class="navbar-brand text-light" >
<img src="https://www.pngkey.com/png/full/131-1311026_school-icon-png.png" width="30" height="30" class="d-inline-block align-top" alt=""><b> E-School</b>
</a>
  <span class="navbar-brand h3 text-light">Admin Area</span> 
</nav>

    <div class="row">
      <div class="col-md-3">
        <?php
        include '\xampp\htdocs\sms_project\admin\sidebar.php'; 
        ?>
</div>
<div class="col-md-9">
  <div class="container bg-dark">
    <h4 class="bg-dark py-2 text-light my-3">List Of Feedbacks</h4>
</div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Feedback Id</th>
      <th scope="col">Content</th>
      <th scope="col">Student Id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `student_feedback`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      $feedback_id=$row['feedback_id'];
      $feedback_content=$row['feedback_desc'];
      $student_id=$row['student_id'];

    echo'
    <tr>
      <th scope="row">'.$feedback_id.'</th>
      <td>'.$feedback_content.'</td>
      <td>'.$student_id.'</td>
      <td><form action="" method="post" class="d-inline"><input type="hidden" value='.$feedback_id.' name="id"/>
      <button type="submit" class="btn btn-dark text-light" name="delete">Remove</button></form> </td>
    </tr>';
    }
    ?>
  </tbody>
</table>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['id'])){
  $feedback_id=$_POST['id'];
  $delete_sql="DELETE FROM `student_feedback` WHERE feedback_id='$feedback_id'";
  $delete_result=mysqli_query($conn,$delete_sql);
}
}
  ?>
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