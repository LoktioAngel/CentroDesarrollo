<html>
    <form method="get" action="CMultas.php">
        <label for="Criterio">Criterio</label>
        <input type="text" name="Criterio" id="Criterio">
        <br><br>
        <label for="Atributo">Atributo:</label>
        <br><br>
        <input type="radio" id="Atributo" name="Atributo" value="ID">
        <label for="ID">ID</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Fecha">
        <label for="Fecha">Fecha</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Hora">
        <label for="Hora">Hora</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Motivo">
        <label for="Motivo">Motivo</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Garantia">
        <label for="Garantia">Garantía</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Observacion">
        <label for="Observacion">Observación</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Lugar">
        <label for="Lugar">Lugar</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Fundamento">
        <label for="Fundamento">Fundamento</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Agente">
        <label for="Agente">Agente</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Vehiculo">
        <label for="Vehiculo">Vehiculo</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Tarjeta">
        <label for="Tarjeta">Tarjeta</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Licencia">
        <label for="Licencia">Licencia</label>
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
        $SQL = "SELECT * FROM Multas WHERE $Atributo LIKE '%$Criterio%';";
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
