<?php

    function openBD(){
        $bd =  mysqli_connect('localhost', 'root', '', 'smartcamp');
        if (!$bd) {
            die('No pudo conectarse: ' . mysqli_error());
        }

        return $bd;
    }

    function closeBD($bd){
        mysqli_close($bd);
    }

    function selectBD($sql, $bd){
        $array_resultados = array();
        if ($resultado = $bd->query($sql)) {
            if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    $array_resultados[] = $row;
                }
            }
            return $array_resultados;
        }else{
            var_dump($bd->error);
            return null;
        }
    }