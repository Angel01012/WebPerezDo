<?php
$FechaHoy = date('y/m/d H:i:s');
$SiguienteSemana = time() + (7*4*60*60);
$FechaExpira = date('y/m/d H:i:s',$SiguienteSemana) . '<br>';

echo '<b> Fecha de creacion de cookie: </b>'.$FechaHoy.'<br>';
setcookie("Ultima visita", $FechaHoy,time()+(7*24*60*60));
?>