<html>
    <form method="GET" action="CAgentes.php">
        <label>Criterio</label>
        <input type="text" name="Criterio" id="Criterio">
        <label>Atributo:</label>
        <br/><br/>
        <input type="radio" id="Atributo" name="Atributo" value="Numero">
        <label>Numero</label>
        <br/>
        <input type="radio" id="Atributo" name="Atributo" value="Nombre">
        <label>Nombre</label>
        <br/>
        <input type="radio" id="Atributo" name="Atributo" value="Asignacion">
        <label>Asignacion</label>
        <br/>
        <input type="radio" id="Atributo" name="Atributo" value="Firma">
        <label>Firma</label>
        <br/><br/>
        <input type="submit">
        <br/><br/>
    </form>
</html>

<?php
    if(isset($_GET['Criterio'])){
        $Criterio = $_GET['Criterio'];
        $Atributo = $_GET['Atributo'];

        include("Controlador.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM Agentes WHERE $Atributo LIKE '%$Criterio%';";
        $Result = Ejecutar($Con, $SQL);

        //Proceso en tabla
        print("<table border>");
        print("<tr>");

        $contador = mysqli_num_fields($Result);
        for ($i = 0; $i < $contador; $i++) {
            $column_info = mysqli_fetch_field($Result);
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
        //


        Desconectar($Con);

    }
?>
