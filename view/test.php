<?php

    $enlace =  mysqli_connect('localhost', 'usuario_mysql', 'contraseña_mysql');
    if (!$enlace) {
        die('No pudo conectarse: ' . mysqli_error());
    }
    echo 'Conectado satisfactoriamente';
    mysqli_close($enlace);