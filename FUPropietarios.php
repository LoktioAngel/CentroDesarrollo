<?php
        $ID = $_GET['ID'];
        include("Controlador.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM Propietarios WHERE ID = '$ID';";
        $Result = Ejecutar($Con, $SQL);
        $Fila = mysqli_fetch_row($Result);
        Desconectar($Con);

?>


<html>
    <form method="post" action="UPropietarios.php">

        <lable>Propietarios</lable>
        <p></p>


        <label>ID</label>
        <input type="text" id="ID" name="ID" value="<?php print($Fila[0]);?>">

        <br>
        <label>Nombre</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php print($Fila[1]);?>">

        <br>
        <label>RFC</label>
        <input type="text" id="RFC" name="RFC" value="<?php print($Fila[2]);?>">
        
        <br>
        <label>Domicilio</label>
        <input type="text" id="Domicilio" name="Domicilio" value="<?php print($Fila[3]);?>">

        <br>
        <label>CP</label>
        <input type="text" id="CP" name="CP" value="<?php print($Fila[4]);?>">

        <br>
        <input type="submit">

    </form>
</html>
