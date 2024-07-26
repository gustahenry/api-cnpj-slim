<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identificador extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'identificador';

    protected $fillable = [
        'codigo', 'name',
    ];
}
