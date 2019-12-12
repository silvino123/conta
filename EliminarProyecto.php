<?php 
require('conec.php');


$id = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM proyectos WHERE id_proyecto ='$id'");



 ?>