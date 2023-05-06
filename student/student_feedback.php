<?php
$success="false";
if(isset($_GET['success'])&& $_GET['success']=="true"){
$success=$_GET['success'];
}

?>
<?php
session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']=="true"){
    $student_id=$_SESSION['user_id'];
    $student_name=$_SESSION['name'];
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

    <title>Student Profile</title>
  </head>
  <body>
     <!-- As a heading -->
   <nav class="navbar navbar-light bg-primary">
    <div class="d-flex">
    <a class="navbar-brand text-light">
<img src="https://www.pngkey.com/png/full/131-1311026_school-icon-png.png" width="30" height="30" class="d-inline-block align-top" alt=""><b> E-School</b>
</a>

</nav>
    <div class="row">
        <div class="col-md-3">
            <?php
             include '\xampp\htdocs\sms_project\student\student_sidebar.php'; 
            ?>
</div>
<div class="col-md-9">
   
    <div class="container-fluid  my-5">
    <?php
    if($success=="true"){
        echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Your feedback has been recorded successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  ';
    }
    ?>
    <h1 class="text-center">Student Details</h1>
    <form class="my-5"  action="handle_student_feedback.php" method="post">
        <input type="hidden" name="id" value="<?php echo $student_id;?>" />
       <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $student_name?>" disabled/>
        </div>

        <div class="form-group">
            <label for="feedback">Enter Your Feedback</label>
            <textarea class="form-control" id="feedback" name="feedback"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit"/>
        
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