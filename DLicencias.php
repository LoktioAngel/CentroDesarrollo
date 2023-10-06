<?php
    $Numero=$_GET['Numero'];//obtenemos los datos del html para borrarlos

    //constir sql
    $SQL="DELETE FROM LICENCIAS WHERE Numero='$Numero';";
    print($SQL);

    //enviar al SMBD
    INCLUDE("Controlador.php");
    $Con = Conectar();
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);

?>