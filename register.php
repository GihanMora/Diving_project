<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Diving Centre a Sports Category Flat Bootstrap Responsive Website Template | Services :: w3layouts<</title>
<!---css-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Diving Centre Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js-->
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Contrail+One' rel='stylesheet' type='text/css'>
<!---fonts-->


</head>
<body>
	<!---header-->
		<?php include('nav.php') ?>
		<!---header-->
		<!---banner-->
			<div class="banner-section">
				<div class="container">
					<h2>Update Profile</h2>
				</div>
			</div>
<!--div style="stylesheet" type="text/css" href="css/bootstrap.min.css""-->
    <?php
    if(isset($_SESSION['isAuth'])){
    ?>
<form class="form-horizontal" name="registration" action="register.php" method="post">

<br><br>
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="first_name" name="first_name" type="text" placeholder="first name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <input id="last_name" name="last_name" type="text" placeholder="last name" class="form-control input-md">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Country">Country</label>
  <div class="col-md-4">
    <select id="Country" name="Country" class="form-control">
      <option value="1">Sri Lanka</option>
      <option value="2">India</option>
      <option value="3">Japan</option>
      <option value="3">Netherland</option>
      <option value="3">Maldives</option>
      
    </select>
  </div>
</div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Address" name="Address"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail Address</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="text" placeholder="email" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="submit" class="btn btn-success">Save</button>

  </div>
</div>

</fieldset>
</form>

<!--form>
<br><label>First Name</label><br>
 <input type="text" name="fname"><br><br>
 <br><label>Last Name</label><br>
 <input type="text" name="lname"><br><br>
 <br><label>Country</label><br>
 <select>
    	<option value="america">America</option>
    	<option value="netherland">Netherland</option>
    	<option value="japan">Japan</option>
    	<option value="chin">Chaina</option>
    </select><br>
<br><br><label>Address</label><br>
<textarea name="address" rows="5" cols="30"></textarea>
<br><br><label>E-mail Address</label><br>
<input type="text" name="mail"><br><br>
</form-->


<div class="partner">
						<div class="container">
							<h3> Branches</h3>
							<span></span>
							<div class="partner-grids">
								<div class="col-md-3 partner-grid">
									<div class="partners">
										<div class="partner-left">
										<i class="glyphicon glyphicon-asterisk" aria-hidden="true"></i>
										</div>
										<div class="partner-right">
											<h4>Hikkaduwa</h4>
											<p></p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 partner-grid">
									<div class="partners">
										<div class="partner-left">
										<i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i>
										</div>
										<div class="partner-right">
											<h4>Mirissa</h4>
											<p></p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 partner-grid">
									<div class="partners">
										<div class="partner-left">
										<i class="glyphicon glyphicon-star" aria-hidden="true"></i>
										</div>
										<div class="partner-right">
											<h4>Trincomalee</h4>
											<p></p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-3 partner-grid">
									<div class="partners">
										<div class="partner-left">
										<i class="glyphicon glyphicon-fire" aria-hidden="true"></i>
										</div>
										<div class="partner-right">
											<h4>Unawatuna</h4>
											<p></p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>	
		<!---content-->
		<!--footer-->
</body>
<div class="footer-section" style="width:100% !important">
    <div class="container">
        <!--div class="social-icons">
            <a href="#"><i class="icon1"></i></a>
            <a href="#"><i class="icon2"></i></a>
            <a href="#"><i class="icon3"></i></a>
            <a href="#"><i class="icon4"></i></a>
        </div-->
        <p style="color: white;">Poseidon Diving Centre<br>Galle Road<br>Hikkaduwa<Br>E-mail info@divingsrilanka.com<br>Tel 0094912277294</p>
        <!--div class="footer-top">
            <p>&copy; 2016 Diving Centre . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div-->
    </div>
</div>
<?php
$name = $_SESSION['name'];
if(isset($_POST['submit']))
{
    $new_f_name = $_POST['first_name'];
    $new_l_name= $_POST['last_name'];
    $new_country= $_POST['Country'];
    $new_address= $_POST['Address'];
    $new_mail = $_POST['mail'];
    $conn = new mysqli('localhost','root','','diving_database');
    $query = "UPDATE `student` SET `First Name` = '$new_f_name',`Last Name` = '$new_l_name',`Country`='$new_country',
`Address`='$new_address',`E-mail` = '$new_mail' WHERE `student`.`username` ='$name'";
    $resultset= $conn->query($query);

    ?>

    <?php

}
?>
<?php

$conn = new mysqli('localhost','root','','diving_database');

if($conn->error){
    echo $conn->error;
} else {

    $query = "select * from student where username ='$name'";
    $resultset= $conn->query($query);}
if($resultset->num_rows>0){

    $row = $resultset->fetch_assoc();
    $fr_name =$row['First Name'];
    $ls_name =$row['Last Name'];
    $email = $row['E-mail'];
    $country = $row['Country'];
    $addr= $row['Address'];


}
?>
<script>
    var fname = '<?php echo( $fr_name ); ?>' ;
    document.getElementById('first_name').setAttribute('value',fname);
    var lname = '<?php echo( $ls_name ); ?>' ;
    document.getElementById('last_name').setAttribute('value',lname);
    var email = '<?php echo( $email ); ?>' ;
    document.getElementById('mail').setAttribute('value',email);
    var country = '<?php echo( $country ); ?>' ;
    document.getElementById('Country').setAttribute('value',country);
    var address = '<?php echo( $addr ); ?>' ;
    document.getElementById('Address').innerHTML = address;
</script>



<?php
}
    else{
        echo '<h1 style="text-align: center">Please Login First!</h1>';
    }
?>
</html>