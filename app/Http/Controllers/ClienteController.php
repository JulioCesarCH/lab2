<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function viewFormulario(){
        return view("clientes.form");
     
     }

     public function viewLogin(){
        return view("login");
     
     }

     public function viewInicio(){
        return view("inicio");
     
     }

     public function viewClientes(){
        $resultados=DB::table('clientes')->get();
       return view("clientes.cliente")
        ->with("resultados",$resultados);
     }

     public function acceso(Request $request){
        $request->validate([
            "dni"=>"required",
            "password"=>"required"
        ]);

        $cliente = Cliente::where("dni",$request->input("dni"))->first();
        if($cliente!=null){
            if(Hash::check($request->input("password"),$cliente->password)){
                session_start();
                $_SESSION["idCliente"]=$cliente->id;
                $_SESSION["nCliente"]=$cliente->nombre;
                return redirect('/inicio');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        } 
     }

     public function guardar(Request $request){
        $request->validate([
            "dni"=>"required|unique:clientes",
            "nombre"=>"required",
            "password"=>"required|confirmed",
        ]);
        
        //dd($request);
        $cliente = new Cliente();
        $cliente->dni=$request->input("dni");
        $cliente->nombre=$request->input("nombre");
        $cliente->password=Hash::make($request->input("password"));
        $cliente->save();
        
         return redirect('/login');
 
     }

     public function guardar2(Request $request){
        $request->validate([
            "dni"=>"required|unique:clientes",
            "nombre"=>"required",
            "password"=>"required|confirmed",
        ]);
        
        //dd($request);
        $cliente = new Cliente();
        $cliente->dni=$request->input("dni");
        $cliente->nombre=$request->input("nombre");
        $cliente->password=Hash::make($request->input("password"));
        $cliente->save();
        
         return redirect('/clientes');
 
     }
}
