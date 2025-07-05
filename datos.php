<?php

define("SERVIDOR", "sql104.infinityfree.com");
    define("BD", "if0_36916005_dbagenda");
    define("USUARIO", "if0_36916005");
    define("CLAVE", "G1UrhUvseao");

    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;

    $conexion = new PDO($dsn,USUARIO,CLAVE);

    $consulta = "insert into t_usuarios(nombreape, telefono, correo, mensaje) values(?,?,?,?)";
    $rpta = $conexion->prepare($consulta);
    $rpta->bindParam(1,$_POST["nom"]);
    $rpta->bindParam(2,$_POST["tel"]);
    $rpta->bindParam(3,$_POST["cor"]);
    $rpta->bindParam(4,$_POST["men"]);

    $rpta->execute();
    $nfilas = $rpta->rowCount();
    if($nfilas > 0):
        echo "guardado";
    else:
        echo "no guardado";
endif;
?>