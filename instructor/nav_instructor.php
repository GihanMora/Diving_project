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
								<img src="../images/logo.png" class="img-responsive poseidon" alt=""/>
								
								
						</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="../instructor/instructor_home.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="my_shedule.php">My Shedule</a></li>
								<li><a href="../instructor/my_reviews.php">My Reviews</a></li>
                                <li><a href="../instructor/profile.php">My Profile</a></li>

									<?php
									session_start();
										if(!isset($_SESSION['isAuth'])){
											echo '<li><a href="../login.html">Login</a></li>';
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

												<form id="logoutForm" action="../logout.php" method="post"></form>
									
										</ul>
									</li>

												';
											}

											else {
												echo '<li><a href="../login.html">Login</a></li>';
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