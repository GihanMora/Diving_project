
<!DOCTYPE HTML>
<html>
<head>
<title>Diving Centre a Sports Category Flat Bootstrap Responsive Website Template | Services :: w3layouts<</title>
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
</head>
<body >
  <!---header-->
    <?php include('nav_admin.php');
    if(isset($_SESSION['isAuth'])){?>
    <!---header-->
    <!---banner-->
      <div class="banner-section">
        <div class="container">
          <h2>PADI Professionals</h2>
        </div>
      </div>

<div class="row" style="margin:auto;">
<div class="col-sm-12" style="margin:auto;padding: 20px">



      <?php 
   $connect=mysqli_connect('localhost','root','','diving_database');
   $query ="select * from professionals";
   $resultx=mysqli_query($connect,$query);

?>



<?php
   while($row=mysqli_fetch_assoc($resultx))
   {
    ?>
        <div class="col-sm-4"  style="float:left;padding: 20px">
            <div class="col-sm-12" style="height: 480px">
                <div class="col-sm-12" style="text-align: center"><?php

                    if($row['image']==null){
                        $src="../images/user.png";
                    }
                    else{
                        $src="data:image/jpg;base64," .  base64_encode($row['image']);
                    }
                    ?>
                    <img width="250px" height="250px" style="border-radius: 70%" src="<?php echo $src ?>">
                </div>
                <div class="col-sm-12">Name</div>
                <div class="col-sm-12" style="font-size: 20px"><?php echo $row['Instructor_Name'];?></div>
                <div class="col-sm-12">Email</div>
                <div class="col-sm-12" style="font-size: 20px">
                    <?php

                    if($row['email']==null){
                        $email="Email is not provided";
                    }
                    else{
                        $email=$row['email'];
                    }
                     echo $email;?></div>
                <div class="col-sm-12">Nationality</div>
                <div class="col-sm-12" style="font-size: 20px"><?php echo $row['Nationality'];?></div>
                <div class="col-sm-12">Awards</div>
                <div class="col-sm-12" style="font-size: 20px"><?php echo $row['Awards'];?></div>

            </div>


        </div>
    <?php
  }
       ?>

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
<?php
}
else{
    echo '<h1 style="text-align: center">Please Login First!</h1>';
}
?>
</html>