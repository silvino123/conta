<?php

require('conec.php');

if($_POST['rowid']) {
    $id_ingreso = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_Ingreso,I.Fecha,I.Monto,I.Descripcion,I.Factura FROM ingresos I  where I.id_Ingreso ='$id_ingreso'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_Ingreso'];
    $fecha=$row['Fecha'];
    $monto=$row['Monto'];
    $descripcion=$row['Descripcion'];
    $factura=$row['Factura'];
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_Ingreso' name='id_Ingreso' required=''   value='".$id."'>
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
            </div>";
            if($factura=="Si"){
                echo" <div class='form-group'> <label class='i-checks'> <input type='checkbox' checked   name='Factura' value='".$factura."' id='Factura'>  Facturado </label></div>";
            }
            else{
                echo" <div class='form-group'> <label class='i-checks'> <input type='checkbox'   name='Factura' value='".$factura."' id='Factura'>  Facturado </label></div>";
            }
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
<script>
            $(document).ready(function () {
                var elm = document.getElementById('Factura');
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                    
                });
                if (checked != elm.checked) {
                   elm.value('Si');
                 }
            });
        </script>