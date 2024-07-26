<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio', function (Blueprint $table) {
            $table->id();
            $table->integer('cnpj_basico');
            $table->integer('identificador_socio_id');
            $table->string('nome_socio');
            $table->string('cnpj_cpf_socio');
            $table->integer('qualidicacao_socio_id');
            $table->date('data_entrada_sociedade');
            $table->string('pais_id')->nullable();
            $table->string('representante_legal')->nullable();
            $table->string('nome_representante')->nullable();
            $table->integer('qualidicacao_representante_legal')->nullable();
            $table->integer('faixa_etaria');
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
        Schema::dropIfExists('socio');
    }
}
