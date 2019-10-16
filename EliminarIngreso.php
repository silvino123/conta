<?php 
require('conec.php');


$id = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM ingresos WHERE id_Ingreso ='$id'");



 ?>