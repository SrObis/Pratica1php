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

        public function loginUser(){
            $c=new conectar();
            $conecion=$c->conection();
            $password=sha1($datos[1]);//la contraseña deve ir encriptada porque en la bd esta encriptada sino no funcionara

            $_SESSION['usuario']=$datos[0];

            $_SESSION['iduser']=self::traeID($datos);

            $sql="SELECT * from usuarios 
                                where email='$datos[0]'
                                and password='$password' ";
            $result=mysqli_query($conexion,$sql);

            if(mysqli_num_rows($result)>0){
                return 1;
            }else{//si no encuentra ninguna coincidencia
                return 0;
            }
        }
        public function traiID($datos){
            $c=new conectar();
            $conecion=$c->conection();

            $password=sha1($datos[1]);

            $sql="SELECT id_usuarios 
                        from usuarios 
                            where email='$datos[0]'
                            and password='$password' ";

            $result=mysqli_query($conecion,$sql);

            return mysqli_fetch_row($result)[0]; //nos da el primer puesto del arregle

        }
    }

?>