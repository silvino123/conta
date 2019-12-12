<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$correo=$_POST['Correo'];
$rfc=$_POST['Rfc'];

	$insert= "INSERT INTO clientes (id_cliente,Nombre,Direccion,Telefono,Correo,Rfc) 
				  values ('','$nombre','$direccion','$telefono','$correo','$rfc')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar cliente");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="cliente.php";
    </script>';

 ?>