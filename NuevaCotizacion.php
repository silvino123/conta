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
                <div class="row">
                <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-5">
                                   <img src="img/el.png" alt="logo">
                                    <address>
                                        <strong>Sycsoft, Software Developers.</strong><br>
                                        Calle López del Castillo # 30 Local 2 esquina callejón Campeche <br>
                                        Col.Olivares, 83180 Hermosillo, Sonora<br>
                                        <abbr ><strong>Telefono:</strong> </abbr>662276409, 6621039509<br>
                                        <span><strong>Vigencia:</strong> <input type="date" id="Vigencia" name="Vigencia"/></span>
                                        
                                       
                                    </address>
                                   
                                </div>
                                
                                <div class="col-sm-7 text-right">
                                  <h1 class="text-gray">Cotización</h1> 
                                  <span><strong>Fecha:</strong> <input type="date" id="fecha" name="fecha"/></span>
                                
                                 <br>
                                    <address>
                                    <span><strong>Solicitado por:</strong> <input type="text" id="cliente" name="cliente"/></span>
                                        
                                    </address>
                                  
                                </div>
                                <div class="col-lg-12">
                                <p>
                                <b> Nota: Esta contización es válida hasta la fecha de vigencia, pasada la fecha se tendrá que realizar la cotización nuevamente </b>
                                    </p>
                                 </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    
                                        <th colspan="4" class="text-center" style="background-color:#9e9e9e;color:#fff;vertical-align : middle;text-align:center" >Trabajo</th>
                                        
                                  
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="4">
                                        <div >
                                        <textarea id="Descripcion" class=" form-control" rows="5"></textarea>
                                           
                                            </div> 
                                    </td>
                                       
                                        
                                    </tr>
                                    <tr style="background-color:#9e9e9e;color:#fff" >
                                        <td colspan="1">Cant</td>
                                        <td colspan="2" class="text-center"  style="background-color:#9e9e9e;color:#fff;vertical-align : middle;text-align:center" >Descripcion</td>
                                        <td colspan="1">Total</td>
                                        
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td  colspan="1">3</td>
                                        <td  colspan="2" class="text-center" style="vertical-align : middle;text-align:center">$420.00</td>
                                        <td  colspan="1">$193.20</td>
                                       
                                    </tr>

                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td>$1026.00</td>
                                </tr>
                                <tr>
                                    <td><strong>IVA:</strong></td>
                                    <td>$235.98</td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>$1261.98</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <button class="btn btn-primary">Guardar y generar pdf</button>
                            </div>

                            <div class="well m-t"><strong>Comments</strong>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            </div>
                        </div>
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
        $(document).ready(function(){
            $('#EditarProyecto').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalProyecto.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
    
</body>

</html>
