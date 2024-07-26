<?php

namespace Database\Seeders;
use App\Models\PorteEmpresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PorteEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PorteEmpresa::create([
        //     'id' => 00,
        //     'name' => 'Não informado',
        // ]);
        PorteEmpresa::create([
            'id' => 01,
            'name' => 'Micro empresa',
        ]);
        PorteEmpresa::create([
            'id' => 03,
            'name' => 'Empresa de pequeno porte',
        ]);
        PorteEmpresa::create([
            'id' => 05,
            'name' => 'Demais',
        ]);
    }
}
