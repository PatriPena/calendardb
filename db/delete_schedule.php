<?php 
    require_once('db-connect.php');

    if(!isset($_GET['id'])){
        echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
        $conn->close();
        exit;
    }

    $delete = $conn->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");

    if($delete){
        echo "<script> alert('Cita borrada correctamente.'); location.replace('../') </script>";
    }else{
        echo "<pre>";
        echo "Ha ocurrido un horror.<br>";
        echo "Horror: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    
    $conn->close();
?>
