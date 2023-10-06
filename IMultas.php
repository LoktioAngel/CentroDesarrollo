<?php
    // Recibir los valores del formulario
    $ID = $_REQUEST['ID'];
    $Fecha = $_REQUEST['Fecha'];
    $Hora = $_REQUEST['Hora'];
    $Motivo = $_REQUEST['Motivo'];
    $Garantia = $_REQUEST['Garantia'];
    $Observacion = $_REQUEST['Observacion'];
    $Lugar = $_REQUEST['Lugar'];
    $Fundamento = $_REQUEST['Fundamento'];
    $Agente = $_REQUEST['Agente'];
    $Vehiculo = $_REQUEST['Vehiculo'];
    $Tarjeta = $_REQUEST['Tarjeta'];
    $Licencia = $_REQUEST['Licencia'];

    // Imprimir los valores recibidos

    /*
    print("ID = " . $ID);
    print("<br>");
    print("Fecha = " . $Fecha);
    print("<br>");
    print("Hora = " . $Hora);
    print("<br>");
    print("Motivo = " . $Motivo);
    print("<br>");
    print("Garantia = " . $Garantia);
    print("<br>");
    print("Observacion = " . $Observacion);
    print("<br>");
    print("Lugar = " . $Lugar);
    print("<br>");
    print("Fundamento = " . $Fundamento);
    print("<br>");
    print("Agente = " . $Agente);
    print("<br>");
    print("Vehiculo = " . $Vehiculo);
    print("<br>");
    print("Tarjeta = " . $Tarjeta);
    print("<br>");
    print("Licencia = " . $Licencia);
    print("<br>");
    */

    // Forma la instrucción SQL para la inserción
    $SQL = "INSERT INTO multas (ID, Fecha, Hora, Motivo, Garantia, Observacion, Lugar, Fundamento, Agente, Vehiculo, Tarjeta, Licencia) VALUES ('$ID', '$Fecha', '$Hora', '$Motivo', '$Garantia', '$Observacion', '$Lugar', '$Fundamento', '$Agente', '$Vehiculo', '$Tarjeta', '$Licencia');";
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
