<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from proyectos");
        while($row = mysqli_fetch_array($consulta)){
            $cliente= $row['Cliente'];
            $consulta2=mysqli_query($con,"SELECT * from clientes where id_cliente='$cliente'");
               $row2= mysqli_fetch_array($consulta2);
            echo "<tr id='delete".$row['id_proyecto']."'>";
            echo "<td>" . $row['id_proyecto'] .  "</td>"; 
            echo "<td>" . $row['Nombre'] .  "</td>"; 
            echo "<td>" . $row['Estatus'] .  "</td>"; 
             echo "<td>" . $row['FechaInicio'] .  "</td>"; 
            echo "<td>" . $row['FechaEntrega'] .  "</td>";
            echo "<td>" . $row['Responsable'] .  "</td>";
            echo "<td>" . $row['Porcentaje'] . "%". "</td>";
            echo "<td>" . $row2['Nombre'] .  "</td>";
            echo "<td>
                         
            <a data-target='#EditarProyecto' data-toggle='modal' class='btn btn-success' data-id=".$row['id_proyecto']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteAjax(".$row['id_proyecto'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteAjax(id_proyecto) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Proyecto?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarProyecto.php',
           data:{delete_id:id_proyecto},
           success:function(data){
             
           location.href ="proyectos.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>