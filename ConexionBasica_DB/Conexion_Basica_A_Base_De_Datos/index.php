<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Conexión básica a base de datos</title>
</head>

<body>
    <?php
    include("conexion.php");
    ?>
    <div class="container py-5 text-center">
    <a href="formulario.php" class="btn btn-primary">Nuevo registro</a>
    <h1>Clientes:</h1>
    </div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Salario</th>
                <th scope="col">Cuenta</th>
            </tr>
        </thead>
        <tbody>
            <?php
             
             $stmt = $connn->prepare("SELECT * FROM clientes;");                                        
             $stmt->execute();                    
             
             $stmt->setFetchMode(PDO::FETCH_ASSOC);                                                        
             foreach ($stmt->fetchAll() as $row) {
                 echo "  
                         <tr>
                             <th>" . $row['nombre'] . "</th>
                             <th>" . $row['salario'] ."</th>
                             <th>" . $row['cuenta'] ."</th>
                         </tr>                              
                 ";
             }   
             
             $conn = null;
            ?>
        </tbody>
    </table>
</body>

</html>