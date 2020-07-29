<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="/assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Primary Meta Tags -->
<title>WParkapp / Administra tu parqueadero</title>
<meta name="title" content="WParkapp / Administra tu parqueadero">
<meta name="description" content="Parkapp es una de las mejores soluciones para el mercado de parqueaderos. Contamos con una app totalmente gratuita y un servicio online a bajo costo.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="WParkapp / Administra tu parqueadero">
<meta property="og:description" content="Parkapp es una de las mejores soluciones para el mercado de parqueaderos. Contamos con una app totalmente gratuita y un servicio online a bajo costo.">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="WParkapp / Administra tu parqueadero">
<meta property="twitter:description" content="Parkapp es una de las mejores soluciones para el mercado de parqueaderos. Contamos con una app totalmente gratuita y un servicio online a bajo costo.">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />-->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
  <!-- CSS Files -->
  <!-- <link href="/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />-->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="/assets/demo/demo.css" rel="stylesheet" /> -->

  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <style>
  bg-bubbles li:nth-child(3) {
    left: 25%;
    -webkit-animation-delay: 4s;
            animation-delay: 4s;
  }
  .bg-bubbles li:nth-child(7) {
    left: 32%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 7s;
            animation-delay: 7s;
  }
  .bg-bubbles li:nth-child(16) {
    left: 75%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 1s;
            animation-delay: 1s;
    -webkit-animation-duration: 25s;
            animation-duration: 25s;
    background-color: rgba(255, 255, 255, 0.3);
  }


  .bg-bubbles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    z-index: 1;
  }
	
	.bg-bubbles li{
		position: absolute;
		list-style: none;
		display: block;
		width: 40px;
		height: 40px;
		background-color: fade(white, 15%);
		bottom: -160px;
		
		-webkit-animation: square 25s infinite;
		animation:         square 25s infinite;
		
		-webkit-transition-timing-function: linear;
		transition-timing-function: linear;}
		
  .bg-bubbles li:nth-child(1){
    left: 10%;
  }
  
  .bg-bubbles li:nth-child(2){
    left: 20%;
    
    width: 80px;
    height: 80px;
    
    animation-delay: 2s;
    animation-duration: 17s;
  }
  
  .bg-bubbles li:nth-child(3){
    left: 25%;
    animation-delay: 4s;
  }
  
  .bg-bubbles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    
    animation-duration: 22s;
    
    background-color: fade(white, 25%);
  }
  
  .bg-bubbles li:nth-child(5){
    left: 70%;
  }
  
  .bg-bubbles li:nth-child(6){
    left: 80%;
    width: 120px;
    height: 120px;
    
    animation-delay: 3s;
    background-color: fade(white, 20%);
  }
  
  .bg-bubbles li:nth-child(7){
    left: 32%;
    width: 160px;
    height: 160px;
    
    animation-delay: 7s;
  }
  
  .bg-bubbles li:nth-child(8){
    left: 55%;
    width: 20px;
    height: 20px;
    
    animation-delay: 15s;
    animation-duration: 40s;
  }
  
  .bg-bubbles li:nth-child(9){
    left: 25%;
    width: 10px;
    height: 10px;
    
    animation-delay: 2s;
    animation-duration: 40s;
    background-color: fade(white, 30%);
  }
  
  .bg-bubbles li:nth-child(10){
    left: 90%;
    width: 160px;
    height: 160px;
    
    animation-delay: 11s;
  }

@-webkit-keyframes square {
  0%   { transform: translateY(0); }
  100% { transform: translateY(-600px) rotate(600deg); }
}
@keyframes square {
  0%   { transform: translateY(0); }
  100% { transform: translateY(-600px) rotate(600deg); }
}

.cuadro80{
  width: 8px;
  height: 8px;
  background: white;
  opacity: 0.5;
}
.cuadro50{
  width: 25px;
  height: 25px;
  background: white;
  opacity: 0.3;
}
.cuadro20{
  width: 20px;
  height: 20px;
  background: white;
  opacity: 0.8;
}


.backAnim{
  color: #2f2f2f;
display:block;
text-align:center;
background:#fceabb;
-webkit-transition:background 1s ease-out;
-moz-transition:background 1s ease-out;
-o-transition:background 1s ease-out;
-ms-transition:background 1s ease-out;
transition:background 1s ease-out;
}
.backAnim:hover{
background:#474747;
color:white;
}
  </style>

</head>

 

<body>

  




  <div class="content" style="padding-bottom: 10%;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">
          <div style="margin-top:15%;margin-left: 5%;">
            <h1><strong>Administra</strong> tu <br>parqueadero desde</h1>
            <h5><strong>cualquier lugar </strong> y de forma sencilla</h5>
          </div>
          <ul class="bg-bubbles" style="z-index: 10;">
            <li class="cuadro80"></li>
            <li class="cuadro50"></li>
            <li class="cuadro20"></li>
            <li class="cuadro80"></li>
            <li class="cuadro50"></li>
            <li class="cuadro20"></li>
            <li class="cuadro50"></li>
            <li class="cuadro50"></li>
            <li class="cuadro20"></li>
            <li class="cuadro80"></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon" style="text-align: center;">
                <img style="width: 30%;" src="/assets/img/logo.png">
              </div>
            </div>
            @if(session()->has('message')) 
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span>
                  {{ session()->get('message') }} </span>
              </div>
            @endif 
            <div class="card-body">
                <form class="row" action="/usuarios/loguin"  method="POST">
                  {{ csrf_field() }}
                    <div class="col-lg-12"><br>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="col-lg-12"><br>
                        <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="col-lg-12"><br>
                        <center>
                            <input type="submit" id="entrar" name="entrar" class="btn btn-success" value="Ingresar">
                        </center>
                    </div>
                </form>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/registro">Solicita 1 mes gratis</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content" style="background: white;padding-top:10%;padding-bottom:10%;">
    <div class="container-fluid">
      <center><h1 style="color: #060606">Precios y planes</h1></center><br><br>
      <div class="row">
        <div class="col-md-2">
          <br>
        </div>
        <div class="col-md-3">
          <div class="card card-stats">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h3>Gratis</h3>
                <h6>Un mes gratis</h6>
                <h3>$ 0 <small><br>COP</small></h3>
                <h6><br></h6>
              </div>
            </div>
            <div class="card-body">
              <p>El plan incluye: </p>
              <ul>
                <li>1 Parqueadero</li>
                <li>1 Usuario</li>
                <li>Tarifarios ilimitados</li>
                <li>Entradas ilimitados</li>
                <li>Salidas ilimitados<br></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats">
            <div class="card-header" >
              <div class="card-icon" style="text-align: center;color:white;">
                <h3>Premium</h3>
                <h6>Pago anual</h6>
                <h3>$ 100.000 <small><br>COP</small></h3>
                <h6>Mes $ 10.000 COP</h6>
              </div>
            </div>
            <div class="card-body">
              <p>El plan incluye: </p>
              <ul>
                <li>Parqueadero ilimitados</li>
                <li>Usuario ilimitados</li>
                <li>Tarifarios ilimitados</li>
                <li>Entradas ilimitados</li>
                <li>Salidas ilimitados<br></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats backAnim" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h3>Vitalicio</h3>
                <h6>De por vida </h6>
                <h3>$ 800.000 <small><br>COP</small></h3>
              </div>
            </div>
            <div class="card-body" style="text-align: left;">
              <p>Para este plan se requiere que el establecimiento tenga un PC, en el cual instalar el aplicativo. El plan incluye: </p>
              <ul>
                <li>Licencia de uso / 6 meses garantia</li>
                <li>Instalación</li>
                <li>Base de Datos</li>
              </ul>
            </div>
          </div>
        </div>
        
        
    </div>
  </div> 
      


  <div class="content" style="background: black;margin-top:10%;padding-bottom:10%;padding-top:10%;">
    <div class="container-fluid">
      <center><h1 style="color: white;">Parkapp</h1></center><br><br>
      <div class="row">
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/1.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Censo de vehiculos</h4>
                <p>En este apartado podrás ver en tiempo real cuantos y cuales vehiculos se encuentran 
                  dentro del parqueadero.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Perfil</h4>
                <p>Podrás agregar cuantos usuarios necesites para el parqueadero, con los roles de 
                  administracion y empleado.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/2.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/3.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Clientes</h4>
                <p>Cuenta con la posibiidad de crear un cliente recurrente, con el fin de 
                  al momento de imprimir la tirilla salga con los datos del cliente.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Configuración</h4>
                <p>Configura la impresión de la tirilla, con los datos correspondientes al parquedero.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/4.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/5.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Cierre caja</h4>
                <p>Genera e imprime el cierre de caja diario, seleccionando el rango de fechas.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Entradas de vehiculos</h4>
                <p>Ingresa la placa del vechiulo luego indique el tipo de servicio y algunos datos descriptivos
                  del vehiculo, allí indicará el valor y la cantidad de tiempo que tiene dicha placa.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/6.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-7">
          <div class="card card-stats" >
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <img style="width: 100%;" src="/assets/img/8.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Salida de vehiculos</h4>
                <p>Busca la placa en la tabla de entradas, selecciona y traerá todos los datos 
                  relevantes a la facturación de la salida del vehiculo. 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card card-stats" style="margin-top:35%;">
            <div class="card-header">
              <div class="card-icon" style="text-align: center;color:white;">
                <h4>Consulta nuestra APP Wparkapp</h4>
                <p>Encuentranos en Google play
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card card-stats" >
            <a href="https://play.google.com/store/apps/details?id=com.wakusoft.parkapp">
              <div class="card-header">
                <div class="card-icon" style="text-align: center;color:white;">
                  <img style="width: 50%;" src="/assets/img/9.jpeg" alt="" srcset="">
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>


  <footer class="footer" style="position: relative;
  width: 100%;
  z-index: 1000;
  background: black;
  bottom: 0px;
  margin-top: 10%;
  padding-top: 5%;
  padding-bottom: 10%;">
    <div class="container-fluid">
      <nav class="float-left">
        <ul style="display: block">
          <li>
            <a href="https://wakusoft.com/">
              Interconsis / Wakusoft
            </a>
          </li>
          <li>
            <a href="https://wa.me/13219045297?text=Me%20interesa%20el%20algun%20plan%20de%20parkapp">
              321 904 52 97
            </a>
          </li>
          <li>
            <div>
              Bogotá D.C. Colombia Calle 38 a 50 a 71 sur
              <a href="mailto:wakusoft@gmail.com">wakusoft@gmail.com</a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, hecho con <i class="material-icons">favorite</i> por
        <a href="https://wakusoft.com/" target="_blank">Interconsis / wakusoft</a>
      </div>
    </div>
  </footer>
</body>

</html>
