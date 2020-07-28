<?php 

Session::put('id', "");
Session::put('idTipoUsuario', "");
Session::put('usuario', "");
Session::put('nombres', "");
Session::put('email', "");


header("Location: /parking/public/");

?>

<script>
window.location.href = "/parking/public/";
</script>