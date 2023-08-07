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
        Schema::create('candidato', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento'); 
            $table->string('telefone'); 
            $table->string('celular'); 
            $table->string('endereco'); 
            $table->string('numero'); 
            $table->string('complemento'); 
            $table->string('cidade'); 
            $table->string('estado'); 
            $table->string('cep'); 
            $table->string('pais'); 
            $table->string('url_linkedin'); 
            $table->text('qualificacoes'); 
            $table->integer('usuario_id'); 
            $table->integer('arquivo_id'); 
            $table->decimal('pretensao', $precision = 10, $scale = 2); 
            $table->text('observacoes'); 
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
        Schema::dropIfExists('candidato');
    }
};
