<?php 

require('conec.php');
$id_cliente=$_POST['id_cliente'];

$nombre=$_POST['Nombre'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$correo=$_POST['Correo'];
$rfc=$_POST['RFC'];

$qss ="UPDATE clientes set Nombre='$nombre',Direccion='$direccion',Telefono = '$telefono',Correo='$correo',Rfc = '$rfc' WHERE id_cliente='$id_cliente'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: cliente.php');


 ?>