<?php

    session_start();//con esto el php sabe que estamos usando seciones

    session_destroy();//destruimos las seciones


    header("location:../index.php");//redirigimos
?>