<?php
  
  
      $html = $_POST["htmlgenerado"];
      
      $year=date("Y");
    
      $cod= $html;
      //imprimePdf($html);
      require_once 'dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
      $dompdf = new DOMPDF();
      $dompdf->load_html($cod);
      $dompdf->setPaper(array (0,0,800,800), 'landscape');
      $dompdf->render();
      $pdf = $dompdf->output();
      $filename = "Cotizacion.pdf";
      file_put_contents($filename, $pdf);
      $dompdf->stream($filename);
     
      echo'<script type="text/javascript">
    
      location.href="cotizaciones.php";
      </script>';
// function imprimePdf($html)
// {
  
    
   
// } 
?>      
