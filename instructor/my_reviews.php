<!DOCTYPE HTML>
<html style="width:100%;">
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
<body style="width:100%;">
<!---header-->

<!---header-->
<?php include('nav_instructor.php');
if (isset($_SESSION['isAuth'])){?>
<!---header-->
<!--bannerslider-->

<!--bannerslider-->
<!---content-->
<?php
$instructor_name = $_SESSION['name'];
$connect=mysqli_connect('localhost','root','','diving_database');
$query ="select * from reviews where instructor_name = '$instructor_name' or instructor_name = 'general'";
$resultx=mysqli_query($connect,$query);

?>
<div class="row" style="text-align: center;border:1px solid black;">
    <div class="col-md-10 col-md-offset-1" style="padding: 50px">

        <?php
        if($resultx->num_rows>0){
            while($row=mysqli_fetch_assoc($resultx)) {
                ?>
                <div class="row" style="padding:20px">

                    <div class="col-sm-10 col-sm-offset-1" style="padding: 20px;border-radius: 10px;border: 1px solid darkgreen" >
                        <?php $rt =  $row['rating'];?>
                        <div class="row" style="text-align: left;padding-left: 10px">
                            <div  class="star-rating-display" data-rating="<?php echo $rt;?>">
                            </div></div>

                        <div style="font-weight:bold;text-align: left"><?php echo $row['student_name'];?></div>
                        <div style="text-align: left">Review On : <?php echo $row['instructor_name'];?></div>
                        <div style="text-align: left"><?php echo $row['comment'];?></div>
                    </div>
                </div>
                <?php

            }
        }
        else{?>
            <div style="border: 1px solid black">
                You don't have any reviews
            </div>
            <?php
        }


        ?>
        </table>
    </div>
</div>
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

<!-- language: lang-html -->



<!-- end snippet -->
<style>

    .star-rating-display {
        unicode-bidi: bidi-override;
        color: #c5c5c5;

        font-size: 3em;
        display: inline-block;
        position: relative;
    }
    .star-rating-display:before, .star-rating-display:after {
        content: "★★★★★";
        display: block;
        white-space: nowrap;
    }
    .star-rating-display:before {
        color: darkorange;
        position: absolute;
        z-index: 1;
        left: 0px;
        overflow: hidden;
    }
    .star-rating-display:after {
        z-index: 0;
    }
    .star-rating-display[data-rating="1"]:before {
        width: 20%;
    }
    .star-rating-display[data-rating="2"]:before {
        width: 40%;
    }
    .star-rating-display[data-rating="3"]:before {
        width: 60%;
    }
    .star-rating-display[data-rating="4"]:before {
        width: 80%;
    }
    .star-rating-display[data-rating="5"]:before {
        width: 100%;
    }
    /* Completely remove from the flow but leave available to screen readers. */
    .is-vishidden {
        position: absolute !important;
        overflow: hidden;
        width: 1px;
        height: 1px;
        padding: 0;
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
    }

</style>
<?php
}
else{
    echo '<h1 style="text-align: center">Please Login First!</h1>';
}
?>
</html>