<?php 

require('conec.php');

$monto=$_POST['Monto'];
$descripcion=$_POST['Descripcion'];
$fecha=$_POST['Fecha'];


	$insert= "INSERT INTO ingresos (id_Ingreso,Fecha,Monto,Descripcion) 
				  values ('','$fecha','$monto','$descripcion')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar ingreso");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="ingresos.php";
    </script>';

 ?>