<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Diving Centre a Sports Category Flat Bootstrap Responsive Website Template | About :: w3layouts<</title>
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
		<!--header-->
		<!---banner-->
			<div class="banner-section">
				<div class="container">
					<h2>about our club</h2>
				</div>
			</div>
		<!---banner-->
				<!---content-->
				<div class="content">
					<!---about-->
						<div class="about-section">
							<div class="container">
								<div class="about-grids">
									<div class="col-md-4 about-grid">
										<img src="images/poseidon_padi_diving_center_hikkaduwa_sri_lanka-300x162.jpg"   class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-grid1">
										<h4>Sri Lanka's first five star PADI Dive centre and PADI five star Instructor Development Centre</h4>
										<p>Since 1973 Poseidon has been diving and teaching in the waters around Sri Lanka. With over 40 years experience we have built up the best reputation for safety in diving, professionalism and friendliness. Our five star dive center offers a range of diving experiences, from try dives and the beginner’s PADI Open Water Diver course up to instructor development courses.</p>
										<p>The center has 4 instructors, 3 PADI Master Scuba Diver Trainers and one Master Instructor with a Course Director for the IDC. PADI open water diver courses start every day and advanced open water diver, rescue diver, emergency first response and divemaster courses run on demand. Divers who wish to expand their skills can attend any of a full range of PADI specialty courses.</p>
										<p>For qualified divers we run daily diving trips with a team of 5 highly experienced and qualified Divemasters to lead and assist the divers and visit a wide variety of beautiful wreck, reef and rock formation sites. Now we have 4 dive centres around the island, click on each one to learn more about what each center has to offer Hikkaduwa Dive Centre , Unawatuna Dive Centre , Mirissa Dive Centre and Trincomalee Dive Centre.</p>
										<!--div class="boat">
										<h5>boats</h5>
										<p>One Regent Hellas 9.9 Diving boat for 15 divers</p>
										<p>One RIB inflatable boat Dolphin 7.8 with Suzuki 300 PS</p>
										</div-->
									</div>
								</div>
							</div>
						</div>
					<!---about-->
					<div class="about-bottom">
						<div class="container">
							<div class="aboutbottom-grids">
								<div class="col-md-8 aboutbottom-grid">
									<div class="about-bottom1">
										<h3>our Instructors</h3>
										<span></span>
                                        <div class="staff">
                                        <?php
                                        $conn = new mysqli('localhost','root','','diving_database');
                                        if($conn->error){
                                        echo $conn->error;
                                        } else {

                                        $query = "select * from professionals";
                                        $resultset= $conn->query($query);}
                                        if($resultset->num_rows>0){
                                        while($row=mysqli_fetch_assoc($resultset)){
                                        $i_name = $row['Instructor_Name'];
                                        if(!empty($row['image'])) {
                                            $course_image = $row['image'];
                                            $src = "data:image/jpg;base64," . base64_encode($course_image);
                                        }else{
                                            $src ="images/w1.jpg";
                                        }
                                        ?>
                                            <div class="col-md-3 bottom1" style="height: 190px">
                                                <img  src="<?php echo $src; ?>" class="img-responsive" alt=""/>
                                                <h5><?php echo $i_name; ?></h5>

                                            </div>

                                        <?php
                                    }
                                }
                                ?>
										</div>
									</div>
									<!--div class="beat-sea">
										<h3>All the beauty of the sea</h3>
										<span></span>
										<div class="beat-top">
											<div class="beat-left">
												<img src="images/t9.jpg" class="img-responsive" alt=""/>
											</div>
											<div class="beat-right">
												<h5>Nullam in risus dolor. Sed eget dolor dolor,</h5>
												<p>Nunc ligula sem; aliquam eu convallis posuere, laoreet ac lectus. nascetur ridiculus mus. Donec fringilla tellus eget lectus scelerisque condimentum. Sed et vel augue. In hac habitasse platea dictumst. Maecenas orci leo, pharetra ac laoreet quis, convallis id nibh. Duis&nbsp;metus dui, pharetra ac tincidunt sit amet, hendrerit in augue Cras aliquam justo, quis pretium nibh ornare ut. Sed tincidunt accumsan imperdiet. Nulla sodales interdum.</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div-->
								</div>
								<div class="col-md-4 aboutbottom-grid1">
									<h3>Diving Sites</h3>
									<span></span>
									<div class="actives">
										<div class="active-left">
											<h5>1 .</h5>
										</div>
										<div class="active-right">
											<a href="hikka.php"><h5>Hikkaduwa Diving Centre</h5></a>
											<p></p>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="actives">
										<div class="active-left">
											<h5>2 .</h5>
										</div>
										<div class="active-right">
											<a href=""><h5>Mirissa Diving Centre</h5></a>
											<p></p>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="actives">
										<div class="active-left">
											<h5>3 .</h5>
										</div>
										<div class="active-right">
											<a href=""><h5>Trincomalee Diving Centre</h5></a>
											<p> </p>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="actives">
										<div class="active-left">
											<h5>4 .</h5>
										</div>
										<div class="active-right">
											<a href=""><h5>Unawatuna Diving Centre</h5></a>
											<p> </p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					

			        <div class="content">
					<div class="gallery">
						<div class="container">
                            <div class="col-md-12 aboutbottom-grid1">

                                <h3 style="font-family: 'Contrail One', cursive; ont-size: 5em;">Gallery</h3></div>
						<span></span>
						<div class="gallery-grids">
								<div class="col-md-3 gallery-grid gallery1">
                                
								<a href="images/1.jpg" class="swipebox">
									<img src="images/1.jpg" class="img-responsive" alt="/">
									<div class="textbox">
										<h4></h4>
										<p></p>
									</div>
								</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/2.jpg" class="swipebox">
										<img src="images/2.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div> 
									</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/3.jpg" class="swipebox">
										<img src="images/3.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div>
									</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/4.jpg" class="swipebox">
										<img src="images/4.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="grid-gallery">
								<div class="col-md-3 gallery-grid gallery1">
								<a href="images/5.jpg" class="swipebox">
									<img src="images/5.jpg" class="img-responsive" alt="/">
									<div class="textbox">
										<h4></h4>
										<p>.</p>
									</div>
								</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/6.jpg" class="swipebox">
										<img src="images/6.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div> 
									</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/7.jpg" class="swipebox">
										<img src="images/7.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div>
									</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/8.jpg" class="swipebox">
										<img src="images/8.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="grid-gallery">
								<div class="col-md-3 gallery-grid gallery1">
								<a href="images/4.jpg" class="swipebox">
									<img src="images/4.jpg" class="img-responsive" alt="/">
									<div class="textbox">
										<h4></h4>
										<p></p>
									</div>
								</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/1.jpg" class="swipebox">
										<img src="images/1.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div> 
									</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/3.jpg" class="swipebox">
										<img src="images/3.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div>
									</a>
								</div>
								<div class="col-md-3 gallery-grid gallery1">
									<a href="images/2.jpg" class="swipebox">
										<img src="images/2.jpg" class="img-responsive" alt="/">
										<div class="textbox">
											<h4></h4>
											<p></p>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>						
					
					<!---features-->
						<!--div class="features">
							<div class="container">
								<h3>features</h3>
								<span></span>
								<div class="feature-grids">
									<div class="col-md-4 feature-grid">
										<h4>Instruction</h4>
										<p>Nulla laoreet venenatis risus sed eleifend. Donec ut viverra massa. Mauris turpis ligula, dignissim a dolor pellentesque, luctus elementum mauris. Nunc nibh sapien, vestibulum a interdum quis, iaculis ac odio.</p>
									</div>
									<div class="col-md-4 feature-grid">
										<h4>Accommodations</h4>
										<p>Nulla laoreet venenatis risus sed eleifend. Donec ut viverra massa. Mauris turpis ligula, dignissim a dolor pellentesque, luctus elementum mauris. Nunc nibh sapien, vestibulum a interdum quis, iaculis ac odio.</p>
									</div>
									<div class="col-md-4 feature-grid">
										<h4>Diving trips</h4>
										<p>Nulla laoreet venenatis risus sed eleifend. Donec ut viverra massa. Mauris turpis ligula, dignissim a dolor pellentesque, luctus elementum mauris. Nunc nibh sapien, vestibulum a interdum quis, iaculis ac odio.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="feature-grids">
									<div class="col-md-4 feature-grid">
										<h4>Attractions</h4>
										<p>Nulla laoreet venenatis risus sed eleifend. Donec ut viverra massa. Mauris turpis ligula, dignissim a dolor pellentesque, luctus elementum mauris. Nunc nibh sapien, vestibulum a interdum quis, iaculis ac odio.</p>
									</div>
									<div class="col-md-4 feature-grid">
										<h4>Courses</h4>
										<p>Nulla laoreet venenatis risus sed eleifend. Donec ut viverra massa. Mauris turpis ligula, dignissim a dolor pellentesque, luctus elementum mauris. Nunc nibh sapien, vestibulum a interdum quis, iaculis ac odio.</p>
									</div>
									<div class="col-md-4 feature-grid">
										<h4>Dive medicine</h4>
										<p>Nulla laoreet venenatis risus sed eleifend. Donec ut viverra massa. Mauris turpis ligula, dignissim a dolor pellentesque, luctus elementum mauris. Nunc nibh sapien, vestibulum a interdum quis, iaculis ac odio.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div-->
					<!---features-->
					<div class="partner">
						<div class="container">
							<h3>Branches</h3>
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
						<p style="color: white">Poseidon Diving Centre<br>Galle Road<br>Hikkaduwa<Br>E-mail info@divingsrilanka.com<br>Tel 0094912277294</p>
						<!--div class="footer-top">
							<p>&copy; 2016 Diving Centre . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
						</div-->						
					</div>
				</div>
			<!--footer-->
</body>
</html>