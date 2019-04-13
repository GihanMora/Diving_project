<?php
    $username="";
    $email="";
    $errors=array();

$db=mysqli_connect('localhost','root','','diving_database');

if (isset($_POST['register'])) {
   $username= $_POST['username'];
   $password_1= $_POST['password_1'];
   $password_2= $_POST['password_2'];

   if (empty($username)) {
   		array_push($errors, "Username is required");
   	}
   	if (empty($password_1)) {
   		array_push($errors, "Password is required");
   	}

   	if ($password_1 !=$password_2) {
   			array_push($errors, "The two passwords do not match");
   		}

   	if (count($errors)==0) {
   		$password=md5($password_1);
   		$sql= "INSERT INTO admins(Username`,Password) VALUES('$username','$password')";
        mysqli_query($db,$sql);
   		}	
}