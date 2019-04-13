<?php


session_start();

if (isset($_POST['username']) && $_POST['password'] && $_POST['role'] ) {
   //$username= $_POST['username'];
   $username= $_POST['username'];
   $password= $_POST['password'];
   $role= $_POST['role'];
   $pswrd = md5($password);
   // $user_type = $_POST['user_type'];
   //$password_2= $_POST['password_2'];
	$conn = new mysqli('localhost','root','','diving_database');
		if($conn->error){
			echo $conn->error;
		} else {
            if($role=='admin'){
			$sql = "SELECT username, password FROM admins WHERE username='$username' AND password= '$pswrd'";
			$header = "Location: admin/admin_home.php";
            }
            if($role=='student'){
                $sql = "SELECT username, Password FROM student WHERE username='$username' AND Password= '$pswrd'";
                $header = "Location: index.php";
            }
            if($role=='instructor'){
                $sql = "SELECT username, password FROM professionals WHERE username='$username' AND password= '$pswrd'";
                $header = "Location: instructor/instructor_home.php";
            }

			$result = $conn->query($sql);


			
			if($result->num_rows>0){
				$row = $result->fetch_assoc();

                        $_SESSION['role'] = $row['role'];
						$_SESSION['name'] = $row['username'];
						$_SESSION['isAuth'] = true;

						header($header);
			} else {
						
						include "login.html";
						echo "<script type='text/javascript'>alert('Incorrect Username or Password!')</script>";

		
					}

		}

} else {
	echo "login error";
}


 ?>