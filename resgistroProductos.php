<?php

    include ("BaseDatos.php");

    if(isset($_POST["enviar"])){

        $nombre = $_POST["nombre"];
        $imagen = $_POST["imagen"];
        $marca = $_POST["marca"];
        $referencia = $_POST["referencia"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];
        $descripcion = $_POST["descripcion"];

        $transaccion = new BaseDatos;

        $agregarPro = "INSERT INTO productos (nombre, imagen, marca, referencia, precio, fecha, descripcion) VALUES ('$nombre','$imagen','$marca','$referencia','$precio','$fecha','$descripcion')";

        $transaccion -> agregarProducto($agregarPro);

    }

?>