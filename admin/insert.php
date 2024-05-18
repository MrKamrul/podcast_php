<html>
<head>
<title>insert to database</title>
</head>
<body>
<?php
include "connection.php";
if(isset($_POST['epNo'])){
$epNo=$_POST['epNo'];
$epName=$_POST['epName'];
$guest=$_POST['guest'];
$insertQ= "insert into episode (epNo,epName,guest) values ('$epNo','$epName', '$guest')";
$result = $con->query($insertQ);
if($result){
header("location: /podcast/admin/display.php ");
}
}
?>

<h1>Add episode info:</h1>
<form method="post">
<label >Episode No:</label><br>
<input type="text" name="epNo" value="" required><br>
<label >Episode Name:</label><br>
<input type="text" name="epName" value=""><br>
<label >Guest Name:</label><br>
<input type="text" name="guest" value=""><br>
<input type="submit" value="Submit">
</form>
</body>
</html>