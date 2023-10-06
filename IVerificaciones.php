<?php
    // Recibir los valores del formulario
    $ID = $_GET['ID'];
    $Tecnico = $_GET['Tecnico'];
    $CentroVerificacion = $_GET['CentroVerificacion'];
    $DatosPrueba = $_GET['DatosPrueba'];
    $Dictamen = $_GET['Dictamen'];
    $Periodo = $_GET['Periodo'];
    $Vigencia = $_GET['Vigencia'];
    $FechaVerificacion = $_GET['FechaVerificacion'];
    $idTarjeta = $_GET['idTarjeta'];

    // Imprimir los valores recibidos

    /*
    print("ID = " . $ID);
    print("<br>");
    print("Tecnico = " . $Tecnico);
    print("<br>");
    print("Centro de Verificacion = " . $CentroVerificacion);
    print("<br>");
    print("Datos de Prueba = " . $DatosPrueba);
    print("<br>");
    print("Dictamen = " . $Dictamen);
    print("<br>");
    print("Periodo = " . $Periodo);
    print("<br>");
    print("Vigencia = " . $Vigencia);
    print("<br>");
    print("Fecha de Verificacion = " . $FechaVerificacion);
    print("<br>");
    print("ID Tarjeta = " . $idTarjeta);
    print("<br>");*/

    // Forma la instrucción SQL para la inserción
    $SQL = "INSERT INTO verificaciones (ID, Tecnico, CentroVerificacion, DatosPrueba, Dictamen, Periodo, Vigencia, FechaVerificacion, idTarjeta) VALUES ('$ID', '$Tecnico', '$CentroVerificacion', '$DatosPrueba', '$Dictamen', '$Periodo', '$Vigencia', '$FechaVerificacion', '$idTarjeta');";
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
