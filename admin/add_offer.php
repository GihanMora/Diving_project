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
    <script src="../instructor/instructor_pic.js"></script>

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
<body>
<!---header-->

<!---header-->
<?php include('nav_admin.php');

?>

<div class="container bootstrap snippet" style="padding: 80px">
    <div class="row">

        <div class="row">
            <form class="form" action="add_offer.php" method="post" id="registrationForm" enctype="multipart/form-data">
                <div class="col-sm-3"><!--left col-->
                    <div class="text-center">
                        <img src="../images/up.png" class="avatar img-thumbnail" id="img" alt="avatar">
                        <!--                <img src=--><?php //echo $src; ?><!-- class="avatar img-circle img-thumbnail" alt="avatar">-->
                        <div style="font-weight: bold;padding-top: 15px">Upload the Offer Image here</div>
                        <input required type="file" name="img" class="text-center center-block file-upload">
                    </div>
                    <br>

                </div><!--/col-3-->
                <div class="col-sm-9">
                    <form class="form" action="add_offer.php" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-8">
                                <label ><h4>Date</h4></label>
                                <input required type="text" class="form-control" name="title" id="title"  >

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-8">
                                <label for="email"><h4>Description</h4></label>
                                <textarea required class="form-control"  style="width: 100%;" rows="5" name="s_description" id="s_description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" name="submit" type="submit"> Add offer</button>

                            </div>
                        </div>
                    </form>

                    <hr>

                </div><!--/tab-pane-->
        </div><!--/col-9-->
    </div><!--/row-->

</div>

    <?php
    if(isset($_POST['submit']))
    {
        $title= $_POST['title'];
        $s_des= $_POST['s_description'];
        $new_image = $_FILES['img'];
        $imagetmp=addslashes (file_get_contents($_FILES['img']['tmp_name']));

        $conn = new mysqli('localhost','root','','diving_database');
        $sql = "INSERT INTO special_offers (date, description, image)
	        VALUES ('$title','$s_des','$imagetmp')";
        $resultset= $conn->query($sql);
        echo '<script>window.location = "admin_home.php";</script>';
    }
        ?>
</body>
<div class="footer-section" style="width:100% !important">
    <div class="container">
        <p style="color: white;">Poseidon Diving Centre<br>Galle Road<br>Hikkaduwa<Br>E-mail info@divingsrilanka.com<br>Tel 0094912277294</p>
    </div>
</div>
</html>
