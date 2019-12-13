<?php
require('conec.php');

$correo = $_POST['correo'];
$password = $_POST['password'];

$rs  = "SELECT * FROM usuarios WHERE Correo = '$correo' AND Contrasena = '$password'";

$qs = mysqli_query($con, $rs);
$row    = mysqli_fetch_assoc($qs);
// if (!isset($row)) {
//     header("location: login.html");
// }
         $id  = $row['id_usuario'];
         $nombre= $row['Nombre'];
         $password = $row['Contrasena'];
        
        
    if ($row["Correo"] == $correo && $row["Contrasena"] == $password) {
       
        session_start();
        $_SESSION['Nombre'] = $nombre;
       
        $_SESSION['id_usuario'] = $id;
      
         

        echo "
                <script language='JavaScript'>
                var mensaje='Sesion iniciada';
                alert(mensaje);
                document.location.href = 'Reporte.php';
                </script>";

        

    } 
    else {
        echo "
                <script language='JavaScript'>
                var mensaje='Usuario o contraseña incorrecto';
                alert(mensaje);

                </script>";
       echo "
                <script>
                 document.location.href = 'login.html';
                </script> ";
        

        
    }

?>
 <!-- <script language='JavaScript'>
         function Sesion(){
                alertify
               .alert('Sesion iniciada', function(){
                  alertify.message('OK');
                  });
         }
 </script> -->