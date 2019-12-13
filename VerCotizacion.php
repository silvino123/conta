<?php 

$id=$_GET['id'];
require('conec.php');

    $rs = mysqli_query($con, "SELECT * FROM cotizaciones where id_cotizacion ='$id'");
    $row = mysqli_fetch_array($rs);
    $id_cotizacion=$row['id_cotizacion'];
    $fecha=$row['Fecha'];
    $cliente =$row['Cliente'];
    $vigencia =$row['Vigencia'];
    $trabajo=$row['Trabajo'];
    $cantidad=$row['Cantidad'];
    $descripcion=$row['Descripcion'];
    $total=$row['Total'];
    $subtotal=$row['Subtotal'];
    $iva=$row['Iva'];
    $totalneto=$row['Totalneto'];
    $inicio=$row['Inicio'];
    $avance=$row['Avance'];
    $final=$row['Final'];
    $cotizado=$row['Cotizado'];
    $nota=$row['Nota'];
    
    ?>
    <!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sycsoft | Cotizaciones</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
    <?php include 'Slide-Menu.html'; ?>  
        <div id="page-wrapper" class="gray-bg">  
            <?php include 'Nav.html'; ?>  
                <div class="wrapper wrapper-content">
                
                <br>
                <br>
                <div class="row" id="zonas">
                <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl" >
                            <div class="row">
                            
                                <div class="col-sm-5">
                                   <img src="img/el.png" alt="logo">
                                    <address>
                                        <strong>Sycsoft, Software Developers.</strong><br>
                                        Calle López del Castillo # 30 Local 2 esquina callejón Campeche <br>
                                        Col.Olivares, 83180 Hermosillo, Sonora<br>
                                        <abbr ><strong>Telefono:</strong> </abbr>662276409, 6621039509<br>
                                        <span><strong>Vigencia: </strong><?php  echo $vigencia?></span>
                                        
                                       
                                    </address>
                                   
                                </div>
                                
                                <div class="col-sm-7 text-right" style="vertical-align : middle;text-align:right;margin-top:-30px">
                                  <h1 class="text-gray"><b>Cotización</b></h1> 
                                  <span><strong>Fecha:</strong> <?php  echo $fecha?></span>
                                   <input type="number" id="id_cotizacion" name="id_cotizacion" style="border:none;display:none" required="" bloked value="<?php  echo $id_cotizacion?>"/></span>
                                 <br>
                                    <address>
                                    <span><strong>Solicitado por: </strong><?php  echo $cliente?></span>
                                        
                                    </address>
                                  
                                </div>
                                <div class="col-lg-12">
                                <p>
                                <b> Nota: Esta cotización es válida hasta la fecha de vigencia, pasada la fecha se tendrá que realizar la cotización nuevamente </b>
                                    </p>
                                 </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    
                                        <th colspan="4" class="text-center" style="background-color:#424242;color:#fff;vertical-align : middle;text-align:center" >TRABAJO</th>
                                        
                                  
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="4">
                                        <div >
                                        
                                       <p> <?php  echo $trabajo ?></p>
                                            </div> 
                                    </td>
                                       
                                        
                                    </tr>
                                    <tr style="background-color:#424242;color:#fff" >
                                        <td colspan="1" ><b>CANT</b></td>
                                        <td colspan="2" class="text-center"  style="color:#fff;vertical-align : middle;text-align:center" ><b>DESCRIPCION</b></td>
                                        <td colspan="1" style="color:#fff;vertical-align : middle;text-align:right" ><b>TOTAL</b></td>
                                        
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td  colspan="1" ><?php  echo $cantidad ?></td>
                                        <td  colspan="2" class="text-center" style="vertical-align : middle;text-align:center">
                                        <div >
                                       
                                           <p><?php  echo $descripcion ?></p>
                                            </div>
                                    </td>
                                        <td  colspan="1" style="vertical-align : middle;text-align:right" ><?php  echo $total ?></td>
                                       
                                    </tr>

                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table style="vertical-align : middle;text-align:right" class="table invoice-total" >
                                <tbody>
                                <tr style="vertical-align : middle;text-align:right">
                                    <td style="vertical-align : middle;text-align:right"><strong>Sub Total: $</strong></td>
                                    <td style="vertical-align : middle;text-align:right"><?php  echo $subtotal ?></td>
                                </tr>
                                <tr>
                                    <td><strong>IVA: $</strong></td>
                                    <td><?php  echo $iva ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL: $</strong></td>
                                    <td><?php  echo $totalneto ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class=" text-left">
                               <table >
                               <thead>
                                    
                                <th colspan="3" class="text-center" style="background-color:#424242;color:#fff;vertical-align : middle;text-align:center" >COMENTARIOS</th>
                                        
                                  
                                    </thead>
                                    <tbody>
                                    <tr>
                                        
                                        <td  colspan="3" class="text-center">Método de Pago</td>
                                        
                                        
                                    </td>
                                    <tr>
                                        
                                        <td  colspan="2" >30% Inicio del Proyecto $</td>
                                        
                                        <td  colspan="1" class="text-center" style="vertical-align : middle;text-align:center"><?php  echo $inicio?> </td>
                        
                                    </tr>
                                    <tr>
                                        
                                        <td  colspan="2" >40% Dividido entre los entregables  $</td>
                                        
                                        <td  colspan="1" class="text-center" style="vertical-align : middle;text-align:center"><?php  echo $avance?> </td>
                        
                                    </tr>
                                    <tr>
                                        
                                        <td  colspan="2" >30% Final del proyecto $</td>
                                        
                                        <td  colspan="1" class="text-center" style="vertical-align : middle;text-align:center"><?php  echo $final?> </td>
                        
                                    </tr>
                                    <tr>
                                        
                                        <td  colspan="2" class="text-center" ><b>Total Cotizado $<b></td>
                                        
                                        <td  colspan="1" class="text-center" style="vertical-align : middle;text-align:center"><?php  echo $cotizado?> </td>
                        
                                    </tr>
                                    <br>
                                    <tr>
                                        
                                       
                                        
                                        <td  colspan="3" ><b>Nota:</b><?php  echo $nota?> </td>
                        
                                    </tr>
                                    </tbody>
                               </table>
                            </div>
                            
                            
                            <br>
                            
                            <div class="text-center">
                               <h3 style="vertical-align : middle;text-align:center"><b>¡Gracias por hacer negocios!</b></h3>
                            </div>
                        </div>
                </div>
            </div>

            </div>
            <div class="row">
            <div class="col-lg-12">
            <div class="text-right">
                            <form method="post" action="pdf.php">
                            <input type='text' id="htmlgenerado" name="htmlgenerado" style="display:none"/>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-download"></i> generar PDF</button>
                            </form>
                            </div>    
                            </div>
            </div>
                </div>

        </div>
</div>
 
                            
                           
                       

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
    <script src="js/plugins/footable/footable.all.min.js"></script>
    <script src="js/alertifyjs/alertify.js"></script>
    <script src="js/alertifyjs/alertify.min.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
    <script type="text/javascript">
document.getElementById("Total").addEventListener('keyup', autoCompleteNew);

function autoCompleteNew(e) {            
    var value = $(this).val();         
    $("#Subtotal").val(value); 
    var iva=$("#Subtotal").val()*0.16;
    $("#Iva").val(iva);
    var a = parseFloat(value);
    var b = parseFloat(iva);
    var total = a+b;
     $('#Totalneto').val(total);
     var inicio=$("#Totalneto").val()*0.30;
     $("#inicio").val(inicio);
     var avance=$("#Totalneto").val()*0.40;
     $("#avance").val(avance);
     var final=$("#Totalneto").val()*0.30;
     $("#final").val(final);
     $('#cotizado').val(total);
}
</script>
     <script>
  $( document ).ready(function() {
    var html = document.getElementById('zonas').innerHTML;
    document.getElementById('htmlgenerado').value = html;
    
});

  </script>
</body>

</html>
