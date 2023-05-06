<?php
$success="false";
if(isset($_GET['success']) && $_GET['success']=="true"){
$success=$_GET['success'];
}
?>
<?php
  include '\xampp\htdocs\sms_project\db.php'; 
  session_start();
  if(isset($_SESSION['admin_loggedin']) &&$_SESSION['admin_loggedin']=="true"){
    $admin_id=$_SESSION['admin_id'];
    $sql="SELECT * FROM `admin` WHERE admin_id='$admin_id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $admin_email=$row['admin_email'];
    $admin_password=$row['admin_pass'];
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
    <?php
    if($success=="true"){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    Your password has been changed successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';

    }
    ?>
   <div class="container">
   <form action="handle_admin_pass.php" method="post">
    <h2 class="text-center">Change your Password</h2>
    <input type="hidden" name="id" value="<?php echo $admin_id?>"/>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $admin_email ?>" disabled>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $admin_password?>">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="d-flex align-items-center justify-content-center">
  <button type="submit" class="btn btn-warning mx-2">Update</button>
  <a class="btn btn-dark text-light mx-2" href="admin_dashboard.php">Close</a>
</div>
</form>
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