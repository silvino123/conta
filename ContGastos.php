<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from gastos");
        while($row = mysqli_fetch_array($consulta)){
         
            echo "<tr id='delete".$row['id_gasto']."'>";
            echo "<td>" . $row['id_gasto'] .  "</td>"; 
            echo "<td>" . $row['Fecha'] .  "</td>"; 
             echo "<td>" . $row['Monto'] .  "</td>"; 
            echo "<td>" . $row['Descripcion'] .  "</td>";
           
            echo "<td>
                         
            <a data-target='#EditarGasto' data-toggle='modal' class='btn btn-success' data-id=".$row['id_gasto']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteAjax(".$row['id_gasto'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteAjax(id_gasto) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Gasto?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarGasto.php',
           data:{delete_id:id_gasto},
           success:function(data){
             
           location.href ="Egresos.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>