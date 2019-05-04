<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parqueaderos;
use App\TipoPagos;

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
        $obj = TipoPagos::where('id','=',$request->id)->first();
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
}
