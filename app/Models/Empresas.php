<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'empresas';

    public function estabelecimentos()
    {
        return $this->hasMany(Estabelecimento::class, 'cnpj_basico', 'cnpj_basico');
    }

}
