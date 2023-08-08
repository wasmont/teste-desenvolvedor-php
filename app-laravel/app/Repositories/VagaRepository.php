<?php 

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\PrioridadeEnum;
use App\Enums\TipoContratacaoEnum;
use App\Models\Vaga;
use App\Interfaces\VagaRepositoryInterface;

class VagaRepository implements VagaRepositoryInterface {
    protected object $vaga;
    public function __construct(Vaga $vaga){

        $this->vaga = $vaga;
        
    }
    public function getVaga(int $id = null) : object
    {

        if(!empty($id)) {

            $resultado = $this->vaga
            ->select('*')
            ->where(['vaga.id' => $id])
            ->firstOrFail();

        } else {
            
            $resultado = $this->vaga
            ->select('*')
            ->get();

        }   
        
        return $resultado;
        
    }
    public function delete(int $id) : array
    {

        $deleted = ['deleted' => true];
        $noDeleted = ['deleted' => false];
        $resultado = $this->vaga->where('id', $id)->delete();
        return (intVal($resultado) == 1) ? $deleted : $noDeleted;
        
    }
    public function save(array $data) : object
    {

        $model = new $this->vaga;
        
        $model->titulo = $data['titulo'];
        $model->empresa = $data['empresa'];
        $model->detalhes = $data['detalhes'];
        $model->requisitos = $data['requisitos'];
        $model->escolaridade = $data['escolaridade'];
        $model->cep = $data['cep'];
        $model->endereco = $data['endereco'];
        $model->numero = $data['numero'];
        $model->complemento = $data['complemento'];
        $model->cidade = $data['cidade'];
        $model->estado = $data['estado'];
        $model->pais = $data['pais'];
        $model->salario = $data['salario'];
        $model->beneficios = $data['beneficios'];
        $model->tipo_contratacao = TipoContratacaoEnum::from($data['tipo_contratacao']);
        $model->horario_trabalho = $data['horario_trabalho'];
        $model->prioridade = PrioridadeEnum::from($data['prioridade']);
        $model->observacoes = $data['observacoes'];
        $model->pausar = $data['pausar'];
        $model->ativo = $data['ativo'];

        $model->save();

        return $model->fresh();
        
    }
    public function update(object $data) : object
    {
        $model = $this->vaga::find($data['id']);

        $model->titulo = $data['titulo'];
        $model->empresa = $data['empresa'];
        $model->detalhes = $data['detalhes'];
        $model->requisitos = $data['requisitos'];
        $model->escolaridade = $data['escolaridade'];
        $model->cep = $data['cep'];
        $model->endereco = $data['endereco'];
        $model->numero = $data['numero'];
        $model->complemento = $data['complemento'];
        $model->cidade = $data['cidade'];
        $model->estado = $data['estado'];
        $model->pais = $data['pais'];
        $model->salario = $data['salario'];
        $model->beneficios = $data['beneficios'];
        $model->tipo_contratacao = TipoContratacaoEnum::from($data['tipo_contratacao']);
        $model->horario_trabalho = $data['horario_trabalho'];
        $model->prioridade = PrioridadeEnum::from($data['prioridade']);
        $model->observacoes = $data['observacoes'];
        $model->pausar = $data['pausar'];
        $model->ativo = $data['ativo'];

        $model->save();

        return $model->fresh();
    }

}

