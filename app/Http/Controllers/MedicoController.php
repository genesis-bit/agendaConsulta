<?php

namespace App\Http\Controllers;

use App\Models\medico;
use App\Models\genero;
use App\Models\especialidade;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            if(medico::where('user_id',Auth::user()->id)->first() || Auth::user()->tipo_user_id == 1)
                return view('Medico');
            else{
                $genero = genero::all();
                $especialidade = especialidade::all();
                return view('MedicoAdd', ['genero' => $genero, 'especialidade' => $especialidade]);
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
        try{
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            
            $medico = new medico();
            $medico->user_id = Auth::user()->id;
            $medico->identificacao = $request->Identificacao;
            $medico->ano_nascimento = $request->Ano;
            $medico->genero_id = $request->genero_id;
            $medico->telefone = $request->Telefone;  
            $medico->especialidade_id = $request->especialidade_id;      
            $medico->save()>0?$request->user()->update(['password' => Hash::make($request->password)]):"";
            return redirect()->route('medico.index');
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(medico $medico)
    {
        //
    }
}
