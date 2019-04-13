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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js-->
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Contrail+One' rel='stylesheet' type='text/css'>

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
<!---fonts-->
</head>
<?php

function fs(){
    echo "sa";
}

include('nav.php')
?>
<body>

	<!---header-->

		<!---header-->
		<!---banner-->
			<div class="banner-section">
				<div class="container">
					<h2>Online Booking</h2>
				</div>
			</div>
    <?php
    if(isset($_SESSION['isAuth'])){
    ?>
    <?php
    $name = $_SESSION['name'];
    ?>
<!--div style="stylesheet" type="text/css" href="css/bootstrap.min.css""-->
<!--    <a href="booking1.php?val=100"><button>my button</button></a>-->
    <form class="form-horizontal" name="booking" action="booking1.php" id="myform" method="post">

<br><br>
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input  id="first_name" name="first_name"  type="text" placeholder="first name" class="form-control input-md" required>
    
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
  <label class="col-md-4 control-label" for="Country">Instructor Name</label>
  <div class="col-md-4">
      <?php
      $connect=mysqli_connect('localhost','root','','diving_database');
      $query ="select * from professionals";
      $resultx=mysqli_query($connect,$query);

      ?>
      <select name="instructor" id="instructor" class="form-control input-md" >
          <?php
          while($row=mysqli_fetch_assoc($resultx))
          {
              ?>
              <option value="<?php echo $row['username']; ?>"><?php echo $row['Instructor_Name'];?></option>
          <?php }?>
      </select>
  </div>
</div>







    <script>

        function select_project_type() {

            var selected_item = document.getElementById('instructor');
            // window.alert(selected_item.options[selected_item.selectedIndex].value);

            namexx = selected_item.options[selected_item.selectedIndex].value;
            var vaaal = selected_item.options[selected_item.selectedIndex].value;
            var f_name = document.getElementById('first_name');
            var l_name = document.getElementById('last_name');


            // if(document.getElementById('last_name').value!=null){
            //     var last_name = document.getElementById('last_name').value;
            //     window.alert(last_name);
            // }
            var link = "booking1.php?val="+vaaal+"&f_name="+f_name.value+"&l_name="+l_name.value;
            // var link = "booking1.php?val="+vaaal;
            // $("#mybut").attr("href", link);
            $("#myform").attr("action", link);
            <?php

            ?>

            f();

        }


    </script>




<script type = "text/javascript" language = "javascript">
 jQuery(document).ready(function() {
    jQuery("#buttonId").click(function() {
        var ins_value = $('#instructor').val();
       var ins_name = $('#instructor :selected').text();
            window.location = "http://localhost/webolder/calander-instructure/"+ins_value + "/" ;

    });
 });

</script>

<!-- Text input-->

</fieldset>


        <div class="col-sm-6"></div>
        <div class="col-md-4">
           <button onclick="select_project_type()">Check out Instructor availability</button>
        </div>





    </form>



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

</html>
<?php

$conn = new mysqli('localhost','root','','diving_database');

if($conn->error){
    echo $conn->error;
} else {

    $query = "select * from student where username ='$name'";
    $resultset= $conn->query($query);}
if($resultset->num_rows>0){
    $row = $resultset->fetch_assoc();
        $f_name =  $row['First Name'];
        $l_name =  $row['Last Name'];
}
?>
<script>
    var fname = '<?php echo( $f_name ); ?>' ;
    document.getElementById('first_name').setAttribute('value',fname);
    var lname = '<?php echo( $l_name ); ?>' ;
    document.getElementById('last_name').setAttribute('value',lname);

</script>


<body>


<!-- Page Content -->





</body>
<?php
}
else{
    echo '<h1 style="text-align: center">Please Login First!</h1>';
}
?>
</html>

