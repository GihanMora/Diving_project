	<!---header-->
		<div class="header-section" >
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!---Brand and toggle get grouped for better mobile display-->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="s">
								<img src="images/logo.png" class="img-responsive poseidon" alt=""/>
								
								
						</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" >
								<li><a  href="index.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="services.php">PADI Courses</a></li>
								<li><a href="equipment.php">Equipment</a></li>
								<li><a href="Professionals.php">Diving Professionals</a></li>
							    <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Book Online<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="rates.php">Rates</a></li>
											<li><a href="register.php">Update Profile</a></li>
											<li><a href="booking.php">Online Booking</a></li>
										</ul>
									</li>
								<li><a href="review.php">Write a Review</a></li>


									<?php
									session_start();
										if(!isset($_SESSION['isAuth'])){
											echo '<li><a href="login.html">Login</a></li>';
										} else {
											if($_SESSION['isAuth']){
												echo '
                                    <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Hi!, 
											'.$_SESSION['name'].'
											 
											<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li class="active">
												<a href="#" onclick="document.getElementById('."'logoutForm'".').submit();" >Logout</a></li>

												<form id="logoutForm" action="logout.php" method="post"></form>
									
										</ul>
									</li>

												';
											}

											else {
												echo '<li><a href="login.html">Login</a></li>';
											}
										}

									?>


									
									
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!---header-->