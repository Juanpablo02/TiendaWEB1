<?php 
    include("BaseDatos.php");

    $id = $_GET["id"];

    if(isset($_POST["editar"])){

        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];
        $imagen = $_POST["imagen"];

        $transaccion = new BaseDatos();

        $editarPro = "UPDATE productos SET nombre='$nombre', marca='$marca', precio='$precio', imagen='$imagen', descripcion='$descripcion' WHERE idProducto='$id'";

        $transaccion->editarProducto($editarPro);

        header("location:bodega.php");
    }


?>