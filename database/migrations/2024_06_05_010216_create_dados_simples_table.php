<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosSimplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_simples', function (Blueprint $table) {
            $table->id();
            $table->integer('cnpj_basico');
            $table->boolean('opcao_simples')->default(false);
            $table->date('data_opcao_simples')->nullable();
            $table->date('data_exclusao_simples')->nullable();
            $table->boolean('opcao_mei')->default(false);
            $table->date('data_opcao_mei')->nullable();
            $table->date('data_exclusao_mei')->nullable();
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
        Schema::dropIfExists('dados_simples');
    }
}
