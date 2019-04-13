<?php
$equipment_id = $_GET['equipment_id'] ;

    $conn = new mysqli('localhost', 'root', '', 'diving_database');
    if ($conn->error) {
        echo $conn->error;
    } else {
        $query = "DELETE FROM `equipment` WHERE `EquipID` = $equipment_id";
        if ($conn->query($query)===TRUE) {
            echo "New record del successfully";
        }
        else{
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        header("Location: equipment_admin.php");
    }

?>