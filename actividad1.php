
<!-- localhost/Tema3/actividad1.php -->

<?php

$varUsuario="User1";
$varContaseña=1234;

if ($varUsuario == "User1"){
    if($varContaseña==1234){
        echo"Genial puedes pasar";
    } else {echo "Lo siento, el usuario es correcto, pero la contraseña no";
    }
} else {
    if($varUsuario != "User1"){
        if($varContaseña == 1234){
            echo "Lo siento, este usuario no es valido";
        }else {echo "No has acertado ninguna";}
    }

}





?>
