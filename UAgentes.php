<?php
        include("Controlador.php");
        $Nombre=$_POST['Nombre'];
        $Asignacion=$_POST['Asignacion'];
        $Firma=$_POST['Firma'];
        $Numero=$_POST['Numero'];
        
        $Con = Conectar();
        $SQL = "UPDATE Agentes SET Nombre='$Nombre',Asignacion='$Asignacion',Firma='$Firma'WHERE Numero='$Numero';";
        $Result = Ejecutar($Con, $SQL);



        if ($Result ==1){
            print("Registros insertado correctamente");
        }else{
            print("0 Registros Incertados");
        }
        Desconectar($Con);

?>