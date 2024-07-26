<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentificadorSocio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'identificador_socio';

    protected $fillable = [
        'codigo', 'name',
    ];
}