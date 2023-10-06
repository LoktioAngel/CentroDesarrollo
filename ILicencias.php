<?php
    // Recibir los valores del formulario
    $Numero = $_REQUEST['Numero'];
    $Tipo = $_REQUEST['Tipo'];
    $OficinaEmisora = $_REQUEST['OficinaEmisora'];
    $Vigencia = $_REQUEST['Vigencia'];
    $FechaDeExpedicion = $_REQUEST['FechaDeExpedicion'];
    $Estado = $_REQUEST['Estado'];
    $Restriccion = $_REQUEST['Restriccion'];
    $Conductor = $_REQUEST['Conductor'];

    // Imprimir los valores recibidos

    /*
    print("Numero = " . $Numero);
    print("<br>");
    print("Tipo = " . $Tipo);
    print("<br>");
    print("Oficina Emisora = " . $OficinaEmisora);
    print("<br>");
    print("Vigencia = " . $Vigencia);
    print("<br>");
    print("Fecha de Expedicion = " . $FechaDeExpedicion);
    print("<br>");
    print("Estado = " . $Estado);
    print("<br>");
    print("Restriccion = " . $Restriccion);
    print("<br>");
    print("Conductor = " . $Conductor);
    print("<br>");*/

    $SQL = "INSERT INTO licencias VALUES ('$Numero', '$Tipo', '$OficinaEmisora', '$Vigencia', '$FechaDeExpedicion', '$Estado', '$Restriccion', '$Conductor');";
    //print($SQL);

    //Enviar al sisitema manejador de base de dastos
    include("Controlador.php");//Mandas a llamar al php controlador

    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    
    if ($Result ==1){
        print("Registros insertado correctamente");
    }else{
        print("0 Registros Incertados");
    }
    Desconectar($Con);
?>
