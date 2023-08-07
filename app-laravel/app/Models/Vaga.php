<?php

namespace App\Models;

use App\Enums\TipoContratacaoEnum;
use App\Enums\PrioridadeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    //protected $fillable = ['id','titulo'];

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