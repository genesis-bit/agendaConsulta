<?php

namespace App\Http\Controllers;

use App\Models\paciente;
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
        //
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
            return $paciente->save();
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
