<?php

$conn=mysqli_connect('localhost','root','','Courses');

if (mysqli_connect_error()) {
  die('connection falid'.mysqli_connect_error());

}

?>

<!DOCTYPE html>
<html>
	<head>
    	<title>Courses | Login</title>
    	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    	<link rel="stylesheet" href="assets/css/style.css" />
	</head>
<body>
    <header>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"> <strong>EraaSoft</strong></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="students.php">students</a>
      </li>
    </ul>
  </div>
  </nav>
</header>