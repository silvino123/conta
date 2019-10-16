<?php

require('conec.php');

if($_POST['rowid']) {
    $id_gasto = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_gasto,I.Fecha,I.Monto,I.Descripcion FROM gastos I  where I.id_gasto ='$id_gasto'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_gasto'];
    $fecha=$row['Fecha'];
    $monto=$row['Monto'];
    $descripcion=$row['Descripcion'];
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_gasto' name='id_gasto' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Fecha</label>
                <input type='date' class='form-control' id='Fecha'  name='Fecha' required='' value='".$fecha."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Monto</label>
                <input type='number' class='form-control' id='Monto' name='Monto' required='' value='".$monto."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Descripcion</label>
                <input type='text' class='form-control' id='Descripcion' name='Descripcion' required='' value='".$descripcion."'>
            </div>
                                                                                                                        
           
    
        </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>