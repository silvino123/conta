<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from usuarios");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_usuario']."'>";
            echo "<td>" . $row['id_usuario'] .  "</td>"; 
            echo "<td>" . $row['Nombre'] .  "</td>"; 
            echo "<td>" . $row['Correo'] .  "</td>"; 
             echo "<td>" . $row['Contrasena'] .  "</td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-success' data-id=".$row['id_usuario']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteAjax(".$row['id_usuario'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteAjax(id_Usuario) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Usuario?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarUsuario.php',
           data:{delete_id:id_Usuario},
           success:function(data){
             
           location.href ="usuarios.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>