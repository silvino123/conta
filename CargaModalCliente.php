<?php

require('conec.php');

if($_POST['rowid']) {
    $id_cliente = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_cliente,I.Nombre,I.Direccion,I.Telefono,I.Correo,I.Rfc FROM clientes I  where I.id_cliente ='$id_cliente'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_cliente'];
    $nombre=$row['Nombre'];
    $direccion=$row['Direccion'];
    $telefono=$row['Telefono'];
    $correo=$row['Correo'];
    $rfc=$row['Rfc'];
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_cliente' name='id_cliente' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Direccion</label>
                <input type='text' class='form-control' id='Direccion' name='Direccion' required='' value='".$direccion."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Telefono</label>
                <input type='text' class='form-control' id='Telefono' name='Telefono' required='' value='".$telefono."'>
            </div>
            
            <div class='form-group'>
                <label for='sel1'>Correo</label>
                <input type='email' class='form-control' id='Correo' name='Correo' required='' value='".$correo."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>RFC</label>
                <input type='text' class='form-control' id='RFC' name='RFC' required='' value='".$rfc."' onkeyup='javascript:this.value=this.value.toUpperCase();'maxlength='13'>
            </div>
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
