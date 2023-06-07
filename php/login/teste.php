<?php
include_once  "db.php";
if(conectaBD()){
    echo "Conectado";
    insereUsuario("eli","eli","156123");
    echo "<br><pre>";
    var_dump(recuperarUSuario(1));
    "</pre>";
}else{
    echo "erro";
}