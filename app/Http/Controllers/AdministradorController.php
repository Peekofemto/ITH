<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $usuarios = \DB::table('usuarios')->select('rfc')->get();
            return response()->json($usuarios);
        }
        return view('administrador');
    }

    public function carpetas(Request $request)
    {
        if($request->ajax())
        {
            $usuarios = \DB::table('archivos')->get();
            return response()->json($usuarios);
        }
        return view('administrador');
    }
}
