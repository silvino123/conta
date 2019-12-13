<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from cotizaciones");
        while($row = mysqli_fetch_array($consulta)){
           
            echo "<tr id='delete".$row['id_cotizacion']."'>";
            echo "<td>SYC" . $row['id_cotizacion'] .  "</td>"; 
            echo "<td>" . $row['Fecha'] .  "</td>"; 
            echo "<td>" . $row['Cliente'] .  "</td>"; 
             echo "<td>" . $row['Vigencia'] .  "</td>"; 
            echo "<td> $ " . $row['Totalneto'] .  "</td>";
            
            echo "<td>
                         
            <a class='btn btn-success' href='EditarCotizacion.php?id=".$row['id_cotizacion']."'><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteAjax(".$row['id_cotizacion'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           <a class='btn btn-warning' href='VerCotizacion.php?id=".$row['id_cotizacion']."'><i class='fas fa-eye' title='Ver'></i></a>
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteAjax(id_cotizacion) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta Cotizacion?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarCotizacion.php',
           data:{delete_id:id_cotizacion},
           success:function(data){
             
           location.href ="cotizaciones.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>