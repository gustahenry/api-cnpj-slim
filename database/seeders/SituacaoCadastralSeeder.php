<?php

namespace Database\Seeders;

use App\Models\SituacaoCadastral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SituacaoCadastralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SituacaoCadastral::create([
            'id' => 1,
            'name' => 'Nula',
        ]);
        SituacaoCadastral::create([
            'id' => 2,
            'name' => 'Ativa',
        ]);
        SituacaoCadastral::create([
            'id' => 3,
            'name' => 'Suspensa',
        ]);
        SituacaoCadastral::create([
            'id' => 4,
            'name' => 'Inapta',
        ]);
        SituacaoCadastral::create([
            'id' => 8,
            'name' => 'Baixada',
        ]);
        
    }
}
