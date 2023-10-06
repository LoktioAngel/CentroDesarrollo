<html>
    <form method="Get" action="CConductores.php">
        <label for="Criterio">Criterio</label>
        <input type="text" name="Criterio" id="Criterio">
        <br><br>
        <label for="Atributo">Atributo:</label>
        <br><br>
        <input type="radio" id="Atributo" name="Atributo" value="ID">
        <label for="ID">ID</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Nombre">
        <label for="Nombre">Nombre</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="numEmergencia">
        <label for="numEmergencia">Número de Emergencia</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="donador">
        <label for="donador">Donador</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="domicilio">
        <label for="domicilio">Domicilio</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="GrupoSanguineo">
        <label for="GrupoSanguineo">Grupo Sanguíneo</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="CP">
        <label for="CP">Código Postal</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="FechaNacimiento">
        <label for="FechaNacimiento">Fecha de Nacimiento</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Antiguedad">
        <label for="Antiguedad">Antigüedad</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Foto">
        <label for="Foto">Foto</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Firma">
        <label for="Firma">Firma</label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</html>


<?php
    if(isset($_GET['Criterio'])){
        $Criterio = $_GET['Criterio'];
        $Atributo = $_GET['Atributo'];

        include("Controlador.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM Conductores WHERE $Atributo LIKE '%$Criterio%';";
        $Result = Ejecutar($Con, $SQL);
    
        print("<table border>");
        print("<tr>");
        
        $contador = mysqli_num_fields($Result);
        for ($i = 0; $i < $contador; $i++) {
            $column_name = mysqli_fetch_field($Result);
            print("<th>" . $column_name->name . "</th>");
        }
        
        print("</tr>");
    
        while ($Fila = mysqli_fetch_row($Result)) {
            print("<tr>");
            $contador = mysqli_num_fields($Result);
            $i = 0;
            while ($i < $contador) {
                print("<td>" . $Fila[$i] . "</td>");
                $i = $i + 1;
            }
            print("</tr>");
        }
    
        print("</table>");
        
        $n = mysqli_num_rows($Result);
        print("Cantidad de registros: " . $n);
    
        Desconectar($Con);
    }

?>
