<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use App\Models\genero;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
           if(paciente::where('user_id',Auth::user()->id)->first())
                return view('solicitar-consulta');
            else{
                if(Auth::user()->tipo_user_id == 2)
                    return "rota invalida";
                $genero = genero::all();   
                return view('PacienteAdd',['genero' => $genero]);
            }       
         }
         catch(Exception $e){
             return response()->json($e->getMessage(), 400);
         } 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * user_id	identificacao	ano_nascimento	genero_id	telefone	created_at	updated_at	

     */
    public function store(Request $request)
    {
        //
        try{
           $paciente = new paciente();
            $paciente->user_id = Auth::user()->id;
            $paciente->identificacao = $request->Identificacao;
            $paciente->ano_nascimento = $request->Ano;
            $paciente->genero_id = $request->genero_id;
            $paciente->telefone = $request->Telefone;       
            return $paciente->save() > 0 ? redirect()->route('paciente.index'): '';
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }            
        
    }

    /**
     * Display the specified resource.
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paciente $paciente)
    {
        //
    }
}
