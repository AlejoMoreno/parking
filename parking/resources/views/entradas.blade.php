<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ParkApp
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script src="http://momentjs.com/downloads/moment.min.js"></script>
  
</head>

<?php
if(isset($_GET["fecha_salida"])){
    $date = date_create($_GET["fecha_salida"]);
}
else{
    $date = date_create(date("d-m-Y H:i:sP"));
}
?>


<style>
    input[type="placa"]{
        font-size: 100px;
        width: 100%;
        text-transform: uppercase;
        padding: 5%;
    }
    input[type="number"]{
        text-transform: capitalize;
    }
</style>

<body class="">
    <div>
      <div class="content">
        <div class="container-fluid">
           <form action="/entradas/create"  method="POST">
            {{ csrf_field() }}
               <a href="/index"><div style="background: rgba(73,155,234,1);border-radius: 0px 0px 57px 57px;
               -moz-border-radius: 0px 0px 57px 57px;
               -webkit-border-radius: 0px 0px 57px 57px;
               border: 0px solid #000000;width: 100px;text-aling:center;position:absolute;color:white;z-index:1000;"><center><strong>Regresar</strong></center></div></a>
               <div class="row">
                    <div class="col-md-7">    
                        <center><label>PLACA</label></center>
                        <input type="placa" maxlength="6" id="placa" name="placa" required>
                    </div>
                    <div class="col-md-5">
                        <center><label>Valor A Pagar</label></center><br>
                        <h1 style="font-size: 100px;">$ 8.000</h1>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-7">
                        <div class="card" style="height: 300px;overflow-y:scroll;">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Entradas</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>Placa</th>
                                        <th>EntradaFecha</th>
                                        <th>SalidaFecha</th>
                                        <th>Tarifa</th>
                                        <th>Recibo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entradas as $entrada)
                                        <tr>
                                        <td>{{ $entrada->placa }}</td>
                                        <td>{{ $entrada->entradaFecha }}</td>
                                        <td>{{ $entrada->salidaFecha }}</td>
                                        <td>{{ $entrada->idTarifa }}</td>
                                        <td>{{ $entrada->eciboPrefijo . $entrada->reciboNumero }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <label style="background:white;padding:5%;font-size:30px;width: 100%;" id="resta">
                                    0Mes 0Dia 0Hora 0min</label>
                            </div>
                            <label class="col-md-2">Servicio</label>
                            <div class="col-md-10">
                                <select id="idTarifa" name="idTarifa" class="form-control" required>
                                    <option value="">Seleccione Servicio</option>
                                    @foreach ($tarifas as $tarifa)
                                    <option value="{{ $tarifa->id }}">{{ $tarifa->nombreTarifa }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-2">Entrada</label>
                            <div class="col-md-10">
                                    <input type="datetime-local" id="entradaFecha" class="form-control" onchange="cantidadTiempo()" name="entradaFecha" value="<?php echo date("Y-m-d\TH:i", strtotime(date("d-m-Y H:i:sP"))); ?>" required>
                            </div>
                            <label class="col-md-2">Salida</label>
                            <div class="col-md-10">
                                <input type="datetime-local" id="salidaFecha" class="form-control" onchange="cantidadTiempo()" name="salidaFecha" value="<?php echo date("Y-m-d\TH:i", strtotime(date_format($date, 'Y-m-d H:i:s'))); ?>">
                            </div>
                            <label class="col-md-2">Recibo</label>
                            <div class="col-md-5">
                                <input type="text" id="recibo" class="form-control" name="recibo" value="" disabled="true">
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción">
                            </div>
                            <label class="col-md-2">Cliente</label>
                            <div class="col-md-5">
                                <select id="idCliente" name="idCliente" class="form-control">
                                    <option value="">Seleccione Cliente</option>
                                    @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->titular }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="nota" name="nota" class="form-control" placeholder="Nota auto">
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox" name="quincena" id="quincena" class="form-control" onclick="horaSalida('quincena');">
                            </div>
                            <span class="col-md-5" style="margin-top:1%;">Quincena</span>
                            <div class="col-md-1">
                                <input type="checkbox" name="mensualidad" id="mensualidad" class="form-control" onclick="horaSalida('mensualidad')">
                            </div>
                            <span class="col-md-5" style="margin-top:1%;">Mensualidad</span>
                            <div class="col-md-5">
                                <input type="submit" value="registrar" name="registrar" style="width: 100%;" class="btn btn-warning">
                            </div>
                            <label class="col-md-1"><br></label>
                            <div class="col-md-6">
                                <input type="submit" value="pagar" name="pagar" style="width: 100%;"  class="btn btn-success">
                            </div>
                        </div>
                        
                        <input type="hidden" value="{{ Session::get('id') }}" id="idUsuario" name="idUsuario" placeholder="idUsuaroi">
                        <input type="hidden" value="{{ $parqueaderos->id }}" id="idParqueadero" name="idParqueadero" placeholder="idparqueadero">
                        <input type="hidden" id="reciboPrefijo" value="FA" name="reciboPrefijo" placeholder="reciboPrefijo">
                        <input type="hidden" id="reciboNumero" value="0" name="reciboNumero" placeholder="reciboNumero">
                        <input type="hidden" id="codigoBarras" value="NA" name="codigoBarras" placeholder="codigoBarras">
                    </div>
               </div>
               
           </form>

            
        </div>
      </div>

      <footer class="footer">
          <div class="container-fluid">
            <nav class="float-left">
              <ul>
                <li>
                  <a href="interconsis">
                    Interconsis / Wakusoft
                  </a>
                </li>
                <li>
                  <a href="acerca">
                    Nosotros
                  </a>
                </li>
                <li>
                  <a href="Licencia">
                    Licencia
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright float-right">
              &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, hecho con <i class="material-icons">favorite</i> por
              <a href="interconsis" target="_blank">Interconsis / wakusoft</a>
            </div>
          </div>
        </footer>
    </div>
  </div>

  

  <script>


  function horaSalida(idendificador){
      
  }
  
  function cantidadTiempo(){
    var fecha_entrada = $('#entradaFecha').val().split('-');
    var fecha_salida = $('#salidaFecha').val().split('-');
    let ano = fecha_salida[0] - fecha_entrada[0];
    let mes = fecha_salida[1] - fecha_entrada[1];
    let dia = fecha_salida[2].split("T")[0] - fecha_entrada[2].split("T")[0];
    let hora = fecha_salida[2].split("T")[1].split(":")[0] - fecha_entrada[2].split("T")[1].split(":")[0];
    let min = fecha_salida[2].split("T")[1].split(":")[1] - fecha_entrada[2].split("T")[1].split(":")[1];

    $('#resta').html(mes + "Mes " + dia + "Dia " + hora + "hora " + min + "min ");
  }
  </script>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <script>$(document).ready(function(){
        cantidadTiempo();
    });</script>
</body>

</html>
