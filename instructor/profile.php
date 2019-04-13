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
    <script src="instructor_pic.js"></script>

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
if (isset($_SESSION['isAuth'])){
$instructor_uname = $_SESSION['name'];
?>

<div class="container bootstrap snippet" style="padding: 50px">
    <div class="row">
        <div style="padding: 30px" class="col-sm-10"><h1>My Profile</h1></div>
    <div class="row">



        <form class="form" action="profile.php" method="post" id="registrationForm" enctype="multipart/form-data">
        <div class="col-sm-3"><!--left col-->
            <div class="text-center">
                <img src="../images/user.png"  class="avatar  img-thumbnail" id="img" alt="avatar">
<!--                <img src=--><?php //echo $src; ?><!-- class="avatar img-circle img-thumbnail" alt="avatar">-->
                <div style="font-weight: bold;padding-top: 15px">Upload your Image here</div>
                <input requiredtype="file" name="img" class="text-center center-block file-upload">
            </div></br><br>

        </div><!--/col-3-->
        <div class="col-sm-9">
                    <form class="form" action="profile.php" method="post" id="registrationForm">
                        <div class="form-group" >

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Name</h4></label>
                                <input required type="text" class="form-control" name="f_name" id="name" placeholder="Name" title="enter your first name if any.">

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6" style="margin-top: -15px">
                                <label for="email"><h4>Email</h4></label>
                                <input required  type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6" style="margin-top: 25px">
                                <label for="country"><h4>Nationality</h4></label>
                                <input required type="text" class="form-control" name="country" id="country" placeholder="Srilankan" title="enter the nationality">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6" style="margin-top: 25px">
                                <label for="awards"><h4>Awards</h4></label>
                                <input required type="text" class="form-control" name="awards" id="awards" placeholder="Awards" title="enter awards.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" name="submit" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

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
    $new_name= $_POST['f_name'];
    $new_email= $_POST['email'];
    $new_country= $_POST['country'];
    $new_awards= $_POST['awards'];
    $new_image = $_FILES['img'];
    $imagetmp=addslashes (file_get_contents($_FILES['img']['tmp_name']));

    $conn = new mysqli('localhost','root','','diving_database');
    $query = "UPDATE `professionals` SET `Awards` = '$new_awards',`Nationality` = '$new_country',`Instructor_name`='$new_name',
`email`='$new_email',`image` = '$imagetmp' WHERE `professionals`.`username` ='$instructor_uname'";
    $resultset= $conn->query($query);

    ?>

    <?php

}
    ?>
    <?php

    $conn = new mysqli('localhost','root','','diving_database');

    if($conn->error){
        echo $conn->error;
    } else {

        $query = "select * from Professionals where username ='$instructor_uname'";
        $resultset= $conn->query($query);}
    if($resultset->num_rows>0){

        $row = $resultset->fetch_assoc();
        $Instructor_name =Null;
        $email = Null;
        $nationality = Null;
        $awards = Null;
        $Image = Null;
        $src="../images/user.png";
        if(!empty($row['Instructor_Name'])){
        $Instructor_name =  $row['Instructor_Name'];}
        if(!empty($row['email'])){
        $email =  $row['email'];}
        if(!empty($row['Nationality'])){
        $nationality =  $row['Nationality'];}
        if(!empty($row['Awards'])){
        $awards =  $row['Awards'];}
        if(!empty($row['image'])){
        $Image =  $row['image'];
            $src="data:image/jpg;base64," .  base64_encode($Image);
        }

    }
    ?>
    <script>
        var Instructor_name = '<?php echo( $Instructor_name ); ?>' ;
        document.getElementById('name').setAttribute('value',Instructor_name);
        var email = '<?php echo( $email ); ?>' ;
        document.getElementById('email').setAttribute('value',email);
        var country = '<?php echo( $nationality ); ?>' ;
        document.getElementById('country').setAttribute('value',country);
        var awards = '<?php echo( $awards ); ?>' ;
        document.getElementById('awards').setAttribute('value',awards);
        var img_src = '<?php echo( $src ); ?>' ;
        document.getElementById('img').setAttribute('src',img_src);
    </script>
</body>
<?php
}
    else{
        echo '<h1 style="text-align: center">Please Login First!</h1>';
    }
?>
</html>
