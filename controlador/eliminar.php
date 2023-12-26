<?php

if (!empty($_GET["placa"])) {
    $placa=$_GET["placa"];
    $sql=$conexion->query(" delete from vehiculo where placa='$placa'");
    if ($sql==1) {
        echo "<div class='alert alert-success'>REGISTRO ELIMINADO</div>";
    } else {
        echo "<div class='alert alert-danger'>ERROR AL ELMINAR REGISTRO</div>";
    }
    
}

?>