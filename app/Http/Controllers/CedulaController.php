<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cedula;

class CedulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $cedula = new Cedula();
        $cedula->no_maestro = $request->no_maestro;
        $cedula->apellido_pat = $request->apellido_pat;
        $cedula->apellido_mat = $request->apellido_mat;
        $cedula->nombres = $request->nombres;

        $cedula->save();
             
    }

    public function listarPdf(Request $request){
        // $cedula = Cedula::select('id','no_maestro','apellido_pat','apellido_mat','nombres')
        // ->where('id','=', $request->id)
        // ->first();

       
        //$cedula = DB::table('cedulas')->where('no_maestro', $request->no_maestro)->first();


        //$cedula = Cedula::where('id', $cedula->id);
        //$no_maestro = $request->no_maestro;
        //$cedula = Categoria::where( 'no_maestro like',  $no_maestro)->first();

        $cedula = DB::table('cedulas')->orderBy('created_at', 'desc')->first();

        // $cedula = [
        //     'no_maestro' => $request->no_maestro,
        //     'apellido_pat' => $request->apellido_pat,
        //     'apellido_mat' => $request->apellido_mat,
        //     'nombres' => $request->nombres
        // ];

        $pdf = \PDF::loadview('pdf.cedulapdf',['cedula'=>$cedula]);
        return $pdf->download('cedula0.pdf');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
