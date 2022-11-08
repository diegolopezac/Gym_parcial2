<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];
    $sugerencias = $_POST["sugerencias"];
    $meses = $_POST["meses"];
    $fecha = $_POST["fecha"];

    $sql = "INSERT INTO usuarios (nombre, edad, sexo, sugerencias, meses, fecha)". 
    "VALUES ('".$nombre."', ".$edad.", '".$sexo."','".$sugerencias."','".$meses."', '".$fecha."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$consexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>