<?php
    // Recibir los valores del formulario
    $ID = $_REQUEST['ID'];
    $Nombre = $_REQUEST['Nombre'];
    $RFC = $_REQUEST['RFC'];
    $Domicilio = $_REQUEST['Domicilio'];
    $CP = $_REQUEST['CP'];

    // Imprimir los valores recibidos

    /*
    print("ID = " . $ID);
    print("<br>");
    print("Nombre = " . $Nombre);
    print("<br>");
    print("RFC = " . $RFC);
    print("<br>");
    print("Domicilio = " . $Domicilio);
    print("<br>");
    print("CP = " . $CP);
    print("<br>");*/

    // Forma la instrucción SQL para la inserción
    $SQL = "INSERT INTO propietarios (ID, Nombre, RFC, Domicilio, CP) VALUES ('$ID', '$Nombre', '$RFC', '$Domicilio', '$CP');";

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
