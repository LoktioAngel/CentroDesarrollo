<?php
    $Servidor= "127.0.0.1";
    $Usuario= "root";
    $Pwd="";
    $DataBase="ControlVehicular30";
    $Con=mysqli_connect($Servidor,$Usuario,$Pwd,$DataBase);
    $SQL= "INSERT INTO AGENTES VALUES ('2','JUAN','QRO','YYYY')";

    $Result=mysqli_query($Con,$SQL);
    print($Result);
    mysqli_close($Con);
?>