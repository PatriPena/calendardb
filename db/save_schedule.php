<?php 
    require_once('db-connect.php');

    if($_SERVER['REQUEST_METHOD'] !='POST'){
        echo "<script> alert('OIGA: No datos para guardar.'); location.replace('./') </script>";
        $conn->close();
        exit;
    }

    extract($_POST);
    $allday = isset($allday);

    if(empty($id)){
        $sql = "INSERT INTO `schedule_list` (`title`,`description`,`start_datetime`,`end_datetime`) VALUES ('$title','$description','$start_datetime','$end_datetime')";
    }else{
        $sql = "UPDATE `schedule_list` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
    }

    $save = $conn->query($sql);

    if($save){
        echo "<script> alert('Cita guardada correctamente.'); location.replace('../') </script>";
    }else{
        echo "<pre>";
        echo "Ha ocurrido un horror.<br>";
        echo "Horror: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    //CERRAR SIEMPRE LA CONEXION CON LA  BASE DE DATOS!!!
    $conn->close();
?>