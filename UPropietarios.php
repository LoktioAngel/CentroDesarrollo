<?php
        include("Controlador.php");
        $ID = $_REQUEST['ID'];
        $Nombre = $_REQUEST['Nombre'];
        $RFC = $_REQUEST['RFC'];
        $Domicilio = $_REQUEST['Domicilio'];
        $CP = $_REQUEST['CP'];
        
        $Con = Conectar();
        $SQL = "UPDATE Propietarios SET Nombre='$Nombre',RFC='$RFC',Domicilio='$Domicilio',CP='$CP'WHERE ID='$ID';";
        $Result = Ejecutar($Con, $SQL);



        if ($Result ==1){
            print("Registros insertado correctamente");
        }else{
            print("0 Registros Incertados");
        }
        Desconectar($Con);

?>