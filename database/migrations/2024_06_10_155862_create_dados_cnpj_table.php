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
        Schema::create('dados_cnpj', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cnpj_basico')->nullable();//
            $table->string('nome_fantasia')->nullable();//
            $table->integer('situacao_cadastral_id')->nullable();//
            $table->string('ddd_primario')->nullable();
            $table->string('telefone_primario')->nullable();
            $table->string('ddd_secundario')->nullable();
            $table->string('telefone_secundario')->nullable();
            $table->string('email')->nullable()->nullable();
            $table->string('tipo_logradouro')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->integer('municipio_id')->nullable();
            $table->string('uf')->nullable();
            $table->json('cnae_principal')->nullable();//
            $table->json('cnae_secundario')->nullable();//
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_cnpj');
    }
};
