<?php

namespace App\Models;

use App\Enums\TipoContratacaoEnum;
use App\Enums\PrioridadeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $table = 'vaga';
    public $timestamps = true;
    //protected $hidden = ['created_at','updated_at'];
    protected $fillable = [ 
                            'id',
                            'titulo',
                            'empresa',
                            'detalhes',
                            'requisitos',
                            'escolaridade',
                            'cep',
                            'endereco',
                            'numero',
                            'complemento',
                            'cidade',
                            'estado',
                            'pais',
                            'salario',
                            'beneficios',
                            'tipo_contratacao',
                            'horario_trabalho',
                            'prioridade',
                            'observacoes',
                            'pausar',
                            'ativo',
                            'created_at',
                            'updated_at'
                        ];
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $tipo_contratacao = [
        'tipo_contratacao' => TipoContratacaoEnum::class
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $prioridade = [
        'prioridade' => PrioridadeEnum::class
    ];

}