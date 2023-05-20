<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "garage";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if(mysqli_connect_errno()){
echo "failed to connect!";
exit();
}

echo "connection successful! <br><br>";




?>