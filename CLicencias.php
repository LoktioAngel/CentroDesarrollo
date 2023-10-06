<html>
    <form method="get" action="CLicencias.php">
        <label for="Criterio">Criterio</label>
        <input type="text" name="Criterio" id="Criterio">
        <br><br>
        <label for="Atributo">Atributo:</label>
        <br><br>
        <input type="radio" id="Atributo" name="Atributo" value="Numero">
        <label for="Numero">Número</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Tipo">
        <label for="Tipo">Tipo</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="OficinaEmisora">
        <label for="OficinaEmisora">Oficina Emisora</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Vigencia">
        <label for="Vigencia">Vigencia</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="FechaDeExpedicion">
        <label for="FechaDeExpedicion">Fecha de Expedición</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Estado">
        <label for="Estado">Estado</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Restriccion">
        <label for="Restriccion">Restricción</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Conductor">
        <label for="Conductor">Conductor</label>
        <br><br>
        <input type="submit" value="Buscar">
    </form>

</html>

<?php
    if(isset($_GET['Criterio'])){
        $Criterio = $_GET['Criterio'];
        $Atributo = $_GET['Atributo'];

        include("Controlador.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM Licencias WHERE $Atributo LIKE '%$Criterio%';";
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
