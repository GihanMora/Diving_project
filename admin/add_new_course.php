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
<body style="width:100%;">
<!---header-->

<!---header-->
<?php include('nav_admin.php');

?>

<div class="container bootstrap snippet">
    <div class="row">

        <div class="row" style="padding-bottom: 30px">



            <form class="form" action="add_new_course.php" method="post" id="registrationForm" enctype="multipart/form-data">
                <div class="col-sm-3"><!--left col-->
                    <div class="text-center">
                        <img src="../images/up.png" class="avatar img-thumbnail" id="img" alt="avatar">
                        <!--                <img src=--><?php //echo $src; ?><!-- class="avatar img-circle img-thumbnail" alt="avatar">-->
                        <div style="font-weight: bold;padding-top: 15px">Upload the Course Image here</div>
                        <input required type="file" name="img" class="text-center center-block file-upload">
                    </div> <br>

                </div><!--/col-3-->
                <div class="col-sm-9">
                    <form class="form" action="add_new_course.php" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-8">
                                <label ><h4>Course Title</h4></label>
                                <input required type="text" class="form-control" name="title" id="title"  >

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-8">
                                <label for="email"><h4>Short Description</h4></label>
                                <textarea required class="form-control"  style="width: 100%;" rows="5" name="s_description" id="s_description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-8">
                                <label for="country"><h4>Full Description</h4></label>
                                <textarea required class="form-control"  style="width: 100%;" rows="10" name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-8">
                                <label for="awards"><h4>Course Fee</h4></label>
                                <input required type="text" class="form-control" name="fee" id="fee"title="enter awards.">
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" name="submit" type="submit"> Add Course</button>

                            </div>
                        </div>
                    </form>

                    <hr>

                </div><!--/tab-pane-->



        </div><!--/col-9-->
    </div><!--/row-->



    <?php
    if(isset($_POST['submit']))
    {
        $title= $_POST['title'];
        $s_des= $_POST['s_description'];
        $f_des= $_POST['description'];
        $fee= $_POST['fee'];
        $new_image = $_FILES['img'];
        $imagetmp=addslashes (file_get_contents($_FILES['img']['tmp_name']));

        $conn = new mysqli('localhost','root','','diving_database');
        $sql = "INSERT INTO courses (Course_Name, Description, Course_Fee, course_image,long_description)
	        VALUES ('$title','$s_des','$fee','$imagetmp','$f_des')";
        $resultset= $conn->query($sql);
        echo '<script>window.location = "services_admin.php";</script>';
    }
        ?>
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
</html>
