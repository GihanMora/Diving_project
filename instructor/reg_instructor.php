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

	$mysql = "SELECT username FROM professionals WHERE username = '$username'";
	$result = $conn->query($mysql);

	if($result->num_rows>0){
		 include "signup_instructor.html";
		 echo "<script type='text/javascript'>alert('Username Already Exist!')</script>";
		}else{
		
	        $sql = "INSERT INTO professionals (username, password, email)
	        VALUES ('$username','$pswd','$email')";
	   
		    if ($conn->query($sql) === TRUE) {
                echo '<script>window.location = "../login.html";</script>';
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