<?php

if (!empty($_POST["registro"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["año"]) and !empty($_POST["color"])) {
        $placa_nueva=$_POST["placa"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $año=$_POST["año"];
        $color=$_POST["color"];
        $placa_antigua=$_POST["placa_antigua"];
        $sql=$conexion->query(" update vehiculo set placa='$placa_nueva', marca='$marca', modelo='$modelo', año='$año', color='$color' where placa='$placa_antigua'");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>ERROR AL MODIFICAR PRODUCTO</div>";
        }
        
    }else {
        echo "<div class='alert alert-warning'>CAMPOS VACIOS</div>";
    }
}

?>