<?php
$id = $_POST['Angel001012'];
$servidor="localhost";
$basedatos="Web";
$usuario="root";
$password="162460132-2";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("no se pudo conectar al servidor");
$consulta = "select * from login where Usuario = $id";
$registro =mysqli_query($con,$consulta) or die("No se puso hacer la consulta");

$result = mysqli_fetch_array($registro,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);
//var_dump($result);


?>