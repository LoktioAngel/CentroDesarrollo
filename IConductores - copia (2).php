<?php
    // Recibir los valores del formulario
    $ID = $_POST['ID'];
    $Nombre = $_POST['Nombre'];
    $numEmergencia = $_POST['numEmergencia'];
    $donador = $_POST['donador'];
    $domicilio = $_POST['domicilio'];
    $GrupoSanguineo = $_POST['GrupoSanguineo'];
    $CP = $_POST['CP'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $Antiguedad = $_POST['Antiguedad'];
    $Foto = $_POST['Foto'];
    $Firma = $_POST['Firma'];

    // Imprimir los valores recibidos

    /*
    print("ID = " . $ID);
    print("<br>");
    print("Nombre = " . $Nombre);
    print("<br>");
    print("Numero de Emergencia = " . $numEmergencia);
    print("<br>");
    print("Donador = " . $donador);
    print("<br>");
    print("Domicilio = " . $domicilio);
    print("<br>");
    print("Grupo Sanguineo = " . $GrupoSanguineo);
    print("<br>");
    print("Codigo Postal = " . $CP);
    print("<br>");
    print("Fecha de Nacimiento = " . $FechaNacimiento);
    print("<br>");
    print("Antiguedad = " . $Antiguedad);
    print("<br>");
    print("Foto = " . $Foto);
    print("<br>");
    print("Firma = " . $Firma);
    print("<br>");*/

    // Forma la instruccion SQL para la insercion
    $SQL = "INSERT INTO conductores VALUES ('$ID', '$Nombre', '$numEmergencia', '$donador', '$domicilio', '$GrupoSanguineo', '$CP', '$FechaNacimiento', '$Antiguedad', '$Foto', '$Firma');";

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
