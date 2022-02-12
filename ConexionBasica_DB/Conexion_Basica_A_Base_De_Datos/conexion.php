<?php

class Conexionn {
    function ConexionDB(){
        $host = 'localhost';
        $dbname = 'primeradbphp';
        $userName = 'root';
        $password = 'LejKZJdp';

        try {
            $conn = new PDO ("mysql:host=$host;dbname=$dbname",$userName,$password);
            //echo  ("Conexión exitosa");
             // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE,     PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exp ){
            echo  ("No se logró la conexión: $dbname, error: $exp");
        }

        return $conn;
    }
}

    $NuevaConexion = new Conexionn();
    $connn = $NuevaConexion->ConexionDB();

?>