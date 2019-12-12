<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$estatus=$_POST['Estatus'];
$fechainicio=$_POST['FechaInicio'];
$fechaentrega=$_POST['FechaEntrega'];
$responsable=$_POST['Responsable'];
$porcentaje=$_POST['Porcentaje']?? '';
$cliente=$_POST['Cliente'];

	$insert= "INSERT INTO proyectos (id_proyecto,Nombre,Estatus,FechaInicio,FechaEntrega,Responsable,Porcentaje,Cliente) 
				  values ('','$nombre','$estatus','$fechainicio','$fechaentrega','$responsable','$porcentaje','$cliente')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar proyecto");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="proyectos.php";
    </script>';

 ?>