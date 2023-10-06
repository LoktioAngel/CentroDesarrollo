<?php
    $Folio=$_GET['Folio'];//obtenemos los datos del html para borrarlos

    //constir sql
    $SQL="DELETE FROM TARJETAS WHERE Folio='$Folio';";
    print($SQL);

    //enviar al SMBD
    INCLUDE("Controlador.php");
    $Con = Conectar();
    $Result=Ejecutar($Con,$SQL);
    Desconectar($Con);

?>