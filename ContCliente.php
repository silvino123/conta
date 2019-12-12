<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from clientes");
        while($row = mysqli_fetch_array($consulta)){
         
            echo "<tr id='delete".$row['id_cliente']."'>";
            echo "<td>" . $row['id_cliente'] .  "</td>"; 
            echo "<td>" . $row['Nombre'] .  "</td>"; 
            echo "<td>" . $row['Direccion'] .  "</td>"; 
             echo "<td>" . $row['Telefono'] .  "</td>"; 
            echo "<td>" . $row['Correo'] .  "</td>";
            echo "<td>" . $row['Rfc'] .  "</td>";
            echo "<td>
                         
            <a data-target='#EditarCliente' data-toggle='modal' class='btn btn-success' data-id=".$row['id_cliente']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteAjax(".$row['id_cliente'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteAjax(id_cliente) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este cliente?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarCliente.php',
           data:{delete_id:id_cliente},
           success:function(data){
             
           location.href ="cliente.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>