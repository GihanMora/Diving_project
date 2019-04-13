
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

</body>
</html>
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


$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$instructor=$_POST['instructor'];
$course=$_POST['course'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$numofstu=$_POST['numstu'];
$coursefee=$_POST['fee'];



$query="INSERT INTO booking (`First Name`, `Last Name`, `Instructor_Name`, `Course_Name`,`Booking Time`,`No of stu`,`Course_Fee`)VALUES('$fname','$lname','$instructor','$course','$start_time','$numofstu','$coursefee')";

$query1="INSERT INTO events (`title`, `color`, `start`, `end`, `instructor_id`)VALUES('$fname','#0071c5','$start_time','$end_time',2)";
$conn2=new mysqli('localhost','root','','calendar');

if(! $conn2 ) {
    die("Connection failed: " . $conn2->connect_error);
}
if ($conn2->query($query1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query1 . "<br>" . $conn2->error;
}
if ($conn->query($query)===TRUE) {
    echo "New record created successfully";
    $sql = "SELECT * FROM booking ORDER BY BookingID DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
}
else{
echo "Error: " . $query . "<br>" . $conn->error;
}
?>
<table class="table table-striped">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Instructor Name</th>
<th>Booking Time</th>
<th>Course Name</th>
<th>No of stu</th>
<th>Course Fee</th>
</tr>
<?php
    while ($row=mysqli_fetch_array($result)) {
      
      echo "<tr>";
      echo  "<td>".$row['First Name']."</td>";
      echo "<td>".$row['Last Name']."</td>";
      echo "<td>".$row['Instructor Name']."</td>";
      echo "<td>".$row['Course Name']."</td>";
      echo "<td>".$row['Booking Time']."</td>";
      echo "<td>".$row['No of Stu']."</td>";
      echo "<td>".$row['Course_Fee']."</td>";
      
      echo "</tr>";
      // echo  "Instructor Name :".$row['Instructor Name'];
      // echo "<br>";
      // echo  "Course Name :".$row['Course Name'];
      // echo "<br>";
      // echo  "Booking Date :".$row['Booking Date'];
      // echo "<br>";
      // echo  "Booking Time :".$row['Booking Time'];
      // echo "<br>";
      // echo  "Number of Students:".$row['No of Stu'];
      // echo "<br>";
     //    echo  "Course Fee:".$row['Course Fee'];
     //    echo "<br>";
    }
echo "</table>";



     
      echo '<br><br><center><button id="button1id" name="button1id" class="btn btn-success" style="colour:black; height:50px; width:200px;"><b>Pay with PayPal<b></button></center> ';

$conn->close();

?>

<p><b>PayPal calculates tax and shipping based on rates that you set up in your PayPal account.<b></p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Hot Sauce-12oz. Bottle">
  <input type="hidden" name="amount" value="<?php $_POST['fee'] ?>">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="Buy Now">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
