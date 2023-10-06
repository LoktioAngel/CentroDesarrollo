<?php
    include("Controlador.php");
    $Con=Conectar();
    $SQL="SELECT * FROM Agentes;";
    $Result=Ejecutar($Con,$SQL);
    // Procesar resultados
    $N=mysqli_num_rows($Result);
    print($N);
    //

    Desconectar($Con);
?>