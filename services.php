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
<!---css-->
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
					<h2>PADI Courses</h2>
				</div>
			</div>
		<!---banner-->
				<!---content-->
				<div class="content">
					<div class="services-section">
						<div class="container">
							<h3>Courses we offer</h3>
							<span></span>
							<br><br>
							<p>Poseidon Diving Station is the most experienced diving school in Sri LankaIn our PADI five star diving school we have 4 expert local and foreign instructors teaching all PADI dive courses up to instructor.</p><br> 
							<p>We have learning materials in most major languages.The reef of Hikkaduwa Marine Reserve is a few meters from the centre and we are fortunate to be able to do our shallow water training in the shelter of the reef where you can experience sea conditions and see some marine life whilst training.</p><br>
							<p>An easy boat ride away we have plentiful wrecks, reef and rock formations where it is possible to see large marine life including dolphins, whalesharks and mantaray. Our dives in the Indian Ocean have visibility up to 25m in safe, warm water.</p><br>
							<div class="services-grids">
                                <?php

                                $conn = new mysqli('localhost','root','','diving_database');
                                if($conn->error){
                                    echo $conn->error;
                                } else {

                                    $query = "select * from courses";
                                    $resultset= $conn->query($query);}
                                if($resultset->num_rows>0){
                                    while($row=mysqli_fetch_assoc($resultset)){
                                        $description = $row['Description'];
                                        $course_name = $row['Course_Name'];
                                        $course_fee = $row['Course_Fee'];
                                        $course_id = $row['Course_ID'];
//        $long_description = $row['long_description'];
                                        if(!empty($row['course_image'])){
                                            $course_image = $row['course_image'];
                                            $src="data:image/jpg;base64," .  base64_encode($course_image);
                                        }
                                        ?>
                                        <div class="col-md-3 services-grid">
                                            <img src="<?php echo $src; ?>" class="img-responsive" alt=""/>
                                        </div>
                                        <div class="col-md-3 services-grid1" style="height: 300px">
                                            <h4><?php echo $course_name; ?></h4>
                                            <p><?php echo $description; ?></p><br>
                                            <a  href="course_info.php?course_id=<?php echo $course_id; ?>"><button id="button1id" name="button1id" class="btn btn-success">Read More</button></a>


                                            <span></span>
                                        </div>
                                        <?php
                                    }


                                }
                                ?>

							</div>


						</div>
					</div>	
					<!--div class="offer">
						<div class="container">
							<h3>What We Offer</h3>
							<span></span>
							<div class="offer-grids">
								<div class="col-md-4 offer-grid">
									<i class="glyphicon glyphicon-comment" aria-hidden="true"></i>
									<h4>donec sit amet</h4>
									<p>Penatibus etmgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus.</p>
								</div>
								<div class="col-md-4 offer-grid">
									<i class="glyphicon glyphicon-ok-circle" aria-hidden="true"></i>
									<h4>Mauris ferment</h4>
									<p> Nulla dui. Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies phar.</p>
								</div>
								<div class="col-md-4 offer-grid">
									<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
									<h4>Morbi nunc odio</h4>
									<p>Fusce feugiat malesuada odio orbinunc odio gravida at cursus nec luctus.a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="offer-grids">
								<div class="col-md-4 offer-grid">
									<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
									<h4>donec sit amet</h4>
									<p>Penatibus etmgnis dis parturient montes ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus.</p>
								</div>
								<div class="col-md-4 offer-grid">
									<i class="glyphicon glyphicon-fire" aria-hidden="true"></i>
									<h4>Mauris ferment</h4>
									<p> Nulla dui. Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies phar.</p>
								</div>
								<div class="col-md-4 offer-grid">
									<i class="glyphicon glyphicon-record" aria-hidden="true"></i>
									<h4>Morbi nunc odio</h4>
									<p>Fusce feugiat malesuada odio orbinunc odio gravida at cursus nec luctus.a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div-->
					<!---features-->
					<!---client-->
						<div class="clients">
							<div class="container">
								<div class="col-md-3 client">
									<h5>14500</h5>
									<h4>Products available</h4>
								</div>
								<div class="col-md-3 client">
									<h5>81%</h5>
									<h4>Clients come back</h4>
								</div>
								<div class="col-md-3 client">
									<h5>10 mlns</h5>
									<h4>Site members</h4>
								</div>
								<div class="col-md-3 client">
									<h5>75%</h5>
									<h4>daily user</h4>
								</div>
							</div>
						</div>
					<!---client-->
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
</body>
</html>