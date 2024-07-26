<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('estabelecimento', function (Blueprint $table) {
        $table->id();
        $table->integer('cnpj_basico');
        $table->integer('cnpj_ordem');
        $table->integer('cnpj_dv');
        $table->integer('identificador_id');
        $table->string('nome_fantasia');
        $table->integer('situacao_cadastral_id');
        $table->date('data_situacao_cadastral');
        $table->integer('motivo_situacao_cadastral_id');
        $table->string('nome_cidade_exterior')->nullable();
        $table->string('pais_id')->nullable();
        $table->date('data_inicio_atividade');
        $table->integer('cnae_principal');
        $table->string('cnae_secundario')->nullable();
        $table->string('tipo_logradouro');
        $table->string('logradouro');
        $table->string('numero');
        $table->string('complemento')->nullable();
        $table->string('bairro');
        $table->integer('cep');
        $table->string('uf', 2);
        $table->integer('municipio_id');
        $table->string('ddd_primario');
        $table->string('telefone_primario');
        $table->string('ddd_secundario')->nullable();
        $table->string('telefone_secundario')->nullable();
        $table->string('ddd_fax')->nullable();
        $table->string('fax')->nullable();
        $table->string('email')->nullable();
        $table->date('data_situacao_especial')->nullable();
        $table->timestamps();

        // Índices sugeridos
        // $table->index(['cnpj_basico', 'cnpj_ordem', 'cnpj_dv']);
        // $table->index('situacao_cadastral_id');
        // $table->index('cnae_principal');
        // $table->index(['uf', 'municipio_id']);

        // Chave estrangeira para a tabela empresas
        // $table->foreign('cnpj_basico')
        //       ->references('cnpj_basico')
        //       ->on('empresas')
        //       ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estabelecimento');
    }
}
