<?php

namespace Database\Seeders;

use App\Models\Identificador;
use Illuminate\Database\Seeder;

class IdentificadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Identificador::create([
            'id' => 1,
            'name' => 'Matriz',
        ]);

        Identificador::create([
            'id' => 2,
            'name' => 'Filial',
        ]);
    }
}
