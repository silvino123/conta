<?php 
require('conec.php');


$id = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM usuarios WHERE id_usuario ='$id'");



 ?>