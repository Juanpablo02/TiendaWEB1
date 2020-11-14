<?php

    include ("BaseDatos.php");

    if(isset($_POST["enviar"])){

        $imagen = $_POST["imagen"];
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];
        $referencia = $_POST["referencia"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];
        $descripcion = $_POST["descripcion"];

        $transaccion = new BaseDatos;

        $agregarPro = "INSERT INTO productos (nombre, marca, referencia, precio, fecha, descripcion) VALUES ('$nombre','$marca','$referencia','$precio','$fecha','$descripcion')";

        $transaccion -> agregarProducto($agregarPro);

    }

?>