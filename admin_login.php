<!DOCTYPE HTML>
<html>
    <head>
        <title>insert</title>
        <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php
session_start();
include "connection.php";



if(isset($_POST['name']) && isset($_POST['password'])){
  function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;
}
$nam = validate($_POST['name']);

$pass = validate($_POST['password']);

    if (empty($nam)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `admin` WHERE name='$nam' AND password='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['name'] === $nam && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['name'] = $row['name'];

                $_SESSION['password'] = $row['password'];

                header("Location: admin/display.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }

    }

}


?>
<div class="wrapper">
    <h2>Admin log IN</h2>
    <form  method="post">
      <div class="input-box">
        <input type="text" name="name" value="" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" value="" placeholder="Your password" required>
      </div>
      <div class="input-box button">
        <input type="submit" value="Log In">
      </div>
      <div class="text">
        <h3>Don,t have an account? <a href="signup.php">Sign Up</a></h3>
      </div>
    </form>
  </div>
</body>
</html>