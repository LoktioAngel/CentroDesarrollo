<?php
        $Numero = $_GET['Numero'];
        include("Controlador.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM Agentes WHERE NUMERO = '$Numero';";
        $Result = Ejecutar($Con, $SQL);
        $Fila = mysqli_fetch_row($Result);
        Desconectar($Con);

?>

<html>
    <form method="POST" action = "UAgentes.php">

        <label>Agentes</label>
        <p></p>

        <label>Numero</label>
        <input type= "text" id="Numero" name ="Numero" value="<?php print($Fila[0]);?>">

        <br>
        <label>Nombre</label>
        <input type= "text" id="Nombre" name ="Nombre" value="<?php print($Fila[1]);?>">

        <br>
        <label>Asignación</label>
        <input type= "text" id="Asignacion" name ="Asignacion" value="<?php print($Fila[2]);?>">
        
        <br>
        <label>Firma</label>
        <input type= "text" id="Firma" name ="Firma" value="<?php print($Fila[3]);?>">
        
        <input type = "submit">

    </form>
</html>