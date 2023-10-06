<?php
$ID = $_GET['ID'];
include("Controlador.php");
$Con = Conectar();
$SQL = "SELECT * FROM conductores WHERE ID='$ID';";
$Result = Ejecutar($Con, $SQL);
$Fila = mysqli_fetch_row($Result);
Desconectar($Con);
?>

<html>
    <form method="post" action="UConductores.php">

        <label>Conductores</label>
        <p></p>

        <label>ID</label>
        <input type="text" id="ID" name="ID" value="<?php print($Fila[0]); ?>">

        <br>
        <label>Nombre</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php print($Fila[1]); ?>">

        <br>
        <label>numEmergencia</label>
        <input type="text" id="numEmergencia" name="numEmergencia" value="<?php print($Fila[2]); ?>">
        
        <br>
        <label>donador</label>
        <input type="text" id="donador" name="donador" value="<?php print($Fila[3]); ?>">

        <br>
        <label>domicilio</label>
        <input type="text" id="domicilio" name="domicilio" value="<?php print($Fila[4]); ?>">

        <br>
        <label>GrupoSanguineo</label>
        <input type="text" id="GrupoSanguineo" name="GrupoSanguineo" value="<?php print($Fila[5]); ?>">

        <br>
        <label>CP</label>
        <input type="text" id="CP" name="CP" value="<?php print($Fila[6]); ?>">

        <br>
        <label>FechaNacimiento</label>
        <input type="text" id="FechaNacimiento" name="FechaNacimiento" value="<?php print($Fila[7]); ?>">

        <br>
        <label>Antiguedad</label>
        <input type="text" id="Antiguedad" name="Antiguedad" value="<?php print($Fila[8]); ?>">

        <br>
        <label>Foto</label>
        <input type="text" id="Foto" name="Foto" value="<?php print($Fila[9]); ?>">

        <br>
        <label>Firma</label>
        <input type="text" id="Firma" name="Firma" value="<?php print($Fila[10]); ?>">

        <br>
        <input type="submit">

    </form>
</html>
