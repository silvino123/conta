<?php 

require('conec.php');
$id_ingreso=$_POST['id_Ingreso'];

$fecha=$_POST['Fecha'];
$monto=$_POST['Monto'];
$descripcion=$_POST['Descripcion'];
$factura=$_POST['Factura']?? '';


$qss ="UPDATE ingresos set Fecha='$fecha',Monto='$monto',Descripcion = '$descripcion',Factura='$factura' WHERE id_Ingreso='$id_ingreso'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: Ingresos.php');


 ?>