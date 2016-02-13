<?php

    function openBD(){
        $bdLink =  mysqli_connect('localhost', 'root', '', 'smartcamp');
        if (!$bdLink) {
            die('No pudo conectarse: ' . mysqli_error());
        }

        return $bdLink;
    }

    function closeBD($bdLink){
        mysqli_close($bdLink);
    }

