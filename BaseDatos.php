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
    }




?>