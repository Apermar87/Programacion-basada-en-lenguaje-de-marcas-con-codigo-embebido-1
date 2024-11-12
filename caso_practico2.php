
<!-- localhost/Tema3/caso_practico2.php-->

<?php

$Usuarios = array(
     "User1" => array("User1", "Pass1","admin"),
     "User2" => array("User2","Pass2","user"),
     "User3" => array("User3","Pass3","admin"),
     "User4" => array("User4","Pass4","user"),
);

    echo "El usuario 1 tiene perfil: " . $Usuarios["User1"][2]. "</br>";
    echo "El usuario 2 tiene perfil: " . $Usuarios["User2"][2]. "</br>";
    echo "El usuario 3 tiene perfil: " . $Usuarios["User3"][2]. "</br>";
    echo "El usuario 4 tiene perfil: " . $Usuarios["User4"][2]. "</br>";

?>