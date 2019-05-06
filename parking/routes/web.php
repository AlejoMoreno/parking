<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/salida', function(){
    return view('salida');
});

Route::get('/entradas', function(){
    $tarifas = App\Tarifas::all();
    $clientes = App\Clientes::all();
    return view('entradas',[
        "tarifas"=>$tarifas,
        "clientes"=>$clientes
    ]);
});

Route::get('/usuarios', function(){
    $usuarios = App\Usuarios::all();
    $tipoUsuarios = App\TipoUsuarios::all();
    $parqueaderos = App\Parqueaderos::where('id','>','0')->first();
    foreach($usuarios as $obj){
        $obj->idTipoUsuario = App\TipoUsuarios::where('id','=',$obj->idTipoUsuario)->get();
    }
    return view('usuario',[
        "parqueaderos"=>$parqueaderos,
        "tipoUsuarios"=>$tipoUsuarios,
        "usuarios"=>$usuarios
    ]);
});

Route::get('/servicios', function(){
    $tarifas = App\Tarifas::all();
    foreach($tarifas as $obj){
        $obj->idTipoVehiculo = App\TipoVehiculos::where('id','=',$obj->idTipoVehiculo)->get();
    }
    $tiposVehiculos = App\TipoVehiculos::all();
    $parqueaderos = App\Parqueaderos::where('id','>','0')->first();
    return view('tarifas', [
        "parqueaderos"=>$parqueaderos,
        "tarifas"=>$tarifas,
        "tiposVehiculos"=>$tiposVehiculos
    ]);
});

Route::get('/clientes', function(){
    $clientes = App\Clientes::all();
    return view('clientes',[
        "clientes"=>$clientes
    ]);
});

Route::get('/configuracion', function(){
    $parqueaderos = App\Parqueaderos::where('id','>','0')->first();
    $tipoPagos = App\TipoPagos::all();
    $tipoVehiculos = App\TipoVehiculos::all();
    $tipoUsuarios = App\TipoUsuarios::all();
    return view('configuracion',[
        "parqueaderos"=>$parqueaderos,
        "tipoPagos"=>$tipoPagos,
        "tipoVehiculos"=>$tipoVehiculos,
        "tipoUsuarios"=>$tipoUsuarios
    ]);
});

/**
 * PARQUEADEROS CONTROLLER
 */
Route::post('/parqueaderos/create', 'ParqueaderosController@createParqueaderos');
Route::post('/tipoPago/create', 'ParqueaderosController@createTipoPago');
Route::post('/tipoVehiculo/create', 'ParqueaderosController@tipoVehiculo');
Route::post('/tipoUsuarios/create', 'ParqueaderosController@createtipoUsuarios');
Route::post('/tarifas/create', 'ParqueaderosController@createTarifas');


/**
 * USUARIOS CONTROLLER
 */
Route::post('/clientes/create', 'UsuariosController@createClientes');
Route::post('/usuarios/create', 'UsuariosController@createUsuarios');
Route::post('/usuarios/loguin', 'UsuariosController@loguin');