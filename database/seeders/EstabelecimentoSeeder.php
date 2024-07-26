<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use League\Csv\Reader;
use Illuminate\Support\Facades\Log;

class EstabelecimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Defina o caminho do arquivo CSV corretamente
        $filePath = 'C:\Users\gusta\Downloads\Estabelecimentos1\K3241.K03200Y1.D40511.csv';

        // Verifique se o arquivo existe
        if (!file_exists($filePath)) {
            Log::error("Arquivo CSV não encontrado: {$filePath}");
            return;
        }

        // Configuração do leitor CSV
        $csv = Reader::createFromPath($filePath, 'r');

        $count = 0;
        foreach ($csv as $record) {

            // $record = @explode( ';' , $record[0]);

            $record = str_getcsv($record[0], ';');


            $new_record = [];
            foreach ($record as $item) {
                if (strpos($item, '"') !== false) {
                    $sub_items = str_getcsv($item, ';');
                    $new_record = array_merge($new_record, $sub_items);
                } else {
                    $new_record[] = $item;
                }
            }

            $record = $new_record;


            // $record = array_map(function($record) {
            //     return str_replace('"', '', $record);
            // }, $record);

            // $record = array_map(function($record) {
            //     // Remove todos os caracteres exceto letras, números e espaços
            //     $cleaned_record = preg_replace('/[^A-Za-z0-9\s]/', '', $record);
            //     return $cleaned_record;
            // }, $record);

            // $record = array_map(function($record) {
            //     return str_replace(';', '', $record);
            // }, $record);

            if ($record[5] != 2) {
                continue;
            }

            // $cnae_secundario = explode(',', $record[12]);
            // $cnae_secundario_json = json_encode($cnae_secundario);

            print_r($record);
            //dd($record);

            DB::table('dados_cnpj')->insert([
                'cnpj_basico' => (int) $record[0], // Índice 0 para cnpj_basico
                'nome_fantasia' => $record[4], // Índice 4 para nome_fantasia
                'situacao_cadastral_id' => $record[5], // Índice 5 para situacao_cadastral_id
                'cnae_principal' => (int) $record[11], // Índice 11 para cnae_principal
                //'cnae_secundario' => $cnae_secundario_json, // Índice 12 para cnae_secundario
                'tipo_logradouro' => $record[13], // Índice 13 para tipo_logradouro
                'logradouro' => $record[14], // Índice 14 para logradouro
                'numero' => $record[15], // Índice 15 para numero
                'complemento' => $record[16], // Índice 16 para complemento
                'bairro' => $record[17], // Índice 17 para bairro
                'cep' => (int) $record[18], // Índice 18 para cep
                'uf' => $record[19], // Índice 19 para uf
                'municipio_id' => (int) $record[20], // Índice 20 para municipio_id
                'ddd_primario' => $record[21], // Índice 21 para ddd_primario
                'telefone_primario' => $record[22], // Índice 22 para telefone_primario
                'ddd_secundario' => $record[23], // Índice 23 para ddd_secundario
                'telefone_secundario' => $record[24], // Índice 24 para telefone_secundario
                'email' => $record[27], // Índice 27 para email
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $count++;
            Log::info("Registro inserido #{$count}: CNPJ {$record[0]}");

            // Limita a inserção a apenas 5 registros
            if ($count >= 2) {
                break;
            }
        }
    }
}
