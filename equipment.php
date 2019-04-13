<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Diving Centre a Sports Category Flat Bootstrap Responsive Website Template | Events :: w3layouts<</title>
<!---css-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Diving Centre Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!---js-->
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Contrail+One' rel='stylesheet' type='text/css'>
<!---fonts-->

<link href="css/owl.carousel.css" rel="stylesheet">

</head>
<body>
	<!---header-->
		<?php include('nav.php') ?>
		<!---header-->
		<!---banner-->
			<div class="banner-section">
				<div class="container">
					<h2>Equipment</h2>
				</div>
			</div>
		<!---banner-->
				<!---content-->
				<div class="content">
					<div class="events-section">
						<div class="container">
							<div class="event-grids">
                                <?php

                                $conn = new mysqli('localhost','root','','diving_database');
                                if($conn->error){
                                    echo $conn->error;
                                } else {

                                    $query = "select * from equipment";
                                    $resultset= $conn->query($query);}
                                if($resultset->num_rows>0){
                                    while($row=mysqli_fetch_assoc($resultset)){
                                        $description = $row['Description'];
                                        $course_name = $row['EquipName'];
                                        $equipment_id = $row['EquipID'];

//        $long_description = $row['long_description'];
                                        if(!empty($row['Image'])){
                                            $course_image = $row['Image'];
                                            $src="data:image/jpg;base64," .  base64_encode($course_image);
                                        }
                                        ?>
                                        <div class="col-md-4 event-grid" style="height: 600px">
                                            <img width="300" src="<?php echo $src; ?>" class="img-responsive" alt=""/>
                                            <h4><?php echo $course_name; ?></h4>
                                            <p><?php echo $description; ?></p><br>
                                            <a id="edit_link" href="equipment_info.php?equipment_id=<?php echo $equipment_id; ?>"><button id="button1id" name="button1id" class="btn btn-success">Read More</button></a>

                                        </div>
                                        <?php
                                    }
                                }
                                ?>

							</div>

						</div>
					</div>
					<div class="partner">
						<div class="container">
							<h3> our partner</h3>
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
			<!--footer-->
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---slider-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!---slider-->
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>
<!---slider-->
</body>
</html>