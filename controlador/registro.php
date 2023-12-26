<?php
if (!empty($_POST["registro"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["año"]) and !empty($_POST["color"])) {

        $placa = $_POST["placa"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $año = $_POST["año"];
        $color = $_POST["color"];

        $sql=$conexion->query("insert into vehiculo(Placa, Marca, Modelo, Año, Color) values('$placa', '$marca', '$modelo', '$año', '$color')");
        if ($sql==1) {
            echo "Vehiculo Registrado";
        } else {
            echo "No se ha podido registrar el vehiculo";
        }
    } else {
        echo "Faltan datos por ingresar";
    }
}
?>