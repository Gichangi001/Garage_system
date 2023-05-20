

<h2>Motaz Ltd </h2>
<body>
<?php
require_once('conekt.php');

 
$clientname=$_POST['clientname'];
$phoneno=$_POST['phoneno'];
$gender=$_POST['gender'];
$car=$_POST['car'];
$service=$_POST['service'];
$description=$_POST['description'];
$transport=$_POST['transport'];
$price=$_POST['price'];
$checkbox=$_POST['checkbox'];

if(isset($_POST['gender'])){
	$gender=$_POST['gender'];
}
if(isset($_POST['transport'])){
	$transport=$_POST['transport'];
	}

echo "Client Name: ".$clientname."<br>";
echo "Phone Number: ".$phoneno."<br>";
echo "Gender: ".$gender."<br>";
echo "Car Type: ".$car."<br>";
echo "Service Type: ".$service."<br>";
echo "Service Type description: ".$description."<br>";
echo "Transport mode: ".$transport."<br>";
echo "price: ".$price."<br>";
echo "Terms and Conditions: ".$checkbox."<br>";

$insert = "INSERT INTO garaget(name, mobile, gender, car, service, description, transport, price) VALUES ('$clientname', '$phoneno', '$gender', '$car', '$service', '$description', '$transport', '$price' )";
 
 if(mysqli_query($conn, $insert )){
	 echo "New Record Created Succesfully<br>";
	 
 }
else{
	echo "failed to connect";
	
} 
 
?>  
</body>