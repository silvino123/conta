<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from ingresos");
        while($row = mysqli_fetch_array($consulta)){
         
            echo "<tr id='delete".$row['id_Ingreso']."'>";
            echo "<td>" . $row['id_Ingreso'] .  "</td>"; 
            echo "<td>" . $row['Fecha'] .  "</td>"; 
             echo "<td>" . $row['Monto'] .  "</td>"; 
            echo "<td>" . $row['Descripcion'] .  "</td>";
            if( $row['Factura']=="Si"){

               echo "<td><i class='fas fa-check' style='color:green'></i></td>";
            }
            else{
              echo "<td>" . $row['Factura'] .  "</td>";
            }
           
            echo "<td>
                         
            <a data-target='#EditarIngreso' data-toggle='modal' class='btn btn-success' data-id=".$row['id_Ingreso']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteAjax(".$row['id_Ingreso'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteAjax(id_Ingreso) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este ingreso?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarIngreso.php',
           data:{delete_id:id_Ingreso},
           success:function(data){
             
           location.href ="Ingresos.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>