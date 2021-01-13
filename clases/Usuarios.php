<?php

    class usuarios{
        public function registroUsuario($datos){
            //instanciamos la conexion
            $c=new conectar();
            $conecion=$c->conexion();

            $fecha=date('Y-m-d');

            $sql="INSERT into usuarios (nombre,
                                        apellido,
                                        email,
                                        password,
                                        fechaCaptura)
                            values ('$datos[0]',
                                    '$datos[1]',
                                    '$datos[2]',
                                    '$datos[3]',
                                    '$fecha')";

            return mysqli_query($conecion,$sql);
        }
    }

?>