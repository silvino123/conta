<?php 
require("conec.php");
session_start();
 if (!isset( $_SESSION["Nombre"])){
    
    header("location:login.html");
  
  }
$mesActual=date("m");
$añoActual=date("Y");
$NombreMes= date("F");
$factura="Si";
$consulta=mysqli_query($con,"SELECT sum(Monto) from ingresos WHERE YEAR(Fecha)='$añoActual' AND MONTH(Fecha)='$mesActual'");
while($row = mysqli_fetch_array($consulta)){
        $sumaIngreso= $row['sum(Monto)'];
}
$consulta2=mysqli_query($con,"SELECT sum(Monto) from gastos WHERE YEAR(Fecha)='$añoActual' AND MONTH(Fecha)='$mesActual'");
while($row2 = mysqli_fetch_array($consulta2)){
        $sumaGasto= $row2['sum(Monto)'];
}
$sumaFacturado=mysqli_query($con,"SELECT sum(Monto) from ingresos WHERE YEAR(Fecha)='$añoActual' AND MONTH(Fecha)='$mesActual' AND Factura='$factura'");
while($row3 = mysqli_fetch_array($sumaFacturado)){
    $suma= $row3['sum(Monto)'];
}
$IvaPorPagar=$suma*0.16;
$Ganancias=$sumaIngreso-$sumaGasto-$IvaPorPagar;
mysqli_close($con);
        setlocale(LC_TIME,'ES');
        $monthNum=$mesActual;
        $dateObj= DateTime:: createFromFormat('!m',$monthNum);
        $monthName= strftime('%B',$dateObj-> getTimestamp());
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sycsoft | Reporte</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
</head>

<body>
<div id="wrapper">
<?php include 'Slide-Menu.html'; ?>  
<div id="page-wrapper" class="gray-bg">  
<?php include 'Nav.html'; ?>  
<div class="wrapper wrapper-content">
    <h2> <span class="label label-info">Reporte del mes de : <?php echo $monthName  ?></span></h2>
    <br>
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Mensual</span>
                                <h5>Ingresos</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><b>$ <?php echo $sumaIngreso ?></b></h1>
                                <div class="stat-percent font-bold text-success"> <i class="fas fa-hand-holding-usd"></i></div>
                                <small>Ingresos Totales</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Mensual</span>
                                <h5>Gastos</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><b>$ <?php echo $sumaGasto ?></b></h1>
                                <div class="stat-percent font-bold text-info"> <i class="fas fa-money-bill-wave"></i></div>
                                <small>Gastos Totales</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Mensual</span>
                                <h5>Ganancia</h5>
                            </div>
                            <div class="ibox-content">
                                 <?php
                                 if($Ganancias<0){
                                    echo "<h1 class='no-margins' style='color:red'><b>$ $Ganancias</b></h1>"; 
                                 }
                                else{
                                    echo "<h1 class='no-margins' style='color:green'><b>$ $Ganancias<b></h1>"; 
                                }
                                 ?>
                                
                                <div class="stat-percent font-bold text-navy"> <i class="fas fa-dollar-sign"></i></div>
                                <small>Ganancia Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Mensual</span>
                                <h5>IVA por Pagar</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><b>$ <?php echo $IvaPorPagar  ?></b></h1>
                                <div class="stat-percent font-bold text-danger"> <i class="fas fa-bolt"></i></div>
                                <small>Total de iva por pagar</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Movimientos</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">Mensual</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Ingresos </h5>
                        
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped" style="overflow-y: scroll">
                            <thead>
                            <tr style="background-color:#1c84c6;color:#fff">
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Descripcion</th>
                                <th>Factura</th>
                                <th>Monto</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  
                            require('ContenidoIngresos.php');
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Gastos </h5>
                        
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped" style="overflow-y: scroll">
                            <thead>
                            <tr style="background-color:#1c84c6;color:#fff">
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Descripcion</th>
                                <th>Factura</th>
                                <th>Monto</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  
                            require('ContenidoGastos.php');
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Seguimiento de Proyectos</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                
                                <div class="col-lg-12">
                                <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>Estatus</th>
                                                <th>Fecha de Entrega</th>
                                                <th>Responsables</th>
                                                <th>Porcentaje</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php  
                            require('ContenidoProyectos.php');
                            ?> 
                            
                                            </tbody>
                                        </table>
                                    </div>
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

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
