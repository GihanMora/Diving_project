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

$connect=mysqli_connect('localhost','root','','diving_database');
$query ="select * from booking";
if(isset($_POST['today'])){
    $today = date('Y-m-d');
    $query ="select * from booking where  DATE_FORMAT(Booking_Time,'%Y-%m-%d') = '$today'";
}
if(isset($_POST['all'])){
    $query ="select * from booking";
}
if(isset($_POST['submit'])){
    $start_date = $_POST['filter_start'];
    $end_date = $_POST['filter_end'];
    $query ="select * from booking where  DATE_FORMAT(Booking_Time,'%Y-%m-%d') >= '$start_date' and DATE_FORMAT(Booking_Time,'%Y-%m-%d') <= '$end_date'";
}
$resultx=mysqli_query($connect,$query);

?>
<div style="padding-right: 20px;padding-top: 20px"><button style="float: right;" onclick="printData()">Print Report</button></div>

<div class="row" style="text-align: center;" >
    <div class="col-sm-8 col-sm-offset-2" style="padding-top: 30px">

        <div class="col-sm-8"  style="text-align: left;">
            <form class="form" action="bookings_admin.php" method="post" id="registrationForm">
                <span style="padding-right: 25px;">Filter bookings in duration </span>
                From <input  class="input-sm" required type="date" style="width: 142px" name="filter_start" id="filter_start"/>
                To <input   class="input-sm" required type="date" style="width: 142px"  name="filter_end" id="filter_end"/>
                <button type="submit" name="submit">Filter</button>
            </form>
        </div>
<!--        <div class="col-sm-1" style="text-align: right;" ></div>-->
        <div class="col-sm-2" style="text-align: right;" >
            <form class="form" action="bookings_admin.php" method="post" id="tdy">
                <button  type="submit" name="today">Today's Bookings</button>
            </form>
        </div>
        <div class="col-sm-2" style="text-align: right;" >
            <form class="form" action="bookings_admin.php" method="post" id="all">
                <button  type="submit" name="all">View All Bookings</button>
            </form>

        </div>

    </div>
    <div class="col-md-8 col-md-offset-2" style="padding: 50px">

        <table id="printing_div" class="table table-striped table-hover table-bordered">

        <?php
        if($resultx!=null){
        if($resultx->num_rows>0){
            ?>
            <tr style="font-weight: bold;">
                <td >First Name</td>
                <td >Last Name</td>
                <td >Instructor Name</td>
                <td >Course Name</td>
                <td >Booking Time</td>
                <td >Number of Students</td>
                <td >Course Fee</td>
            </tr>

            <?php
            while($row=mysqli_fetch_assoc($resultx)) {
                ?>
                <tr >


                        <td ><?php echo $row['First Name'];?></td>
                        <td ><?php echo $row['Last Name'];?></td>
                        <td ><?php echo $row['Instructor_Name'];?></td>
                        <td ><?php echo $row['Course_Name'];?></td>
                        <td ><?php echo $row['Booking_Time'];?></td>
                        <td ><?php echo $row['No of Stu'];?></td>
                        <td ><?php echo $row['Course_Fee'];?></td>

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


        ?>
        </table>
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


<script>
    function printData()
    {
        var divToPrint=document.getElementById("printing_div");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

</script>
</html>
