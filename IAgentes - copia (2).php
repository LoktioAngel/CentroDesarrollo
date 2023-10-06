<?php
    //Recibir los valores del formulario
    $Numero = $_POST['Numero'];
    $Nombre = $_POST['Nombre'];
    $Asignacion = $_POST['Asignacion'];
    $Firma = $_POST['Firma'];

    //Imprimir los valores recibidos
    /*
    print("Numero = ".$Numero);
    print("<br>");
    print("Nombre = ".$Nombre);
    print("<br>");
    print("Asignación = ".$Asignacion);
    print("<br>");
    print("Firma = ".$Firma);
    print("<br>");
    */

    //Formar una instrucción SQL
    $SQL = "INSERT INTO Agentes VALUES('$Numero','$Nombre','$Asignacion','$Firma');";
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