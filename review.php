<!DOCTYPE HTML>
<html>
<head>
<title>Diving Centre a Sports Category Flat Bootstrap Responsive Website Template | Services :: w3layouts<</title>
<!---css-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css-->
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
<link rel="stylesheet" type="text/css" href="css/StarRating.css">
<link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
		<?php include('nav.php') ;
		?>

			<div class="banner-section">
				<div class="container">
					<h2>Write a Review</h2>
				</div>
			</div>

        <?php
        if(isset($_SESSION['isAuth'])){

        $name = $_SESSION['name'];
        ?>
    <div class="row">
        <div class="col-lg-8" >
            <form class="form-horizontal"style="margin-top: 50px" name="booking" action="review.php" method="post";>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Name</label>
                    <div class="col-md-6">
                        <input  id="name" name="name"  class="form-control input-md" type="text" placeholder="your name" required>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Instructor</label>
                    <div class="col-md-6">
                        <?php
                        $connect=mysqli_connect('localhost','root','','diving_database');
                        $query ="select * from professionals";
                        $resultx=mysqli_query($connect,$query);

                        ?>
                        <select name="instructor_name" class="form-control input-md" >
                            <option value="general">General Review</option>
                            <?php
                            while($row=mysqli_fetch_assoc($resultx))
                            {
                                ?>
                                <option value="<?php echo $row['Instructor_Name']; ?>"><?php echo $row['Instructor_Name'];?></option>
                            <?php }?>
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Star Rating</label>
                    <div class="col-md-5">
                        <div class="rating" >
                            <span><input type="radio" name="rating" id="str5" value="5"><label for="str5">&#9733;</label></span>
                            <span><input type="radio" name="rating" id="str4" value="4"><label for="str4">&#9733;</label></span>
                            <span><input type="radio" name="rating" id="str3" value="3"><label for="str3">&#9733;</label></span>
                            <span><input type="radio" name="rating" id="str2" value="2"><label for="str2">&#9733;</label></span>
                            <span><input type="radio" name="rating" id="str1" value="1"><label for="str1">&#9733;</label></span>
                        </div>
                        <input  id="rate" name="rate"  class="form-control input-md" type="hidden"  required>
                    </div>
                    <div class="col-md-1">
                        <span id="rating"></span>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $(".rating input:radio").attr("checked", false);

                            $('.rating input').click(function () {
                                $(".rating span").removeClass('checked');
                                $(this).parent().addClass('checked');
                            });

                            $('input:radio').change(
                                function(){
                                    var userRating = this.value;
                                    document.getElementById('rating').innerHTML = userRating + ' Stars';
                                    document.getElementById('rate').setAttribute('value',userRating);
                                });
                        });
                    </script>
                </div>
                <!-- language: lang-js -->


                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Review</label>
                    <div class="col-md-6">
                        <textarea  id="review" name="review" rows="10" class="form-control input-md"  placeholder="This is a very talented instructor" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput"></label>
                <div class="col-md-6">
                    <button id="publish" type="submit" name="publish" class="btn btn-success">Publish Review</button>

                </div>
                </div>
            </form>
        </div>
    </div>
<?php
if(isset($_POST['publish']))
{
    $name= $_POST['name'];
    $instructor_name= $_POST['instructor_name'];
    if($_POST['rate']){$rate= $_POST['rate'];}

    else{$rate= 5;}
    $review= $_POST['review'];
    $conn = new mysqli('localhost','root','','diving_database');
    $sql = "INSERT INTO reviews (comment, student_name, instructor_name, rating)
	        VALUES ('$review','$name','$instructor_name','$rate')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.alert("Successfully Added Review")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
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

<!--    <script src="StarRating.js"></script>-->

<style>
    .rating {
        float:left;
        width:300px;
    }
    .rating span { float:right; position:relative; }
    .rating span input {
        position:absolute;
        top:0px;
        left:0px;
        opacity:0;
    }
    .rating span label {
        display:inline-block;
        width:30px;
        height:30px;
        text-align:center;
        color:#FFF;
        background:#ccc;
        font-size:30px;
        margin-right:2px;
        line-height:30px;
        border-radius:50%;
        -webkit-border-radius:50%;
    }
    .rating span:hover ~ span label,
    .rating span:hover label,
    .rating span.checked label,
    .rating span.checked ~ span label {
        background:#F90;
        color:#FFF;
    }
</style>



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

$conn = new mysqli('localhost','root','','diving_database');

if($conn->error){
    echo $conn->error;
} else {
    $query = "select * from student where username ='$name'";
    $resultset= $conn->query($query);}
if($resultset->num_rows>0){
    $row = $resultset->fetch_assoc();
    $f_name =  $row['First Name'];
}
?>
<script>
    var fname = '<?php echo( $f_name ); ?>' ;
    document.getElementById('name').setAttribute('value',fname);

</script>
<?php
}
else{
    echo '<h1 style="text-align: center">Please Login First!</h1>';
}
?>
</html>