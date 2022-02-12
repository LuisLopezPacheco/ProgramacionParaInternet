<?php
    include("conexion.php");

    if(count($_POST) > 0){
        $nombre = $_POST['nombre'];
        $salario = $_POST['salario'];
        $cuenta = $_POST['cuenta'];
    
        $sql = "INSERT INTO clientes (nombre,salario,cuenta) VALUES ('$nombre','$salario','$cuenta') ";

        $connn -> exec($sql);
       
        echo "New records created successfully";
    }
    else{
        echo "No hay información enviada";
    }
    header('Location: index.php');
?>