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
<?php include('nav_admin.php');
if(isset($_SESSION['isAuth'])){?>

<!---header-->
<!--bannerslider-->

<!--bannerslider-->
<!---content-->

<?php
$label_array = array();
$data_array = array();
$connect=mysqli_connect('localhost','root','','diving_database');
$query ="SELECT COUNT(BookingID) as freq,Instructor_Name FROM `booking` GROUP BY Instructor_Name";
if(isset($_POST['all'])){
    $query ="SELECT COUNT(BookingID) as freq,Instructor_Name FROM `booking` GROUP BY Instructor_Name";
}
if(isset($_POST['submit'])){
    $start_date = $_POST['filter_start'];
    $end_date = $_POST['filter_end'];
    $query ="SELECT COUNT(BookingID) as freq,Instructor_Name FROM `booking`  where  DATE_FORMAT(Booking_Time,'%Y-%m-%d') >= '$start_date' and DATE_FORMAT(Booking_Time,'%Y-%m-%d') <= '$end_date' GROUP BY Instructor_Name";
}
$resultx=mysqli_query($connect,$query);

?>
<div class="row" style="text-align: center;border:1px solid black;padding-top: 100px;padding-bottom: 100px">
    <div class="col-sm-7" style="">
        <div class="col-sm-9"  style="text-align: left;padding-left: 50px">
            <form class="form" action="instructors_summary.php" method="post" id="registrationForm">
                <span style="padding-right: 25px;">Filter bookings </span>
                From <input  class="input-sm" required type="date" style="width: 142px" name="filter_start" id="filter_start"/>
                To <input   class="input-sm" required type="date" style="width: 142px"  name="filter_end" id="filter_end"/>
                <button type="submit" name="submit">Filter</button>
            </form>
        </div>
        <!--        <div class="col-sm-1" style="text-align: right;" ></div>-->

        <div class="col-sm-3" style="" >
            <form class="form" action="instructors_summary.php" method="post" id="all">
                <button  type="submit" name="all">View All Bookings</button>
            </form>
        </div>

    <div class="col-md-6 col-md-offset-3" style="padding: 50px">
        <table class="table table-striped table-hover table-bordered">

            <?php
            if($resultx!=null){
                if($resultx->num_rows>0){
                    ?>
                    <tr style="font-weight: bold">
                        <td >Course Name</td>
                        <td >Number of Bookings</td>
                    </tr>

                    <?php
                    while($row=mysqli_fetch_assoc($resultx)) {
                        array_push($data_array,(int)$row['freq']);
                        array_push($label_array,$row['Instructor_Name']);
                        ?>
                        <tr style="">
                            <td ><?php echo $row['Instructor_Name'];?></td>
                            <td ><?php echo $row['freq'];?></td>
                        </tr>
                        <?php

                    }
                }
                else{
                    ?>
                    <div style="border: 1px solid black">
                        No Bookings to Display
                    </div>
                    <?php
                }
            }
            else{
                ?>
                <div style="border: 1px solid black">
                    No Bookings to Display
                </div>
                <?php
            }

            $data =json_encode($data_array);
            $labels =json_encode($label_array);
            ?>
        </table>
    </div>

    </div>
    <div class="col-sm-5" style="width: 600px;display: inline-block;">
        <canvas id="oilChart" ></canvas>
    </div>
</div>


<script src="../js/chart.js"></script>


<script>

    var oilCanvas = document.getElementById("oilChart");



    var oilData = {
        labels: <?php echo $labels;?>,
        datasets: [
            {
                // data: [133.3, 86.2, 52.2, 51.2, 50.2],
                data: <?php echo $data;?>,
                backgroundColor: [
                    "#64ad73",
                    "#ff6361",
                    "#d6e184",
                    "#ffa600",
                    "#ee7d4f",
                    "#bc5090",
                    "#64ad73",
                    "#003f5c"
                ]
            }]
    };

    var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
    });
</script>
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
}
else{
    echo '<h1 style="text-align: center">Please Login First!</h1>';
}
?>
</html>
