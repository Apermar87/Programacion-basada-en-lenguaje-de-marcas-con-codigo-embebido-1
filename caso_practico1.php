
<!-- localhost/Tema3/caso_practico1.php -->



<?php

$valorMinimo=0;
$valorMaximo=10;

//Bucle for
for ($var1=$valorMinimo; $var1<=$valorMaximo; $var1++) {
    echo $var1."</br>";
}

echo "</br>";

//Bucle while
while( $valorMinimo<=$valorMaximo ) {
    echo $valorMinimo."</br>";
    $valorMinimo++;
}


?>