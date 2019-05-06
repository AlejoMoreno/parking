<?php 

Session::put('id', "");
Session::put('idTipoUsuario', "");
Session::put('usuario', "");
Session::put('nombres', "");
Session::put('email', "");


header("Location: /");

?>

<script>
window.location.href = "/";
</script>