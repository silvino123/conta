<?php 
require("conec.php");
$mesActual=date("m");
//$añoActual=date("Y");

$consulta=mysqli_query($con,"SELECT * from proyectos WHERE  MONTH(FechaEntrega)='$mesActual'");
        while($row = mysqli_fetch_array($consulta)){
         
            echo "<tr id='delete".$row['id_proyecto']."'>";
            echo "<td>" . $row['Nombre'] .  "</td>";
            if($row['Estatus']=="Aceptado"){
                echo "<td> <span class='label label-info'>". $row['Estatus'] .  "</span></td>";
            }
            if($row['Estatus']=="Desarrollo"){
                echo "<td> <span class='label label-warning'>". $row['Estatus'] .  "</span></td>";
            }
            if($row['Estatus']=="Cancelado"){
                echo "<td> <span class='label label-danger'>". $row['Estatus'] .  "</span></td>";
            }
            if($row['Estatus']=="Terminado"){
                echo "<td> <span class='label label-primary'>". $row['Estatus'] .  "</span></td>";
            }
          
            echo "<td>" . $row['FechaEntrega'] .  "</td>";  
            echo "<td>" . $row['Responsable'] .  "</td>";
            if($row['Porcentaje']<50){
                echo "<td class='text-danger'> <i class='fas fa-level-up-alt'></i> " . $row['Porcentaje'] .  "</td>";
            }
            else{
                echo "<td class='text-navy'> <i class='fas fa-level-up-alt'></i> " . $row['Porcentaje'] .  "</td>";
            }
           
            echo"</tr>";

        }
        mysqli_close($con);
?>