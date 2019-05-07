<style type="text/css">
	*{
		font-size: 10px;
		padding: 0 auto;
		margin: 0 auto;
	}
</style>

<a href="/entradas"><div style="background: rgba(73,155,234,1);border-radius: 0px 0px 57px 57px;
	-moz-border-radius: 0px 0px 57px 57px;
	-webkit-border-radius: 0px 0px 57px 57px;
	border: 0px solid #000000;width: 100px;text-aling:center;position:absolute;color:white;z-index:1000;"><center><strong>Regresar</strong></center></div></a>
  
  

<body style="width: 300px;margin-left: 35%;" id="imprimir_recibo">
	<div><center><strong>{{ $parqueaderos->rozon_social }}<br>NIT. {{ $parqueaderos->nit }}</strong><br><br>SUCURSAL FACA</center><br></div>

	<center>
		<strong>Número {{ $pagos[0]->idEntrada[0]->reciboNumero }}</strong><br>
		<strong>{{ $pagos[0]->idEntrada[0]->created_at }}<br>
		<strong>OPERARIO {{ $pagos[0]->idUsuario[0]->nombres }}<br></strong>
	</center>

	<div id="tablas"><br>
		<center>
	<table class="table">
		<tr>
			<td class="tg-yw4l" colspan="3">
				<strong>CLIENTE: </strong><br>
				NOMBRE {{ $pagos[0]->idEntrada[0]->idCliente[0]->titular }}<br>
				Nit. {{ $pagos[0]->idEntrada[0]->idCliente[0]->cedula }}<br>
			</td>
		</tr>
	</table>
	</center>
	<br>
	<table id="productos" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="tg-le8v"></th>
				<th class="tg-le8v"></th>
			</tr>
		</thead>
		<tr>
				<td class="tg-yw4l">
					<strong>Servicio</strong><br>{{ $pagos[0]->idEntrada[0]->idTarifa[0]->nombreTarifa}}<br>
					<strong>Hora Entrada</strong><br>{{ $pagos[0]->idEntrada[0]->entradaFecha}}
				</td>
				<td class="tg-yw4l">
						<strong>Hora Salida</strong><br>{{ $pagos[0]->idEntrada[0]->salidaFecha}}<br>
						<strong>Total</strong><br>{{ $pagos[0]->subtotal}}
				</td>
			</tr>
	</table>

	<br><br>
	<table class="table">
		<tr>
			<td style="width: 35%;position:relative;left:0px;"></td>
			<td>
				<table class="">
					<tr>
						<td><strong>Subtotal: </strong></td>
						<td>$ {{ $pagos[0]->subtotal}}</td>
					</tr>
					<tr>
						<td><strong>Iva: </strong></td>
						<td>$ {{ $pagos[0]->iva}}</td>
					</tr>
					<tr>
						<td><strong>Total: </strong></td>
						<td><strong>$ {{ $pagos[0]->valor}}</strong></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 65%"><strong>Pago en {{ $pagos[0]->idTipoPago[0]->nombre}}: </strong></td>
			<td>
				<table class="">
					<tr>
						<td><strong>Total: </strong></td>
						<td><strong>$ 789789</strong></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<br><br>

	<center>
		-----------------------------------------------<br>
		Parkapp <br>
		Desarrollado por Interconsis - Wakusoft <br>
		NIT. 1030570356 <br>
		-----------------------------------------------
	</center>
	</div>
</body>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;background-color: white;border: 1px solid;color: black;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:2px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
.tg .tg-le8v{background-color:#BD0A29;vertical-align:top;color:white;}
.tg .tg-yw4l{vertical-align:top;font-size: 11px;}
table{
	width:100%;
}
#logo1,#datosempresa,#numeroremision{
	width: 40%;
	float: left;
}
#numeroremision{
	position: absolute;
	left: 75%;
	top: 50px;
}
 #datosPa{
 	margin: 1px 1px 1px;
	padding: 1px 1px 1px 1px;
 }
#datos{
	width: 150%;
}
form input{
	width: 92%;
	height: 30px;
	padding: 10px 10px 10px 10px;
	padding-right: 10px;
}
body{
	font-family: sans-serif;
	color: #9EA3A3;
	font-size: 90%;
}
strong{
	color: black;
}
#pac{
	font-size: 10px;
}
#tablas{
	position: absolute;
	width: 90%;
	left: 5%;
}
#titulo{
	position: relative;
	left: 5%;
}
</style>


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