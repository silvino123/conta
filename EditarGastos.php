<?php 

require('conec.php');
$id_gasto=$_POST['id_gasto'];

$fecha=$_POST['Fecha'];
$monto=$_POST['Monto'];
$descripcion=$_POST['Descripcion'];


$qss ="UPDATE gastos set Fecha='$fecha',Monto='$monto',Descripcion = '$descripcion' WHERE id_gasto='$id_gasto'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: Egresos.php');


 ?>