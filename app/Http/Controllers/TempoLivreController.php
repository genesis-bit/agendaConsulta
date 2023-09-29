<?php

namespace App\Http\Controllers;

use App\Models\tempoLivre;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class TempoLivreController extends Controller
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
     */
    public function store(Request $request)
    {
        try{     
            if(Auth::user()->tipo_user_id == 3)
                return "Sem permissão";   
            $tempoL = new tempoLivre();
            $tempoL->data = $request->data;   
            $tempoL->medico_id = Auth::user()->id; 
            $tempoL->consultorio_id = $request->consultorio_id;              
            return  $tempoL->save()>0?redirect()->route('agenda')->with('statuss', 'Adicianado com sucesso'):'';
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tempoLivre $tempoLivre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tempoLivre $tempoLivre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tempoLivre $tempoLivre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tempoLivre $tempoLivre)
    {
        //
    }
}
