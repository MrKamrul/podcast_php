<html>
<head>
<title>Update data</title>
</head>
<body>
<?php
include "connection.php";
$n=$_GET['epNo'];
$q="select * from episode where epNo='$n'";
$result=$con->query($q);


while ($row=$result->fetch_assoc()){



	
//fetch value from database in row variable
$epNo=$row['epNo']; //from database selected column value
$epName=$row['epName'];
$guest=$row['guest'];	
}




//form insert value 
if (isset($_POST['epNo'])){
$epNo= $_POST['epNo'];
$epName=$_POST['epName'];
$guest=$_POST['guest'];
//update using sql
$update="update episode set epNo= '$epNo', epName='$epName', guest= '$guest' where epNo = '$n'";
 $result= $con->query($update);
 //redirect to main page using header() library function in php

header("location: /podcast/admin/display.php ");

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