<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        try{
            return response()->json(
                [
                    'error'=>false,
                    'message'=>'all',
                    'data'=>Cliente::All()
                ],200
            );   
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(
                [
                    'error'=>true,
                    'message'=>$e->getMessage()
                ],500
            );
        }
    }
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $request->validate([
                'nome',
                'cpf',
                'telefone',
                'placa_carro'
            ]);
            $new    =  
            $return = Cliente::create($request->all());
            DB::commit();
            return response()->json(
                [
                    'error'=>false,
                    'message'=>'add',
                    'data'=>$return
                ],200
            );   
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(
                [
                    'error'=>true,
                    'message'=>$e->getMessage()
                ],500
            );
        }
    }

    public function update(Request $request,$id){
        try{
            DB::beginTransaction();
            $request->validate([
                'nome',
                'cpf',
                'telefone',
                'placa_carro'
            ]);
            $cliente        = CLiente::FindOrFail($id);
            $cliente->update($request->all());
            DB::commit();
            return response()->json(
                [
                    'error'=>false,
                    'message'=>'updated',
                    'data'=>$cliente
                ],200
            );   
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(
                [
                    'error'=>true,
                    'message'=>$e->getMessage()
                ],500
            );
        }
    }

    public function show($id){
        try{
            return response()->json(
                [
                    'error'=>false,
                    'message'=>'Show',
                    'data'=>CLiente::FindOrFail($id)
                ],200
            );             
        }catch(\Exception $e){
            return response()->json(
                [
                    'error'=>true,
                    'message'=>$e->getMessage()
                ],500
            );
        }
    }

    public function delete($id){
        try{
            DB::beginTransaction();
            $return = Cliente::destroy($id);
            DB::commit();
            return response()->json(
                [
                    'error'=>false,
                    'message'=>'destroyed!'
                ],200
            );
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(
                [
                    'error'=>true,
                    'message'=>$e->getMessage()
                ],500
            );
        }
    }

    public function consultaFinalPlaca($numero){
        try{
            $clientes = Cliente::where('placa_carro','LIKE','%'.$numero)->get();
            return response()->json(
                [
                    'error'=>false,
                    'message'=>'clientes com a placa do veículo terminado em '.$numero,
                    'data'=>$clientes
                ],200
            );
        }catch(\Exception $e){
            return response()->json(
                [
                    'error'=>true,'message'=>$e->getMessage()
                ],500
            );
        }
    }

}
