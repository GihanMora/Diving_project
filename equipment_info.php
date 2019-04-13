<?php
$equipment_id = $_GET['equipment_id'] ;
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Course Details</title>
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
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!---js-->
    <!---fonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Contrail+One' rel='stylesheet' type='text/css'>
    <!---fonts-->
</head>

<!---header-->
<?php include('nav.php') ?>
<!---header-->
<!---banner-->
<div class="banner-section">
    <div class="container">
        <h2>Equipment</h2>
    </div>
</div>
<div class="col-sm-12">
<h3 style="color: black; font-size: 300%; padding: 30px;" id="header_title_1"></h3>
<center><img id="image" src=''  height="350" alt="discover"></center>
<br><br>
    <div class="col-sm-10 col-sm-offset-1">
<p id="description_view"></p>
    </div>
</div>

<br><br>
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

<?php

$conn = new mysqli('localhost','root','','diving_database');
if($conn->error){
    echo $conn->error;
} else {
    $query = "select * from equipment where EquipID = $equipment_id";
    $resultset= $conn->query($query);}
if($resultset->num_rows>0){
    $row = $resultset->fetch_assoc();
    $description = $row['Description'];
    $array = explode("\n\n", $description);
    $eq_name = $row['EquipName'];
    $long_description =  $row['long_description'];
//        $long_description = $row['long_description'];
    if(!empty($row['Image'])){
        $e_image = $row['Image'];
        $src="data:image/jpg;base64," .  base64_encode($e_image);
    }

}

?>




<script>
    document.getElementById(`description_view`).innerHTML=`<?php echo ("$long_description");?>`;
    document.getElementById(`image`).setAttribute('src','<?php echo "$src";?>');
    document.getElementById(`header_title_1`).innerHTML = `<?php echo "$eq_name";?>`;

</script>
<?php


?>
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
