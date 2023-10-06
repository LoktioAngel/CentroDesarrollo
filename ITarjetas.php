<?php
    // Recibir los valores del formulario
    $Folio = $_REQUEST['Folio'];
    $fechaExp = $_REQUEST['fechaExp'];
    $TipoMovimiento = $_REQUEST['TipoMovimiento'];
    $OficinaExp = $_REQUEST['OficinaExp'];
    $Vigencia = $_REQUEST['Vigencia'];
    $Propietario = $_REQUEST['Propietario'];
    $Vehiculo = $_REQUEST['Vehiculo'];

    // Imprimir los valores recibidos

    /*
    print("Folio = " . $Folio);
    print("<br>");
    print("Fecha de Expiracion = " . $fechaExp);
    print("<br>");
    print("Tipo de Movimiento = " . $TipoMovimiento);
    print("<br>");
    print("Oficina de Expedicion = " . $OficinaExp);
    print("<br>");
    print("Vigencia = " . $Vigencia);
    print("<br>");
    print("Propietario = " . $Propietario);
    print("<br>");
    print("Vehiculo = " . $Vehiculo);
    print("<br>");*/

    // Forma la instrucción SQL para la inserción
    $SQL = "INSERT INTO tarjetas VALUES ('$Folio', '$fechaExp', '$TipoMovimiento', '$OficinaExp', '$Vigencia', '$Propietario', '$Vehiculo');";
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
