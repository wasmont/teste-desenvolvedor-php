<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vaga', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('empresa');
            $table->text('detalhes'); 
            $table->string('requisitos'); 
            $table->string('escolaridade'); 
            $table->string('cep',12); 
            $table->string('endereco'); 
            $table->string('numero'); 
            $table->string('complemento');
            $table->string('cidade'); 
            $table->string('estado'); 
            $table->string('pais'); 
            $table->decimal('salario', $precision = 10, $scale = 2); 
            $table->string('beneficios'); 
            $table->string('tipo_contratacao')->default('clt'); 
            $table->string('horario_trabalho'); 
            $table->string('prioridade',20); 
            $table->text('observacoes'); 
            $table->boolean('pausar'); 
            $table->boolean('ativo')->default(true); 
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaga');
    }
};
