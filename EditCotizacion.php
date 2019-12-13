<?php 

require('conec.php');
$id_cotizacion=$_POST['id_cotizacion'];

$fecha=$_POST['Fecha'];
$cliente=$_POST['Cliente'];
$vigencia=$_POST['Vigencia'];
$trabajo=$_POST['Trabajo'];
$cantidad=$_POST['Cantidad'];
$descripcion=$_POST['Descripcion'];
$total=$_POST['Total'];
$subtotal=$_POST['Subtotal'];
$iva=$_POST['Iva'];
$totalneto=$_POST['Totalneto'];
$inicio=$_POST['inicio'];
$ivance=$_POST['avance'];
$final=$_POST['final'];
$cotizado=$_POST['cotizado'];
$nota=$_POST['nota'];
$qss ="UPDATE cotizaciones set Fecha='$fecha',Cliente='$cliente',Vigencia = '$vigencia',Trabajo='$trabajo',Cantidad = '$cantidad',Descripcion = '$descripcion',Total='$total',Subtotal = '$subtotal',Iva='$iva',Totalneto = '$totalneto',Inicio = '$inicio',Avance = '$avance',Final='$final',Cotizado = '$cotizado',Nota = '$nota' WHERE id_cotizacion='$id_cotizacion'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: cotizaciones.php');


 ?>