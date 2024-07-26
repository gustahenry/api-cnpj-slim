<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;
use Illuminate\Support\Facades\DB;
use App\Models\Municipio;
use Illuminate\Support\Facades\Cache;

class EstabelecimentoController extends Controller
{
    public function index(Request $request)
    {

        $estabelecimentos = Estabelecimento::with('empresa','municipio')->paginate(10);

        return response()->json($estabelecimentos);
    }

    public function show($cnpj_basico)
    {

        $estabelecimento = Estabelecimento::select(
            'id',
            'nome_fantasia',
            'ddd_primario',
            'telefone_primario',
            'ddd_secundario',
            'telefone_secundario',
            'email',
            'cnae_principal',
            'cnae_secundario',
            'tipo_logradouro',
            'logradouro',
            'numero',
            'complemento',
            'bairro',
            'cep',
            'municipio_id',
            'uf'
        )->where('cnpj_basico', $cnpj_basico)->first();

        if ($estabelecimento) {
            return response()->json($estabelecimento);
        } else {
            return response()->json(['message' => 'Estabelecimento não encontrado'], 404);
        }
    }

    public function findByMunicipio($id)
    {

        $estabelecimentos = Estabelecimento::select(
            'id',
            'nome_fantasia',
            'ddd_primario',
            'telefone_primario',
            'ddd_secundario',
            'telefone_secundario',
            'email',
            'cnae_principal',
            'cnae_secundario',
            'tipo_logradouro',
            'logradouro',
            'numero',
            'complemento',
            'bairro',
            'cep',
            'municipio_id',
            'uf'
        )->where('municipio_id', $id)->where('situacao_cadastral_id', 2)->paginate(30);

        if ($estabelecimentos->isEmpty()) {
            return response()->json(['message' => 'Nenhum estabelecimento encontrado para este município.'], 404);
        }

        return response()->json($estabelecimentos);
    }
    
}
