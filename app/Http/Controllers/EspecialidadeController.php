<?php

namespace App\Http\Controllers;

use App\Models\especialidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
       
       
         /*;
        try{
            if(Auth::user()->tipo_user_id == 1){
                $especialidade = especialidade::all();
                return view('Especialidade',['especialidade'=>$especialidade]);
            }
                
            else{
                return "Não és Admin";
            }                
            
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        } 
    */}

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
            $especialidade = new especialidade();
            $especialidade->descricao = $request->descricao;              
            return  $especialidade->save()>0?redirect()->route('manuntencao')->with('statuss', 'Especialidade Adicianado com sucesso'):'';
         }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(especialidade $especialidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(especialidade $especialidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, especialidade $especialidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(especialidade $especialidade)
    {
        //
    }
}
