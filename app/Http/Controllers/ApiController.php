<?php

namespace App\Http\Controllers;

use App\Cuenta;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function validarCuenta(Request $request){
        // return $request->ci;
        $cuenta = Cuenta::join('users', 'cliente_id', 'users.id')
                        ->where('users.ci', $request->ci)
                        ->orWhere('cuentas.num_cuenta', $request->num_cuenta)
                        ->select('num_cuenta', 'nombre', 'apellido_pat', 'apellido_mat')
                        ->first();
        if ($cuenta) {
            return response()->json($cuenta, 200);
        }
        return;
    }
}