<html>
    <form method="get" action="CVehiculos.php">
        <label for="Criterio">Criterio</label>
        <input type="text" name="Criterio" id="Criterio">
        <br><br>
        <label for="Atributo">Atributo:</label>
        <br><br>
        <input type="radio" id="Atributo" name="Atributo" value="ID">
        <label for="ID">ID</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Modelo">
        <label for="Modelo">Modelo</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Color">
        <label for="Color">Color</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Origen">
        <label for="Origen">Origen</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Servicio">
        <label for="Servicio">Servicio</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Asiento">
        <label for="Asiento">Asiento</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Marca">
        <label for="Marca">Marca</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Puerta">
        <label for="Puerta">Puerta</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Cilindraje">
        <label for="Cilindraje">Cilindraje</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="TipoCombustible">
        <label for="TipoCombustible">Tipo de Combustible</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="NIV">
        <label for="NIV">NIV</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Clase">
        <label for="Clase">Clase</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Linea">
        <label for="Linea">Linea</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Sublinea">
        <label for="Sublinea">Sublinea</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="NumMotor">
        <label for="NumMotor">Número de Motor</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Serie">
        <label for="Serie">Serie</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Transmision">
        <label for="Transmision">Transmisión</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Placa">
        <label for="Placa">Placa</label>
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
        $SQL = "SELECT * FROM Vehiculos WHERE $Atributo LIKE '%$Criterio%';";
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
