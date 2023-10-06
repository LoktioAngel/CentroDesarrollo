<?php
    $ID=$_GET['ID'];//obtenemos los datos del html para borrarlos

    //constir sql
    $SQL="DELETE FROM CONDUCTORES WHERE ID='$ID';";
    print($SQL);

    //enviar al SMBD
    INCLUDE("Controlador.php");
    $Con = Conectar();
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);

?>