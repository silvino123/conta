<?php 

require('conec.php');

$vigencia=$_POST['Vigencia'];
$fecha=$_POST['Fecha'];
$cliente=$_POST['Cliente'];
$trabajo=$_POST['Trabajo'];
$cantidad=$_POST['Cantidad'];
$descripcion=$_POST['Descripcion'];
$total=$_POST['Total'];
$subtotal=$_POST['Subtotal'];
$iva=$_POST['Iva'];
$totalneto=$_POST['Totalneto'];
$inicio=$_POST['inicio'];
$avance=$_POST['avance'];
$final=$_POST['final'];
$cotizado=$_POST['cotizado'];
$nota=$_POST['nota'];


	$insert= "INSERT INTO cotizaciones (id_cotizacion,Fecha,Cliente,Vigencia,Trabajo,Cantidad,Descripcion,Total,Subtotal,Iva,Totalneto,Inicio,Avance,Final,Cotizado,Nota) 
				  values ('','$fecha','$cliente','$vigencia','$trabajo','$cantidad','$descripcion','$total','$subtotal','$iva','$totalneto','$inicio','$avance','$final','$cotizado','$nota')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar Cotizacion");

mysqli_close($con);

echo'<script type="text/javascript">
    
    location.href="cotizaciones.php";
    </script>';

 ?>