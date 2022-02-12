<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulario</title>
</head>

<body>
    <div class="container py-5 text-center">
        <h1>Crear Cliente</h1>

        <form class="form" action="store.php" method="post">

            <div class="mb-3">

                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del Cliente" required>
                <p class="form-text">Escriba el nombre del cliente:</p>

            </div>

            <div class="mb-3">

                <input type="number" id="salario" name="salario" class="form-control" placeholder="Saldo del Cliente" step="0.01" required>
                <p class="form-text">Escribe el saldo del Empleado </p>

            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01" require>Tipo de cuenta</label>
                <select class="form-select" id="cuenta" name="cuenta" required>
                    <option selected disabled>Escoger...</option>
                    <option value="normal">normal</option>
                    <option value="premium">premium</option>
                </select>
            </div>


            <button type="submit" class="btn btn-info">Guardar Cliente</button>

        </form>

    </div>
</body>

</html>