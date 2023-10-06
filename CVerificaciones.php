<html>
    <form method="get" action="CVerificaciones.php">
        <label for="Criterio">Criterio</label>
        <input type="text" name="Criterio" id="Criterio">
        <br><br>
        <label for="Atributo">Atributo:</label>
        <br><br>
        <input type="radio" id="Atributo" name="Atributo" value="ID">
        <label for="ID">ID</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Tecnico">
        <label for="Tecnico">Técnico</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="CentroVerificacion">
        <label for="CentroVerificacion">Centro de Verificación</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="DatosPrueba">
        <label for="DatosPrueba">Datos de Prueba</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Dictamen">
        <label for="Dictamen">Dictamen</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Periodo">
        <label for="Periodo">Periodo</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Vigencia">
        <label for="Vigencia">Vigencia</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="FechaVerificacion">
        <label for="FechaVerificacion">Fecha de Verificación</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="idTarjeta">
        <label for="idTarjeta">ID de Tarjeta</label>
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
        $SQL = "SELECT * FROM Verificaciones WHERE $Atributo LIKE '%$Criterio%';";
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
