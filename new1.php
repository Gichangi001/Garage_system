<?php
require_once('conekt.php'); //call to connect code
$result= mysqli_query($conn,"SELECT * FROM garaget");
// retrieving records from the database and display results in web page
$row= mysqli_fetch_array($result);

//echo $row['id'];
//echo $row['name'];

//create table headers 
echo "<table border=1>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Client Name</td>";
echo "<td>Phone Number</td>";
echo "<td>Gender</td>";
echo "<td>Car type</td>";
echo "<td>Service type</td>";
echo "<td>Transport mode</td>";
echo "<td>price</td>";
echo "</tr>";

// fetch and loop records
while($row = mysqli_fetch_array($result))  // fetch the row values
{
	echo"<tr>";
	echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['car']."</td>";
echo "<td>".$row['service']."</td>";
echo "<td>".$row['transport']."</td>";
echo "<td>".$row['price']."</td>";
}
echo "</table>"

?>