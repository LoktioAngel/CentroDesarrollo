<?php
include("Controlador.php");
$ID = $_POST['ID'];
$Nombre = $_POST['Nombre'];
$numEmergencia = $_POST['numEmergencia'];
$donador = $_POST['donador'];
$domicilio = $_POST['domicilio'];
$GrupoSanguineo = $_POST['GrupoSanguineo'];
$CP = $_POST['CP'];
$FechaNacimiento = $_POST['FechaNacimiento'];
$Antiguedad = $_POST['Antiguedad'];
$Foto = $_POST['Foto'];
$Firma = $_POST['Firma'];

$Con = Conectar();
$SQL = "UPDATE conductores SET Nombre='$Nombre', numEmergencia='$numEmergencia', donador='$donador', domicilio='$domicilio', GrupoSanguineo='$GrupoSanguineo', CP='$CP', FechaNacimiento='$FechaNacimiento', Antiguedad='$Antiguedad', Foto='$Foto', Firma='$Firma' WHERE ID='$ID';";
$Result = Ejecutar($Con, $SQL);

if ($Result == 1) {
    print("Registros actualizados correctamente");
} else {
    print("0 Registros actualizados");
}
Desconectar($Con);
?>
