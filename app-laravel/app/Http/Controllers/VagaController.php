<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\VagaStoreRequest;
use App\Repositories\VagaRepository;

class VagaController extends Controller
{
    protected object $vagaRepository;
    public function __construct(VagaRepository $vagaRepository) {

        $this->vagaRepository = $vagaRepository;

    }
    public function getVaga(int $id = null) : object {

        $resultado = ['status' => 200];
        
        try {
            $resultado['data'] = $this->vagaRepository->getVaga($id);
        } catch (\Exception $e) {
            $resultado = ['status' => 401, 'error' => "Nao foi possivel encontrar Vaga!"];
        }
        
        return response()->json($resultado, $resultado['status']);

    }
    public function destroy(int $id) : object
    {
        $resultado = ['status' => 200];
        
        try {
            $resultado['data'] = $this->vagaRepository->delete($id);
        } catch (\Exception $e) {
            $resultado = ['status' => 401, 'error' => "Nao foi possivel remover a Vaga!"];
        }
        
        return response()->json($resultado, $resultado['status']);
    }

    /**
    * Save the specified resource in storage.
    *
    * @param  VagaStoreRequest  $request
    * @return Response
    */
    public function store(VagaStoreRequest $request) : object
    {
        //ini_set("memory_limit","-1");
        $resultado = ['status' => 200];
        try {
            $resultado['data'] = $this->vagaRepository->save($request->validated());
        } catch (\Exception $e) {
            $resultado = ['status' => 401, 'error' => "Nao foi possivel adicionar o item!"];
        }
        
        return response()->json($resultado, $resultado['status']);

    }

    /**
    * Update the specified resource in storage.
    *
    * @param  VagaStoreRequest $request
    * @return Response
    */
    public function update(VagaStoreRequest $request) : object
    {
        $resultado = ['status' => 200];
        $data = ($request->validated()) ? $request : [];

        try {
            $resultado['data'] = $this->vagaRepository->update($data);
        } catch (\Exception $e) {
            $resultado = ['status' => 401, 'error' => "Nao foi possivel atualizar o registro!"];
        }
        
        return response()->json($resultado, $resultado['status']);
    }



}
