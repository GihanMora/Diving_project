<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html >
<head>
    <title>Diving Centre a Sports Category Flat Bootstrap Responsive Website Template | Home :: w3layouts<</title>
    <!---css-->
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />

    <!---css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Diving Centre Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---js-->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!---js-->
    <!---fonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Contrail+One' rel='stylesheet' type='text/css'>
    <!---fonts-->
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <script src="../js/owl.carousel.js"></script>
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
</head>

<body style="">
<!---header-->

<!---header-->
<?php include('nav_admin.php'); ?>
<?php
if(isset($_SESSION['isAuth'])){
?>
<!---header-->
<!--bannerslider-->
<div class="header-banner" style="width: 100%;">
    <div class="container">

        <!-- <div class="caption"> -->
        <!-- <h3>under water world </h3> -->
        <!-- 	<p></p>
        </div> -->
    </div>
</div>
<!--bannerslider-->
<!---content-->

<div class="content">
    <div class="welcome-section" style="width:100% !important">
        <div class="container">
            <h2><center>Welcome to  Poseidon Diving Centre</center></h2>
            <span style="width:100% !important"></span>
        </div>
    </div>

    <div class="news-section" style="width:100% !important">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
            <h3>Special Offers</h3>
            </div>
            <div class="col-sm-6" style="text-align: right" >
            <a href="add_offer.php">
                <button type="button" class="btn-lg btn-success">Add new offer</button>
                </a>
                </div>
            </div>
            <span></span>
            <?php

            $conn = new mysqli('localhost','root','','diving_database');
            if($conn->error){
                echo $conn->error;
            } else {

                $query = "select * from special_offers";
                $resultset= $conn->query($query);}
            if($resultset->num_rows>0){
                while($row=mysqli_fetch_assoc($resultset)){
                    $description = $row['description'];
                    $date = $row['date'];
                    if(!empty($row['image'])){
                        $course_image = $row['image'];
                        $src="data:image/jpg;base64," .  base64_encode($course_image);
                    }
                    ?>
                    <div class="news-grids">
                        <div class="col-md-4 new-grid">

                            <img src="<?php echo $src; ?>" class="img-responsive zoom-img" alt=""/>
                        </div>
                        <div class="col-md-8 new-grid1 hvr-bounce-to-right">
                            <h5><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> <?php echo $date; ?> </h5><br>
                            <p style="color: blue; font-weight: bold;"><?php echo $description; ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>

        <div class="extreme-diving">
            <div class="container">
                <h3>Popular PADI Courses</h3>
                <span></span>
                <div class="extreme-grids">
                    <div class="col-md-3 extreme-grid">
                        <a href="../course1.php"><img src="../images/PADI_discover_scuba_diving.jpg" class="img-responsive" alt=""/></a>
                    </div>
                    <div class="col-md-3 extreme-grid1">
                        <h4>Discover Scuba Diving</h4>
                        <p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet, cosectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl.  </p>
                    </div>
                    <div class="col-md-3 extreme-grid">
                        <img src="../images/efr.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-3 extreme-grid1">
                        <h4>Emergency First Responsive Provider</h4>
                        <p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet, cosectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl.  </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="extreme-grids">
                    <div class="col-md-3 extreme-grid">
                        <img src="../images/padi-advanced-open-water.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-3 extreme-grid1">
                        <h4>Advance Open Water Diver Courses</h4>
                        <p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet, cosectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl.  </p>
                    </div>
                    <div class="col-md-3 extreme-grid">
                        <img src="../images/padi-Open-Water-Diver-Courses.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-3 extreme-grid1">
                        <h4>Open Water Diver Courses</h4>
                        <p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet, cosectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl.  </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
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
</body>
<div class="footer-section" style="width:100% !important">
    <div class="container">
        <p style="color: white;">Poseidon Diving Centre<br>Galle Road<br>Hikkaduwa<Br>E-mail info@divingsrilanka.com<br>Tel 0094912277294</p>
    </div>
</div>


<?php
}
else{
    echo '<h1 style="text-align: center">Please Login First!</h1>';
}
?>
</html>