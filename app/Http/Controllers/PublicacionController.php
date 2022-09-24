<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Numero;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PublicacionController extends Controller
{
     public function viewSuscribe(){
        session_start();
        $resultados=DB::table('numeros')->get();
        $resultados2=DB::select('SELECT *FROM publicacions WHERE cliente_id = ?', [$_SESSION['idCliente']]);
       return view("suscripciones.suscripcion")
        ->with("resultados",$resultados)
        ->with("resultados2",$resultados2);

     }

     public function guardar(Request $request){
        $tema = Numero::where("id",$request->input("numero_id"))->first();
        $publicacion = new Publicacion();
        session_start();
        $publicacion->nombre=$_SESSION['nCliente'];
        $publicacion->tema=$tema->tema;
        $publicacion->cliente_id=$_SESSION['idCliente'];
        $publicacion->numero_id=$request->input("numero_id");
        $publicacion->save();
        
         return redirect('/suscripciones');
 
     }
}