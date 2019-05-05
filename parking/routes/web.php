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

Route::get('/usuario', function(){
    return view('usuario');
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
    return view('clientes');
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