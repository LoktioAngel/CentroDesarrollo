<?php
    // Recibir los valores del formulario
    $ID = $_GET['ID'];
    $Modelo = $_GET['Modelo'];
    $Color = $_GET['Color'];
    $Origen = $_GET['Origen'];
    $Servicio = $_GET['Servicio'];
    $Asiento = $_GET['Asiento'];
    $Marca = $_GET['Marca'];
    $Puerta = $_GET['Puerta'];
    $Cilindraje = $_GET['Cilindraje'];
    $TipoCombustible = $_GET['TipoCombustible'];
    $NIV = $_GET['NIV'];
    $Clase = $_GET['Clase'];
    $Linea = $_GET['Linea'];
    $Sublinea = $_GET['Sublinea'];
    $NumMotor = $_GET['NumMotor'];
    $Serie = $_GET['Serie'];
    $Transmision = $_GET['Transmision'];
    $Placa = $_GET['Placa'];

    // Imprimir los valores recibidos

    /*
    print("ID = " . $ID);
    print("<br>");
    print("Modelo = " . $Modelo);
    print("<br>");
    print("Color = " . $Color);
    print("<br>");
    print("Origen = " . $Origen);
    print("<br>");
    print("Servicio = " . $Servicio);
    print("<br>");
    print("Asiento = " . $Asiento);
    print("<br>");
    print("Marca = " . $Marca);
    print("<br>");
    print("Puerta = " . $Puerta);
    print("<br>");
    print("Cilindraje = " . $Cilindraje);
    print("<br>");
    print("Tipo de Combustible = " . $TipoCombustible);
    print("<br>");
    print("NIV = " . $NIV);
    print("<br>");
    print("Clase = " . $Clase);
    print("<br>");
    print("Linea = " . $Linea);
    print("<br>");
    print("Sublinea = " . $Sublinea);
    print("<br>");
    print("Numero de Motor = " . $NumMotor);
    print("<br>");
    print("Serie = " . $Serie);
    print("<br>");
    print("Transmision = " . $Transmision);
    print("<br>");
    print("Placa = " . $Placa);
    print("<br>");*/

    // Forma la instrucción SQL para la inserción
    $SQL = "INSERT INTO vehiculos (ID, Modelo, Color, Origen, Servicio, Asiento, Marca, Puerta, Cilindraje, TipoCombustible, NIV, Clase, Linea, Sublinea, NumMotor, Serie, Transmision, Placa) VALUES ('$ID', '$Modelo', '$Color', '$Origen', '$Servicio', '$Asiento', '$Marca', '$Puerta', '$Cilindraje', '$TipoCombustible', '$NIV', '$Clase', '$Linea', '$Sublinea', '$NumMotor', '$Serie', '$Transmision', '$Placa');";

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
