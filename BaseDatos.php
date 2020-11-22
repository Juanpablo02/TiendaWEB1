<?php

    class BaseDatos{

        public $user = "root";
        public $password = "";

        public function conectarBD(){

            try{
                $infoBD = "mysql:host=localhost;dbname=cell_store1";
                $conexionBD = new PDO($infoBD,$this -> user,$this -> password);
                return $conexionBD;

            } catch (PDOException $error){
                echo($error -> getMessage());
            }

        }

        public function agregarProducto($agregarPro){

            $conexion = $this -> conectarBD();
            $insertarDatos = $conexion -> prepare($agregarPro);
            $resultado = $insertarDatos -> execute();

            if($resultado){
                echo("Exito");
            } else {
                echo("Error");
            }

        }

        public function buscarProducto($buscarPro){

            $conexion = $this -> conectarBD();
            $buscarDatos = $conexion -> prepare($buscarPro);
            $buscarDatos -> setFetchMode(PDO::FETCH_ASSOC);
            $buscarDatos -> execute();

            return($buscarDatos -> fetchAll());
            
        }

        public function eliminarProducto($eliminarPro){
            $conexion = $this -> conectarBD();
            $eliminarDatos = $conexion -> prepare($eliminarPro);
            $resultado = $eliminarDatos -> execute();

            if($resultado){
                echo("Exito al eliminar el producto");
            } else {
                echo("Error al eliminar el producto");
            }
        }

        public function editarProducto($editarPro){

            $conexion = $this -> conectarBD();
            $editarDatos = $conexion -> prepare($editarPro);
            $resultado = $editarDatos -> execute();

            if($resultado){
                echo("Exito");
            } else {
                echo("Error");
            }
        }
    }


?>