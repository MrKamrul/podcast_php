<?php
include "connection.php";


$epNo=$_GET['epNo'];

$query="delete from episode where epNo='$epNo'";  

//$var=$con->query($query);

$con->query($query);

//redirect to main page using header() library function in php

header("location: /podcast/admin/display.php ");

?>