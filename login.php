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



if(isset($_POST['email']) && isset($_POST['password'])){
  function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;
}
$mail = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($mail)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM signup WHERE email='$mail' AND password='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $mail && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: blog.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}


?>
<div class="wrapper">
    <h2>Log IN</h2>
    <form action="login.php" method="post">
      <div class="input-box">
        <input type="text" name="email" value="" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" value="" placeholder="Your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="LogIn">
      </div>
      <div class="text">
        <h3>Don,t have an account? <a href="signup.php">Sign Up</a></h3>
      </div>
    </form>
  </div>
</body>
</html>