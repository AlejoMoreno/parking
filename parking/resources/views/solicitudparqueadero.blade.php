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
  background: #77B300;
  opacity: 0.5;
}
.cuadro50{
  width: 25px;
  height: 25px;
  background: #77B300;
  opacity: 0.3;
}
.cuadro20{
  width: 20px;
  height: 20px;
  background: #77B300;
  opacity: 0.8;
}
  </style>

</head>

 

<body>

  




  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div style="margin-top:15%;margin-left: 5%;">
            <h1><strong>Date de alta</strong> para Administrar <br>tu parqueadero</h1>
            <h5><strong>Brindanos estos datos básicos </strong> y crearemos tu <br>usuario con un mes gratis</h5>
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
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon" style="text-align: center;">
                <img style="width: 25%;" src="/assets/img/logo.png">
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
                <form class="row" action="/parqueaderos/create"  method="POST">
                  {{ csrf_field() }}
                    <div class="col-lg-12"><br>
                        <input type="text" id="razon_social" name="razon_social" class="form-control" placeholder="razon_social">
                    </div>
                    <div class="col-lg-6"><br>
                        <input type="text" id="direccion1" name="direccion1" class="form-control" placeholder="direccion1">
                    </div>
                    <div class="col-lg-6"><br>
                        <input type="text" id="direccion2" name="direccion2" class="form-control" placeholder="direccion2">
                    </div>
                    <div class="col-lg-12"><br>
                        <input type="text" id="propietario" name="propietario" class="form-control" placeholder="propietario">
                    </div>
                    <div class="col-lg-6"><br>
                        <input type="text" id="telefonos" name="telefonos" class="form-control" placeholder="telefonos">
                    </div>
                    <div class="col-lg-6"><br>
                        <input type="text" id="regimen" name="regimen" class="form-control" placeholder="regimen">
                    </div>
                    <div class="col-lg-12"><br>
                        <input type="text" id="nit" name="nit" class="form-control" placeholder="nit">
                    </div>
                    <div class="col-lg-3"><br>
                        <input type="text" id="rango_factura" name="rango_factura" class="form-control" placeholder="rango_factura">
                    </div>
                    <div class="col-lg-3"><br>
                        <input type="text" id="porcentajeIva" name="porcentajeIva" class="form-control" placeholder="porcentajeIva">
                    </div>
                    <div class="col-lg-3"><br>
                        <input type="text" id="limiteVehiculos" name="limiteVehiculos" class="form-control" placeholder="limiteVehiculos">
                    </div>
                    <div class="col-lg-3"><br>
                        <input type="text" id="limieteMotos" name="limieteMotos" class="form-control" placeholder="limieteMotos">
                    </div>
                    <div class="col-lg-12"><br>
                        <center>
                            <input type="submit" id="entrar" name="entrar" class="btn btn-success" value="Registrar Gratis">
                        </center>
                    </div>
                </form>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/">Ya tienes cuenta, ingresa aquí</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      


  <footer class="footer" style="position: fixed;
  width: 100%;
  z-index: 1000;
  background: black;
  margin-top: 10%;
  padding-top: 10%;
  padding-bottom: 10%;">
    <div class="container-fluid">
      <nav class="float-left">
        <ul style="display: block">
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
</body>

</html>
