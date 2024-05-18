<html>
<style>
table, th, td {
border: 1px solid black;
}
.btn{
background-color: blue;
padding: 10px 5px;
margin-bottom: 20px;
border: none;
}
.btn a{
text-decoration: none;
color: white;
font-weight: 700;
}
</style>
<body>
<button class="btn"><a href="insert.php">Add new episode</a></button>
<table>
<th>Episode No</th>
<th>Episode Name</th>
<th> Guest Name</th>
<?php
include "connection.php";

$q="select * from episode";
$result=$con->query($q);

while ($row=$result->fetch_assoc()){
echo "<tr>
<td>$row[epNo] </td>
<td>$row[epName] </td>
<td> $row[guest]</td>


<td>
<button> <a href='delete.php?epNo=$row[epNo]'>Delete</a> </button>
<button> <a href='update.php?epNo=$row[epNo]'>Update</a> </button>
</td>
</tr>
";
}
?>
</table>
</body>
</html>