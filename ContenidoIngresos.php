<?php 
require("conec.php");
$mesActual=date("m");
$añoActual=date("Y");

$consulta=mysqli_query($con,"SELECT * from ingresos WHERE YEAR(Fecha)='$añoActual' AND MONTH(Fecha)='$mesActual'");
        while($row = mysqli_fetch_array($consulta)){
         
            echo "<tr id='delete".$row['id_Ingreso']."'>";
            echo "<td>" . $row['id_Ingreso'] .  "</td>"; 
            echo "<td>" . $row['Fecha'] .  "</td>";  
            echo "<td>" . $row['Descripcion'] .  "</td>";
            echo "<td>" . $row['Monto'] .  "</td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>