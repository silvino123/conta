<?php 

require('conec.php');
$id_proyecto=$_POST['id_proyecto'];

$nombre=$_POST['Nombre'];
$estatus=$_POST['Estatus'];
$fechainicio=$_POST['FechaInicio'];
$fechaentrega=$_POST['FechaEntrega'];
$responsable=$_POST['Responsable'];
$porcentaje=$_POST['Porcentaje'];
$qss ="UPDATE proyectos set Nombre='$nombre',Estatus='$estatus',FechaInicio = '$fechainicio',FechaEntrega='$fechaentrega',Responsable = '$responsable',Porcentaje = '$porcentaje' WHERE id_proyecto='$id_proyecto'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: proyectos.php');


 ?>