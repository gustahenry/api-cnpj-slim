<?php

namespace App\Http\Controllers;

use App\Models\Identificador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IdentificadorController extends Controller
{
    public function index(Request $request)
{
    $page = $request->get('page', 1);

    $cacheKey = 'identificador_page_' . $page;

    $identificadores = Cache::remember($cacheKey, 5, function () {
        return Identificador::select(
            'id',
            'name'
        )->paginate(30);
    });

    return response()->json($identificadores);
}

}