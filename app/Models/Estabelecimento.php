<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'estabelecimento';

    protected $fillable = [
        'cnpj_basico',
        'cnpj_ordem',
        'cnpj_dv',
        'identificador_id',
        'nome_fantasia',
        'situacao_cadastral_id',
        'data_situacao_cadastral',
        'motivo_situacao_cadastral_id',
        'nome_cidade_exterior',
        'pais_id',
        'data_inicio_atividade',
        'cnae_principal',
        'cnae_secundario',
        'tipo_logradouro',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'uf',
        'municipio_id',
        'ddd_primario',
        'telefone_primario',
        'ddd_secundario',
        'telefone_secundario',
        'ddd_fax',
        'fax',
        'email',
        'data_situacao_especial',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'cnpj_basico', 'cnpj_basico');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id', 'id');
    }
}