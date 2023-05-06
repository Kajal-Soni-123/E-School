<?php
    include '\xampp\htdocs\sms_project\db.php'; 

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $course_id=$_POST['id'];
        $sql="SELECT * FROM `courses` WHERE course_id='$course_id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['course_name'];
        $desc=$row['course_desc'];
        $auth=$row['author'];
        $duration=$row['course_duration'];
        $org_price=$row['course_org_price'];
        $sell_price=$row['course_sell_price'];
        $img=$row['course_image'];
       
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

    <title>Add Courses</title>
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
    <div class="container">
    <form class="border p-5" action="updating.php" method="post">
    <input type="hidden" name="id" value="<?php echo $course_id ?>">
        <h2 class="text-center">Update Course Details</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Course Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $name ?>" name="course_name" aria-describedby="emailHelp" required/>
  </div>
  <div class="form-group">
    <label for="desc">Course Description</label>
    <textarea class="form-control" id="desc" value="<?php echo $desc ?>" name="desc" ></textarea>
  </div>
  <div class="form-group">
    <label for="desc">Author</label>
   <input type="text" name="author" id="desc" value="<?php echo $auth ?>" class="form-control" required />
  </div>
 
  <div class="form-group">
    <label for="desc">Course Duration</label>
    <input type="text" name="course_duration" id="desc" value="<?php echo $duration ?>" class="form-control" required />
  </div>
 
  <div class="form-group">
    <label for="desc">Course Original Price</label>
    <input type="text" name="course_org_price" id="desc" value="<?php echo $org_price ?>" class="form-control" required />
  </div>
 
  <div class="form-group">
    <label for="desc">Course Selling Price</label>
    <input type="text" name="course_sell_price" id="desc" value="<?php echo $sell_price?>" class="form-control" required />
  
  </div>
 
  <div class="form-group">
    <label for="desc">Course Image</label>
   <input type="file" name="image" id="desc"class="form-control" value="<?php echo $img ?>" required/>
</div>

  </div>
 <div class="d-flex align-items-center justify-content-center">
    <input type="submit" value="Update" class="btn btn-primary mx-2"/>
    <a class="btn btn-danger text-light mx-2" href="courses_handle.php">Close</a>
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