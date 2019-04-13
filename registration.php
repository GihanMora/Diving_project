<?php

/*$d=$_GET['d'];*/

$servername="localhost";
$username="root";
$password="";
$dbname="diving_database";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){

	die("Connection Failed".$conn->connect_error);
}
else{

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$country=$_POST['Country'];
$address=$_POST['Address'];
$email=$_POST['mail'];



$query="INSERT INTO student (`First Name`, `Last Name`, `Country`, `Address`, `E-mail`)VALUES('$fname','$lname','$country','$address','$email')";


if ($conn->query($query)===TRUE) {
	echo "Data Inserted";
} else {
	echo "Error".$query."<br>".$conn->error;
}

$conn->close();
}
?>