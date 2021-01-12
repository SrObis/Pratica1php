<?php

    class conectar{//los metodos privados solo se podran aceder desde dentro de la clase o del metodo
        private $servidor="localhost";
        private $usuario="root";
        private $password="";
        private $bd="ventas";

        public function conexion(){
            $conein=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->bd);
            return $conexion;
        }
    }

    $obj= new conectar();
    var_dump($obj->conexion());
    if($obj->conexion()){
        echo "conectado";//para saber si los parametros son corectos y se conecta
    }
?>