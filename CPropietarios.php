<html>
    <form method="GET" action="CPropietarios.php">
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
        <input type="radio" id="Atributo" name="Atributo" value="RFC">
        <label for="RFC">RFC</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="Domicilio">
        <label for="Domicilio">Domicilio</label>
        <br>
        <input type="radio" id="Atributo" name="Atributo" value="CP">
        <label for="CP">CP</label>
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
    $SQL = "SELECT * FROM Propietarios WHERE $Atributo LIKE '%$Criterio%';"; 
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

