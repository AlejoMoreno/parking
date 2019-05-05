<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parqueaderos;
use App\TipoPagos;
use App\TipoVehiculos;
use App\TipoUsuarios;
use App\Tarifas;

class ParqueaderosController extends Controller
{
    /**
     * 'razon_social',
        'direccion1',
        'direccion2',
        'propietario',
        'telefonos',
        'nit',
        'rango_factura',
        'regimen',
        'porcentajeIva',
        'limiteVehiculos',
        'limieteMotos'
     */
    public function createParqueaderos(Request $request){
        $obj = Parqueaderos::where('id','=',$request->id)->first();
        if(sizeof($obj) != 0 ){ //actualizar
            ParqueaderosController::ObjParqueaderos($obj,$request);
            $obj->save();
        }
        else { //crear
            $obj = new Parqueaderos();
            ParqueaderosController::ObjParqueaderos($obj,$request);
            $obj->save();
        }
        return redirect('/configuracion');
    }

    public function createTipoPago(Request $request){
        $obj = TipoPagos::where('nombre','=',$request->nombre)->first();
        if(sizeof($obj) != 0 ){ //actualizar
            ParqueaderosController::ObjTipoPagos($obj,$request);
            $obj->save();
        }
        else { //crear
            $obj = new TipoPagos();
            ParqueaderosController::ObjTipoPagos($obj,$request);
            $obj->save();
        }
        return redirect('/configuracion');
    }

    public function tipoVehiculo(Request $request){
        $obj = TipoVehiculos::where('nombre','=',$request->nombre)->first();
        if(sizeof($obj) != 0 ){ //actualizar
            ParqueaderosController::ObjTipoVehiculos($obj,$request);
            $obj->save();
        }
        else { //crear
            $obj = new TipoVehiculos();
            ParqueaderosController::ObjTipoVehiculos($obj,$request);
            $obj->save();
        }
        return redirect('/configuracion');
    }

    public function createtipoUsuarios(Request $request){
        $obj = TipoUsuarios::where('nombre','=',$request->nombre)->first();
        if(sizeof($obj) != 0 ){ //actualizar
            ParqueaderosController::ObjTipoUsuarios($obj,$request);
            $obj->save();
        }
        else { //crear
            $obj = new TipoUsuarios();
            ParqueaderosController::ObjTipoUsuarios($obj,$request);
            $obj->save();
        }
        return redirect('/configuracion');
    }

    public function createTarifas(Request $request){
        $obj = Tarifas::where('nombreTarifa','=',$request->nombreTarifa)->first();
        if(sizeof($obj) != 0 ){ //actualizar
            ParqueaderosController::ObjTarifas($obj,$request);
            $obj->save();
        }
        else { //crear
            $obj = new Tarifas();
            ParqueaderosController::ObjTarifas($obj,$request);
            $obj->save();
        }
        return redirect('/servicios');
    }




    static function ObjParqueaderos(Parqueaderos $obj, Request $request){
        $obj->razon_social  = $request->razon_social;
        $obj->direccion1    = $request->direccion1;
        $obj->direccion2    = ($request->direccion2 == "") ? "NA" : $request->direccion2;
        $obj->propietario   = $request->propietario;
        $obj->telefonos     = $request->telefonos;
        $obj->nit           = $request->nit;
        $obj->rango_factura = $request->rango_factura;
        $obj->regimen       = $request->regimen;
        $obj->porcentajeIva = $request->porcentajeIva;
        $obj->limiteVehiculos = $request->limiteVehiculos;
        $obj->limieteMotos  = $request->limieteMotos;
        return $obj;
    }

    static function ObjTipoPagos(TipoPagos $obj, Request $request){
        $obj->nombre    = $request->nombre;
        return $obj;
    }

    static function ObjTipoVehiculos(TipoVehiculos $obj, Request $request){
        $obj->nombre            = $request->nombre;
        $obj->tarifaSugerida    = $request->tarifaSugerida;
        $obj->urlLogo           = $request->urlLogo;
        return $obj;
    }

    static function ObjTipoUsuarios(TipoUsuarios $obj, Request $request){
        $obj->nombre    = $request->nombre;
        return $obj;
    }

    static function ObjTarifas(Tarifas $obj, Request $request){
        $obj->idParqueadero     = $request->idParqueadero;
        $obj->idTipoVehiculo    = $request->idTipoVehiculo;
        $obj->nombreTarifa      = $request->nombreTarifa;
        $obj->valorHora         = $request->valorHora;
        $obj->valorMinuto       = $request->valorMinuto;
        $obj->quincena          = $request->quincena;
        $obj->mensualidad       = $request->mensualidad;
        $obj->vigendeDesde      = $request->vigendeDesde;
        $obj->vigenteHasta      = $request->vigenteHasta;
        $obj->estado            = $request->estado;
        return $obj;
    }
}
