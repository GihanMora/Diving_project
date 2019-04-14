<?php


?>
<!-- /.container -->
<!DOCTYPE html>
<body lang="en">

<head>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="calender/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- FullCalendar -->
    <link href='calender/css/fullcalendar.css' rel='stylesheet' />

    <!-- Custom CSS -->
    <style>

        #calendar {
            max-width: 800px;
        }
        .col-centered{
            float: none;
            margin: 0 auto;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php include('nav.php') ?>
<div class="banner-section">
<div class="container">
    <h2>Online Booking</h2>
</div>
</div>


    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6" >
            <form class="form-horizontal"style="margin-top: 50px" name="booking" action="book.php" method="post";>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">First Name</label>
                    <div class="col-md-6">
                        <input required id="first_name" name="first_name"  class="form-control input-md" type="text" value="<?php echo $_GET['f_name']?>" placeholder="first name" required>

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Last Name</label>
                    <div class="col-md-6">
                        <input required id="last_name" name="last_name"  class="form-control input-md" type="text" value="<?php echo $_GET['l_name']?>" placeholder="last name" >

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-6 control-label" for="Country">Instructor Name</label>
                    <div class="col-md-6">
                        <input required id="instructor"  class="form-control input-md" value="<?php echo $_GET['val']?>" name="instructor" >

                    </div>
                </div>
            <div class="form-group">
                <label class="col-md-6 control-label" for="textinput">Booking Start Time</label>
                <div class="col-md-6">
                    <input required id="textinput" name="start_time" type="datetime-local" placeholder="time" class="form-control input-md">

                </div>
            </div>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Booking End Time</label>
                    <div class="col-md-6">
                        <input required id="textinput" name="end_time" type="datetime-local" placeholder="time" class="form-control input-md">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="Country">Course Name</label>
                    <div class="col-md-6">
                        <select required id="course" name="course" class="form-control" >
                        <option value="PADI Scuba Diver Course">PADI Scuba Diver Course</option>
                        <option value="Open Water Diver Course">Open Water Diver Course</option>
                        <option value="Advanced Open Water Diver Courses">Advanced Open Water Diver Courses</option>
                        <option value="Master Scuba Diver Courses">Master Scuba Diver Courses</option>
                        <option value="Discover Scuba Diving">Discover Scuba Diving</option>
                        <option value="PADI Seal Team (8+)">PADI Seal Team (8+)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Number of Students</label>
                    <div class="col-md-6">
                        <input required id="textinput" name="numstu" type="text" placeholder="No of Students" class="form-control input-md">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-6 control-label" for="textinput">Course Fee</label>
                    <div class="col-md-6">
                        <input required id="textinput" name="fee" type="text" placeholder="" class="form-control input-md" value="" >

                    </div>
                    <div id="fee"></div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id"></label>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-lg-6" >
            <h2 align="center"><?php echo $_GET['val']?>'s Availability Calendar</h2>
    <div id="calendar" class="col-centered" style="width:700px;padding: 0px;">
    </div></div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" method="POST" action="calender/addEvent.php">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="color">
                                    <option value="">Choose</option>
                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                    <option style="color:#000;" value="#000">&#9724; Black</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start" class="col-sm-2 control-label">Start date</label>
                            <div class="col-sm-10">
                                <input type="text" name="start" class="form-control" id="start" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end" class="col-sm-2 control-label">End date</label>
                            <div class="col-sm-10">
                                <input type="text" name="end" class="form-control" id="end" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" method="POST" action="calender/editEventTitle.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="color">
                                    <option value="">Choose</option>
                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                    <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                    <option style="color:#000;" value="#000">&#9724; Black</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id" class="form-control" id="id">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<div class="footer-section" style="width:100% !important">
    <div class="container">
        <p style="color: white;">Poseidon Diving Centre<br>Galle Road<br>Hikkaduwa<Br>E-mail info@divingsrilanka.com<br>Tel 0094912277294</p>
    </div>
</div>
<!-- jQuery Version 1.11.1 -->
<script src="calender/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="calender/js/bootstrap.min.js"></script>

<!-- FullCalendar -->
<script src='calender/js/moment.min.js'></script>
<script src='calender/js/fullcalendar.min.js'></script>



        <?php
        require_once('calender/bdd.php');
        $instructor_uname = $_GET['val'];
        $connect=mysqli_connect('localhost','root','','diving_database');
        $query ="select instructorID from Professionals where username ='$instructor_uname'";
        $resultx=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($resultx);
        $instructor_id =  $row['instructorID'];

        //$row = $resultset->fetch_assoc();
        $sql = "SELECT id, title, start, end, color FROM events where instructor_id =$instructor_id";
        $req = $bdd->prepare($sql);
        $req->execute();
        $events = $req->fetchAll();
        echo '<pre>'; print_r($events); echo '</pre>';
        $today=date('Y-m-d');
        ?>


<script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '<?php echo $today?>',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                selectable: false,
                selectHelper: true,
                select: function(start, end) {

                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd').modal('show');
                },
                eventRender: function(event, element) {
                    element.bind('dblclick', function() {
                        $('#ModalEdit #id').val(event.id);
                        $('#ModalEdit #title').val(event.title);
                        $('#ModalEdit #color').val(event.color);
                        $('#ModalEdit').modal('show');
                    });
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position

                    edit(event);

                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

                    edit(event);

                },
                events: [
                    <?php foreach($events as $event):

                    $start = explode(" ", $event['start']);
                    $end = explode(" ", $event['end']);
                    if($start[1] == '00:00:00'){
                        $start = $start[0];
                    }else{
                        $start = $event['start'];
                    }
                    if($end[1] == '00:00:00'){
                        $end = $end[0];
                    }else{
                        $end = $event['end'];
                    }
                    ?>
                    {
                        id: '<?php echo $event['id']; ?>',
                        title: '<?php echo $event['title']; ?>',
                        start: '<?php echo $start; ?>',
                        end: '<?php echo $end; ?>',
                        color: '<?php echo $event['color']; ?>',
                    },
                    <?php endforeach; ?>
                ]
            });

            function edit(event){
                start = event.start.format('YYYY-MM-DD HH:mm:ss');
                if(event.end){
                    end = event.end.format('YYYY-MM-DD HH:mm:ss');
                }else{
                    end = start;
                }

                id =  event.id;

                Event = [];
                Event[0] = id;
                Event[1] = start;
                Event[2] = end;

                $.ajax({
                    url: 'editEventDate.php',
                    type: "POST",
                    data: {Event:Event},
                    success: function(rep) {
                        if(rep == 'OK'){
                            alert('Saved');
                        }else{
                            alert('Could not be saved. try again.');
                        }
                    }
                });
            }

        });

</script>

</html>