<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehiculo</title>
    <!--CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid row">
        <?php
        include "modelo/conexion.php";
        include "controlador/eliminar.php";
        include "controlador/registro.php";
        ?>
        <h1 class="text-center">Registro de Vehículos</h1>
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center">Registrar Nuevo Vehículo</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Año</label>
                <input type="text" class="form-control" name="año">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Color</label>
                <input type="text" class="form-control" name="color">
            </div>
            <button type="submit" class="btn btn-primary" name="registro" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Placa</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Año</th>
                        <th scope="col">Color</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from vehiculo");
                    while ($datos=$sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->Placa ?></td>
                            <td><?= $datos->Marca ?></td>
                            <td><?= $datos->Modelo ?></td>
                            <td><?= $datos->Año ?></td>
                            <td><?= $datos->Color ?></td>
                            <td>
                                <a href= "modificar.php?placa=<?= $datos->Placa ?>" type="edit" class="btn btn-small btn-warning" name="editar" value="ok">Editar</a>
                                <a href= "index.php?placa=<?= $datos->Placa ?>" type="delete" class="btn btn-small btn-danger" name="eliminar" value="ok">Eliminar</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>