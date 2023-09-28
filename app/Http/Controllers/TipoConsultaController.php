<?php

namespace App\Http\Controllers;

use App\Models\tipoConsulta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipoConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            if(Auth::user()->tipo_user_id == 1){
                $tipoConsulta = tipoConsulta::all();
                return view('tipoConsulta',['tipoConsulta'=>$tipoConsulta]);
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
            $tipoConsulta = new tipoConsulta();
            $tipoConsulta->descricao = $request->descricao;              
            return  $tipoConsulta->save()>0?redirect()->route('manuntencao')->with('statuss', 'Tipo Consulta Adicianado com sucesso'):'';
        }
        catch(Exception $e){
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tipoConsulta $tipoConsulta)
    {
        //
    }
}
