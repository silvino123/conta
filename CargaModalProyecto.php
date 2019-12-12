<?php

require('conec.php');

if($_POST['rowid']) {
    $id_proyecto = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_proyecto,I.Nombre,I.Estatus,I.FechaInicio,I.FechaEntrega,I.Responsable,I.Porcentaje,I.Cliente FROM proyectos I  where I.id_proyecto ='$id_proyecto'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_proyecto'];
    $nombre=$row['Nombre'];
    $estatus=$row['Estatus'];
    $fechainicio=$row['FechaInicio'];
    $fechaentrega=$row['FechaEntrega'];
    $responsable=$row['Responsable'];
    $porcentaje=$row['Porcentaje'];
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_proyecto' name='id_proyecto' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Estatus</label>
                <select class='select2_demo_1 form-control' id='Estatus' name='Estatus'>";
                                               if($estatus== "Aceptado"){
                                               echo" <option value='".$estatus."'selected>Aceptado</option>
                                                <option value='Desarrollo'>En Desarollo</option>
                                                <option value='Cancelado'>Cancelado</option>
                                                 <option value='Terminado'>Terminado</option>";
                                               }
                                               if($estatus=="Desarrollo"){
                                                echo" <option value='Aceptado'>Aceptado</option>
                                                <option value='".$estatus."'selected>En Desarollo</option>
                                                <option value='Cancelado'>Cancelado</option>
                                                 <option value='Terminado'>Terminado</option>";
                                               }
                                               if($estatus=="Cancelado"){
                                                echo" <option value='Aceptado'>Aceptado</option>
                                                <option value='Desarrollo'>En Desarollo</option>
                                                <option value='".$estatus."'selected>Cancelado</option>
                                                 <option value='Terminado'>Terminado</option>";

                                               }
                                                if($estatus=="Terminado"){
                                                    echo" <option value='Aceptado'>Aceptado</option>
                                                    <option value='Desarrollo'>En Desarollo</option>
                                                    <option value='Cancelado'>Cancelado</option>
                                                     <option value='".$estatus."'selected>Terminado</option>";
                                                }
                                                       
                                                                 
                                                                  echo" </select>
               
            </div>
            <div class='form-group'>
                <label for='sel1'>Fecha de Inicio</label>
                <input type='date' class='form-control' id='FechaInicio' name='FechaInicio' required='' value='".$fechainicio."'>
            </div>
            
            <div class='form-group'>
                <label for='sel1'>Fecha de Entrega</label>
                <input type='date' class='form-control' id='FechaEntrega' name='FechaEntrega' required='' value='".$fechaentrega."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Responsable</label>
                <input type='text' class='form-control' id='Responsable' name='Responsable' required='' value='".$responsable."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Porcentaje</label>
                <input type='text' class='form-control' id='Porcentaje' name='Porcentaje' required='' value='".$porcentaje."'>
            </div>
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
