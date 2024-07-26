<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DadosCnpjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dados_cnpj')->insert(
            DB::table('estabelecimento')
                ->join('empresas', 'estabelecimento.cnpj_basico', '=', 'empresas.cnpj_basico')
                ->where('estabelecimento.situacao_cadastral_id', 2)
                ->select(
                    'estabelecimento.cnpj_basico',
                    'estabelecimento.nome_fantasia',
                    'estabelecimento.situacao_cadastral_id',
                    'estabelecimento.ddd_primario',
                    'estabelecimento.telefone_primario',
                    'estabelecimento.ddd_secundario',
                    'estabelecimento.telefone_secundario',
                    'estabelecimento.email',
                    'estabelecimento.municipio_id',
                    'estabelecimento.uf',
                    'estabelecimento.cnae_principal',
                    'estabelecimento.cnae_secundario',
                    'empresas.capital_social',
                    'estabelecimento.tipo_logradouro',
                    'estabelecimento.logradouro',
                    'estabelecimento.numero',
                    'estabelecimento.complemento',
                    'estabelecimento.bairro',
                    'estabelecimento.cep'
                )
                ->get()
                ->toArray()
        );
    }

}
