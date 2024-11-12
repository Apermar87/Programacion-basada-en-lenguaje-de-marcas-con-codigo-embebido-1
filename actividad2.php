
<!-- localhost/Tema3/actividad2.php -->

<?php

$matriz = array(
    "Pos1" => array ("01","02","03","04","05","06"),
    "Pos2" => array ("07","08","09","10","11","12"),
    "Pos3" => array ("13","14","15","16","17","18"),
    "Pos4" => array ("19","20","21","22","23","24"),
    "Pos5" => array ("25","26","27","28","29","30"),
    "Pos6" => array ("31","32","33","34","35","36"),
);

    foreach ($matriz as $valor)
    {
        
        foreach ($valor as &$posiciones ){
                print $posiciones;
                echo ("\n");
        }
        print ("</br>");
    }

    //No se hacerlo para insertar dato por dato en los arrays 








?>