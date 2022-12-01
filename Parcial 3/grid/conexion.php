<?php
$servidor="localhost";
$basedatos="Web";
$usuario="root";
$password="162460132-2";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("no se pudo conectar al servidor");
$consulta = "select * from login";   
$registro =mysqli_query($con,$consulta) or die("No se puso hacer la consulta");

$result = mysqli_fetch_all($registro,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);
//var_dump($result);
?>