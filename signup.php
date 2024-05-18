<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title> 
    <link rel="stylesheet" href="style2.css">
   </head>
<body>
<?php
include "connection.php";

if(isset($_POST['name'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$conPassword=$_POST['conPassword'];
$insertQ= "insert into signup (name,email,password,conPassword) values ('$name', '$email','$password','$conPassword')";
$result = $con->query($insertQ);
header("Location: blog.php");
}


?>
  <div class="wrapper">
    <h2>Registration</h2>
    <form method="post">
      <div class="input-box">
        <input type="text" name="name" value="" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" value="" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" value="" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="conPassword" value="" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="submit" value="Submit">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>