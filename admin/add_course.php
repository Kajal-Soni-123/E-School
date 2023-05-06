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
    <form class="border p-5" action="inserting_courses.php" method="post">
        <h2 class="text-center">Add New Course</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Course Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="course_name" aria-describedby="emailHelp" required/>
  </div>
  <div class="form-group">
    <label for="desc">Course Description</label>
    <textarea class="form-control" id="desc" name="desc" ></textarea>
  </div>
  <div class="form-group">
    <label for="desc">Author</label>
   <input type="text" name="author" id="desc" class="form-control" required />
  </div>
 
  <div class="form-group">
    <label for="desc">Course Duration</label>
    <input type="text" name="course_duration" id="desc" class="form-control" required />
  </div>
 
  <div class="form-group">
    <label for="desc">Course Original Price</label>
    <input type="text" name="course_org_price" id="desc" class="form-control" required />
  </div>
 
  <div class="form-group">
    <label for="desc">Course Selling Price</label>
    <input type="text" name="course_sell_price" id="desc" class="form-control" required />
  
  </div>
 
  <div class="form-group">
    <label for="desc">Course Image</label>
   <input type="file" name="image" id="desc"class="form-control" required/>
</div>

  </div>
 <div class="d-flex align-items-center justify-content-center">
    <input type="submit" value="submit" class="btn btn-primary mx-2"/>
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