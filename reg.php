<?php


session_start();

if (isset($_POST['username']) && $_POST['email'] && $_POST['password']  ) {
   
   $username= $_POST['username'];
   $email= $_POST['email'];
   $password= $_POST['password'];
   $pswd = md5($password);
   
   	
$conn = new mysqli('localhost','root','','diving_database');
		if($conn->error){
			echo $conn->error;
    		exit();
		}

	$mysql = "SELECT username FROM student WHERE username = '$username'";
	$result = $conn->query($mysql);

	if($result->num_rows>0){
		 include "signup.html";
		 echo "<script type='text/javascript'>alert('Username Already Exist!')</script>";
		}else{
		
	        $sql = "INSERT INTO student (username, Password, `E-mail`)
	        VALUES ('$username','$pswd','$email')";
	   
		    if ($conn->query($sql) === TRUE) {
		     include "login.html";
		     exit();
			} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}

		$conn->close();




} else {
	echo "login error";
}


 ?>