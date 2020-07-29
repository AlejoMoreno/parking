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
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> 
    <!-- CSS Files -->
     <link href="/assets/css/material-dashboard.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" /> 
  
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

  .card .card-header-primary .card-icon, .card .card-header-primary .card-text, .card .card-header-primary:not(.card-header-icon):not(.card-header-text), .card.bg-primary, .card.card-rotate.bg-primary .front, .card.card-rotate.bg-primary .back {
    background: linear-gradient(60deg, #4caf50, #77b300);
}
.card .card-header-primary:not(.card-header-icon):not(.card-header-text), .card .card-header-primary .card-text {
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px #4caf50;
}
    </style>





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
  <!-- Library for adding dinamically elements -->
  <script src="/assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="/assets/demo/demo.js"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    

  <style>
    select[name="table_length"], input[type="search"] {
      background: #282828;
      border: 1px solid #282828;
      color: white;
    }
    input[type="search"]{
      border-bottom: 1px solid white;
    }
    table.dataTable tbody tr {
        background-color: #282828;
        color: white;
    }
    .text-primary{
      color:#4caf50 !important;
    }
    .form-control, .form-control:focus, .form-control:hover{
      background: #282828;
      border: 1px solid #282828;
      border-bottom: 1px solid white;
      color: white;
    }

    
  </style>
</head>


<body class="">







  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-background-color="black" data-image="/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
        -->
      <div class="logo">
        <a href="/index" class="simple-text logo-normal">
          <img width="100" src="/assets/img/logo.png" alt="" srcset="">
        </a>
      </div>
      <?php
      if(Session::get('id') != ""){
        ?>
        @include('menu')
        <?php 
      }
      else{
        echo '<h1><a href="/">Error de Sesión (ingresa aquí para volver a loguearse)</a></h1><script>
window.location.href = "/salida";
</script>';
      }
      ?>
      
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo"><script>document.write( window.location.pathname.split('/')[3] );</script></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            @yield('content')
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
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
