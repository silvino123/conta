<?php 
session_start();
if (!isset( $_SESSION["Nombre"])){
   
   header("location:login.html");
 
 }

?>

<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sycsoft | Proyectos</title>

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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#proyecto">Agregar Proyecto</button>
                <br>
                <br>
                <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3>Proyectos Registrados</h3>

                            
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Buscar...">

                            <table class="footable table table-stripped table-hover" data-page-size="15" data-filter=#filter>
                                <thead>
                                <tr style="background-color:#1c84c6;color:#fff">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Estatus</th>
                                    <th >Fecha de Inicio</th>
                                    <th >Fecha de Entrega</th>
                                    <th >Responsable</th>
                                    <th >Porcentaje de avance</th>
                                    <th >Cliente</th>
                                    <th  >Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  
                            require('ContProyecto.php');
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                </div>

        </div>
</div>
<div class="modal inmodal" id="proyecto" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        
                                            <h4 class="modal-title">Registrar Proyecto</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                        
                                        <form class="form-horizontal" method="POST" action="RegistrarProyecto.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required=""maxlength="100"></div>
                                                        
                                                        <div class="form-group"><label>Estatus</label> <select class="select2_demo_1 form-control" id="Estatus" name="Estatus">
                                                        <option value="">Seleccione un Estatus</option>
                                                        <option value="Aceptado">Aceptado</option>
                                                            <option value="Desarrollo">En Desarollo</option>
                                                            <option value="cancelado">Cancelado</option>
                                                                <option value="Terminado">Terminado</option>
                                                                 
                                                                   </select></div>
                                                        <div class="form-group"><label>Fecha de Inicio</label> <input type="date"  class="form-control" id="FechaInicio" name="FechaInicio" required="" ></div>
                                                        <div class="form-group"><label>Fecha de Entrega</label> <input type="date"  class="form-control" id="FechaEntrega" name="FechaEntrega" required="" ></div>
                                                        <div class="form-group"><label>Responsable</label> <input type="text" placeholder="Responsable"   class="form-control" id="Responsable" name="Responsable" required=""maxlength="50"></div>
                                                        <div class="form-group"><label>Porcentaje</label> <input type="number"  class="form-control" id="Porcentaje" name="Procentaje"  ></div>                                                                                                        
                                                        <div class="form-group"><label>Cliente</label> <select class="select2_demo_1 form-control" id="Cliente" name="Cliente">
                                                        <option value="">Selecciona un Cliente</option>
                                                        <?php 
                                                         require('conec.php');

                                                         $rs = mysqli_query($con, "SELECT * FROM clientes");

                                                           while($row = mysqli_fetch_array($rs)){
     
                                               echo"<option value=".$row['id_cliente'] ."  >". $row['Nombre'] ."</option>";
                         
                                                                    }

                                                      mysqli_close($con);
                                                                            ?>     
                                                                 
                                                                   </select></div>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>   
                            
                            <div class="modal inmodal" id="EditarProyecto" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fas fa-chart-line modal-icon"></i>
                                            <h4 class="modal-title">Editar Proyecto</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="EditarProyecto.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                         
                                    </div>
                                    </form>
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
