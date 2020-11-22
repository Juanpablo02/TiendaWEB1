<?php

    include ("BaseDatos.php");

    $id = $_GET["id"];

    $transaccion = new BaseDatos();

    $eliminarPro = "DELETE FROM productos WHERE idProducto='$id'";

    $transaccion -> eliminarProducto($eliminarPro);

    header("location:bodega.php");

?>