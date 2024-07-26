<?php

namespace Database\Seeders;

use App\Models\Estabelecimento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            //IdentificadorSeeder::class,
            //PorteEmpresaSeeder::class,
            //SituacaoCadastralSeeder::class,
            //IdentificadorSocioSedeer::class,
            //DadosCnpjSeeder::class,
            EstabelecimentoSeeder::class,
         ]);
    }
}
