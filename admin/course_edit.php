<?php
$course_id = $_GET['course_id'] ;





?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Course Details</title>
    <!---css-->
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--css-->
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
</head>

<!---header-->
<?php include('nav_admin.php') ?>
<!---header-->
<!---banner-->
<div class="banner-section">
    <div class="container">
        <h2>PADI Courses</h2>
    </div>
</div>


<div class="col-sm-12">
    <form class="form" action="course_edit.php?course_id=<?php echo $course_id; ?>" method="post" id="registrationForm">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 " style="margin: auto;">
        <h3 style="padding-left: 30px;">Preview</h3>
        <h3 style="color: black; font-size: 300%; padding: 30px;" id="header_title_1"></h3>
        <center><img id="image" src='' width="500" height="300" alt="discover"></center>
        <br><br>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-12">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 " style="margin: auto;">

                <p id="description_view"></p>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h3 style="padding: 30px;">Edit Course Information</h3>
                <label>Course Title</label>
                <input name="c_title" class="form-control" style="width: 100%; " id="header_title"/>
                <label>Short Description</label>
                <textarea class="form-control"  style="width: 100%;" rows="5" name="s_description" id="s_description">
                </textarea>
                <label>Full Description</label>
                <textarea class="form-control"  style="width: 100%;" rows="15" name="description" id="description">
                </textarea>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <br>
                <button class="btn btn-lg btn-success" style="width: 100%" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

            </div>
            <div class="col-sm-4"></div>
        </div>
    </form>
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
if(isset($_POST['submit'])) {

    $new_description =  $_POST['description'];
    $new_s_description =  $_POST['s_description'];
    $new_title =  $_POST['c_title'];
    $conn = new mysqli('localhost','root','','diving_database');
    $query = "UPDATE `courses` SET `long_description` = '$new_description',`description` = '$new_s_description',`Course_Name` = '$new_title' where Course_ID = $course_id";
    $resultset= $conn->query($query);

}
$conn = new mysqli('localhost','root','','diving_database');

if($conn->error){
    echo $conn->error;
} else {

    $query = "select * from courses where Course_ID = $course_id";
    $resultset= $conn->query($query);}
if($resultset->num_rows>0){

    $row = $resultset->fetch_assoc();
    $description = $row['Description'];
    $array = explode("\n\n", $description);
    $course_name = $row['Course_Name'];
    $course_fee = $row['Course_Fee'];
    $long_description =  $row['long_description'];
//        $long_description = $row['long_description'];
    if(!empty($row['course_image'])){
        $course_image = $row['course_image'];
        $src="data:image/jpg;base64," .  base64_encode($course_image);
    }

}
?>




<script>
document.getElementById(`description_view`).innerHTML=`<?php echo ("$long_description");?>`;
document.getElementById(`description`).innerHTML=`<?php echo ("$long_description");?>`;
document.getElementById(`s_description`).innerHTML=`<?php echo ("$description");?>`;
document.getElementById(`image`).setAttribute('src','<?php echo "$src";?>');
document.getElementById(`header_title_1`).innerHTML = `<?php echo "$course_name";?>`;
document.getElementById(`header_title`).value = `<?php echo "$course_name";?>`;
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