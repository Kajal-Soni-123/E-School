
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    include '\xampp\htdocs\sms_project\header.php';
    if(isset($_GET['success']) && $_GET['success']=="false"){
        echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Sorry!</strong>you are not logged in please try again. 
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';  
    }
    ?>
    <div class="container my-5">
   <h1 class="text-center">Enter the following information to login as admin</h1>
    <form  class="my-5" action="admin_login_handle.php" method="post">

        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="name" name="email" required/>
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" id="name" name="pass" required/>
        </div>

        <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" class="form-control" id="name" name="cpass" required/>
        </div>
   <input type="submit" class="btn btn-primary" value="login">
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>