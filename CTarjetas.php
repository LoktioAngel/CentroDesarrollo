<form method="get" action="CTarjetas.php">
    <label for="Criterio">Criterio</label>
    <input type="text" name="Criterio" id="Criterio">
    <br><br>
    <label for="Atributo">Atributo:</label>
    <br><br>
    <input type="radio" id="Atributo" name="Atributo" value="Folio">
    <label for="Folio">Folio</label>
    <br>
    <input type="radio" id="Atributo" name="Atributo" value="fechaExp">
    <label for="fechaExp">Fecha de Expedición</label>
    <br>
    <input type="radio" id="Atributo" name="Atributo" value="TipoMovimiento">
    <label for="TipoMovimiento">Tipo de Movimiento</label>
    <br>
    <input type="radio" id="Atributo" name="Atributo" value="OficinaExp">
    <label for="OficinaExp">Oficina de Expedición</label>
    <br>
    <input type="radio" id="Atributo" name="Atributo" value="Vigencia">
    <label for="Vigencia">Vigencia</label>
    <br>
    <input type="radio" id="Atributo" name="Atributo" value="Propietario">
    <label for="Propietario">Propietario</label>
    <br>
    <input type="radio" id="Atributo" name="Atributo" value="Vehiculo">
    <label for="Vehiculo">Vehiculo</label>
    <br><br>
    <input type="submit" value="Enviar">
</form>



<?php
    if(isset($_GET['Criterio'])){
        $Criterio = $_GET['Criterio'];
        $Atributo = $_GET['Atributo'];

        include("Controlador.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM Tarjetas WHERE $Atributo LIKE '%$Criterio%';";
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
