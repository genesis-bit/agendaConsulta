<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use App\Models\tipoConsulta;
use App\Models\sintoma;
use App\Models\especialidade;
use App\Models\User;
use App\Models\genero;
use Illuminate\Support\Facades\Auth;
use Exception;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $dados = paciente::with(['user', 'genero'])->get();
            return view('Admin',['pacientes' => $dados]); 
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        } 
               
    }

    public function manuntencao()
    {
        try{
            if(Auth::user()->tipo_user_id == 1){
                $especialidade = especialidade::all();
                $tipoconsulta = tipoConsulta::all();
                $sintomas = sintoma::all();
                return view('manutencao',['especialidade'=>$especialidade,'tipoConsulta'=>$tipoconsulta,'sintomas'=>$sintomas]);
            }                
            else{
                return "Não és Admin";
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
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
