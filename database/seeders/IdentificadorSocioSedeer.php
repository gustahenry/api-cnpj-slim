<?php

namespace Database\Seeders;

use App\Models\IdentificadorSocio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentificadorSocioSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IdentificadorSocio::create([
            'id' => 1,
            'name' => 'Pessoa juridica',
        ]);
        IdentificadorSocio::create([
            'id' => 2,
            'name' => 'Pessoa fisica',
        ]);
        IdentificadorSocio::create([
            'id' => 3,
            'name' => 'Estrangeiro',
        ]);
    }
}
