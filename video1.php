
<!-- localhost/Tema3/video1.php -->

<?php

    //$arrayNumeros = array("pos1"=>"1","pos2"=>"2","pos3"=>"3");
    //$arrayNumeros = array("a","b","c");
    //$arrayNumeros = array(1=>"hola",2=>"adiós",3=>"qué tal?");

    $arrayNumeros = array(1,2,3);

    foreach ($arrayNumeros as $valor)           #Recorre las posiciones del array y las va guardando en la variable $valor
    {
        print($valor);                                              #Nos imprime solo los valores sin las posiciones
        print("</br>");
    }
    
    unset($valor);

    //print_r($arrayNumeros);                   Nos imprime tambien la posición

?>