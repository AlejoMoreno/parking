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

Route::get('/tarifas', function(){
    return view('tarifas');
});

Route::get('/clientes', function(){
    return view('clientes');
});

Route::get('/configuracion', function(){
    $parqueaderos = App\Parqueaderos::where('id','>','0')->first();
    $tipoPagos = App\TipoPagos::all();
    return view('configuracion',[
        "parqueaderos"=>$parqueaderos,
        "tipoPagos"=>$tipoPagos
    ]);
});

/**
 * PARQUEADEROS CONTROLLER
 */
Route::post('/parqueaderos/create', 'ParqueaderosController@createParqueaderos');
Route::post('/tipoPago/create', 'ParqueaderosController@createTipoPago');