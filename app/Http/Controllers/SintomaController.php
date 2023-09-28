<?php

namespace App\Http\Controllers;

use App\Models\sintoma;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SintomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            if(Auth::user()->tipo_user_id == 1){
                $sintomas = sintoma::all();
                return view('Sintoma',['sintomas'=>$sintomas]);
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
        try{            
            $sintoma = new sintoma();
            $sintoma->descricao = $request->descricao;              
            return  $sintoma->save()>0?redirect()->route('manuntencao')->with('statuss', 'Sintoma Adicianado com sucesso'):'';
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sintoma $sintoma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sintoma $sintoma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sintoma $sintoma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sintoma $sintoma)
    {
        //
    }
}
