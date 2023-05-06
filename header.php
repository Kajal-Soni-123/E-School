<?php
echo '<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<a class="navbar-brand text-light" href="index.php">
<img src="sms_image/school_icon.png" width="30" height="30" class="d-inline-block align-top" alt=""><b> E-School</b>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item active">
      <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="courses.php">Courses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="payment_status.php">Payment Status</a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-light" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-light" href="student/student_feedback.php">Feedback</a>
</li>'
?>
<?php 
session_start();
if(isset($_SESSION['loggedin'])){
echo'
<li class="nav-item align-items-center">
<a href="#" class="nav-link text-light">'.$_SESSION['name'].'</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="student/student_profile.php">My Profile</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="logout.php">Logout</a>
</li>';
}
else{
echo'
<li class="nav-item">
<a class="nav-link text-light" href="signin.php">Sign in</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="login.php">Login</a>
</li>
';
}
?>
<?php
echo'
  </ul>
</div>
</nav>'
?>