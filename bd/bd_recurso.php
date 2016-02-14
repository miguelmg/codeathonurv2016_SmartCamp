<?php

    require_once('bd.php');
    require_once('../model/Recurso.php');

    function getRecursos($bd){
        $recursos = array();

        $sql_query = "SELECT * FROM recurso";

        $resultado = selectBD($sql_query, $bd);

        if(isset($resultado) && count($resultado) > 0){
            foreach($resultado as $recurso){
                $recursos[] = new Recurso($recurso);
            }
        }

        return $recursos;
    }

    function getRecurso($idRecurso, $bd){
        $sql_query = "SELECT * FROM recurso WHERE id=".mysqli_real_escape_string($bd, $idRecurso);

        $resultado = selectBD($sql_query, $bd);
        if(isset($resultado) && count($resultado) > 0){
            $recurso = new Recurso($resultado);
        }

        return $recurso;
    }
