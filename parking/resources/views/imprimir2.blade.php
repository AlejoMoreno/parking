<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/demo/demo.css" rel="stylesheet" />
  <script src="http://momentjs.com/downloads/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>


  <a href="/entradas"><div style="background: rgba(73,155,234,1);border-radius: 0px 0px 57px 57px;
  -moz-border-radius: 0px 0px 57px 57px;
  -webkit-border-radius: 0px 0px 57px 57px;
  border: 0px solid #000000;width: 100px;text-aling:center;position:absolute;color:white;z-index:1000;"><center><strong>Regresar</strong></center></div></a>


<div id="imprimir_recibo" style="background: white;">
        <center><div style="font-size:12px;">
            {{ $parqueaderos->razon_social }}<br><br>
            NIT. {{ $parqueaderos->nit }}<br>
            Documento Oficial de Autorización de Numeración de Recibo<br>
            TEL. {{ $parqueaderos->telefonos }}<br>
            DIR. {{ $parqueaderos->direccion1 }}<br>
            {{ $parqueaderos->propietario }}<br><br>
        </div></center>
        <div style="font-size:12px;text-aling: left;">
            <?php  echo date('Y-m-d');?><br>
            Placa: <label id="impplaca">{{ $entradas[0]->placa }}</label><br>
            Entrada: <label id="impentrada">{{ $entradas[0]->entradaFecha }}</label><br>
            Recibo: <label id="imprecibo">{{ $entradas[0]->reciboNumero }}</label><br>
            Descripcion: <label id="imprecibo">{{ $entradas[0]->descripcion }}</label>
        </div>
      </div>



  <script>


imprimir();
        function imprimir(){
          var divToPrint=document.getElementById('imprimir_recibo');
      
          var newWin=window.open('','Print-Window');
      
          newWin.document.open();
      
          newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
      
          newWin.document.close();
      
          setTimeout(function(){newWin.close();},10);
        }
        </script>



 <!--   Core JS Files   -->
 <script src="/assets/js/core/jquery.min.js"></script>
 <script src="/assets/js/core/popper.min.js"></script>
 <script src="/assets/js/core/bootstrap-material-design.min.js"></script>
 <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 <!-- Plugin for the momentJs  -->
 <script src="/assets/js/plugins/moment.min.js"></script>
 <!--  Plugin for Sweet Alert -->
 <script src="/assets/js/plugins/sweetalert2.js"></script>
 <!-- Forms Validations Plugin -->
 <script src="/assets/js/plugins/jquery.validate.min.js"></script>
 <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
 <script src="/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
 <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
 <script src="/assets/js/plugins/bootstrap-selectpicker.js"></script>
 <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
 <script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
 <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
 <script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
 <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
 <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
 <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
 <script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>
 <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
 <script src="/assets/js/plugins/fullcalendar.min.js"></script>
 <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
 <script src="/assets/js/plugins/jquery-jvectormap.js"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="/assets/js/plugins/nouislider.min.js"></script>
 <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>