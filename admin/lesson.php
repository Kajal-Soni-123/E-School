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

    <title>Courses</title>
  </head>
  <body>
     <!-- As a heading -->
<nav class="navbar navbar-light bg-primary">
    <div class="d-flex">
    <a class="navbar-brand text-light">
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
<div class="col-md-9 mt-3">
    <div class="container-fluid">
    <form class="form-inline my-2 my-lg-0" method="get">
      <h3>Enter Course name: &nbsp  </h3><input class="form-control mr-sm-2 border border-dark" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success btn-success text-light my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>

<div class="container-fluid my-3 bg-dark">
<h4 class="text-light py-2">List of Chapter</h4>
</div>

<div class="container-fluid">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Lesson id</th>
      <th scope="col">Lesson name</th>
      <th scope="col">Lesson description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  if(isset($_GET['search'])){
$course_name=$_GET['search'];
$sql_fetch="SELECT * FROM `courses` WHERE course_name='$course_name'";
$fetch_result=mysqli_query($conn,$sql_fetch);
$fetch_row=mysqli_fetch_assoc($fetch_result);
$course_id=$fetch_row['course_id'];
$sql="SELECT * FROM `lesson` WHERE course_id='$course_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$lesson_id=$row['lesson_id'];
echo'
    <tr>
      <th scope="row">'.$row['lesson_id'].'</th>
      <td>'.$row['lesson_name'].'</td>
      <td>'.$row['lesson_desc'].'</td>
      <td>
      <form action="" method="post" class="d-inline"><input type="hidden" value='.$lesson_id.' name="id"/>
   <button type="submit" class="btn btn-danger text-light" name="delete">delete</button></form>
<form action="edit_lesson.php" class="d-inline" method="post">
<input type="hidden" value='.$lesson_id.' name="id"/>
    <input type="submit" class="btn btn-warning lext-light" value="update" name="update"/></form></td>
    </tr>';
}
}
}
    ?>
  </tbody>
</table>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['id'])){
  $lesson_id=$_POST['id'];
  $delete_sql="DELETE FROM `lesson` WHERE lesson_id='$lesson_id'";
  $delete_result=mysqli_query($conn,$delete_sql);
}
}
  ?>
</div>
<a class="btn btn-primary" href="add_lesson.php" >Add Lesson</a>
</div>
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>