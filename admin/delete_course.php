<?php


$course_id = $_GET['course_id'] ;

    $conn = new mysqli('localhost', 'root', '', 'diving_database');
    if ($conn->error) {
        echo $conn->error;
    } else {
        $query = "DELETE FROM `courses` WHERE `Course_ID` = $course_id";
        if ($conn->query($query)===TRUE) {
            echo "New record del successfully";
        }
        else{
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        header("Location: services_admin.php");
    }

?>