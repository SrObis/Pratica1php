<?php

    class conectar{//los metodos privados solo se podran aceder desde dentro de la clase o del metodo
        private $servidor="localhost";
        private $usuario="root";
        private $password="usbw";
        private $bd="ventas";

        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->bd);
            return $conexion;
        }
    }

    
?>