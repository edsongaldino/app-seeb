<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pessoa_id')->constrained('pessoa')->after('id');
            $table->enum('ativo_eee', ['Sim', 'Não'])->nullable();
            $table->enum('curso_instituto', ['Noções Básicas de Doutrina Espírita', 'Nosso Lar', 'Passe', 'Corrente Magnética', 'Vibração', 'Instituto'])->nullable();
            $table->enum('instituto_trabalho', ['Caridade', 'Comunicação Social', 'Divulgação', 'Esclarecimento e Família', 'Criança', 'Jovem'])->nullable();
            $table->enum('atividade_mediunica', ['Sim', 'Não'])->nullable();
            $table->enum('participa_atv_assistencial', ['Sim', 'Não'])->nullable();
            $table->enum('atividade_assistencial', ['Sábado de Manhã', 'Campanha de Fraternidade Auta de Souza', 'Posto de Assistência'])->nullable();
            $table->integer('ano_inicio')->nullable();
            $table->enum('como_conheceu', ['Redes Sociais', 'Mensagem Recebida', 'Indicação de Alguém', 'Buscadores'])->nullable();
            $table->enum('motivo_participacao', ['Tratamento Espiritual', 'Palestra Pública', 'Escola de Estudos Espíritas', 'Trabalho Assistencial', 'Mediunidade'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalhador');
    }
}
