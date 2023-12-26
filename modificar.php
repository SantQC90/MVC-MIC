<?php
include "modelo/conexion.php";
$placa = $_GET["placa"];
$sql = $conexion->query(" select * from vehiculo where placa='$placa' ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center">Modificar Registro</h3>
        <input type="hidden" name="placa_antigua" value="<?php echo $placa; ?>">
        <?php
        include "controlador/modificar.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa" value="<?= $datos->Placa?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" value="<?= $datos->Marca?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" value="<?= $datos->Modelo?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Año</label>
                <input type="text" class="form-control" name="año" value="<?= $datos->Año?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Color</label>
                <input type="text" class="form-control" name="color" value="<?= $datos->Color?>">
            </div>
        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="registro" value="ok">Modificar</button>
    </form>
</body>
</html>