<?php

namespace App\Http\Controllers;

use App\Models\IdentificadorSocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IdentificadorSocioController extends Controller
{
    public function index(Request $request)
{
    $page = $request->get('page', 1);

    $cacheKey = 'identificador_socio_page_' . $page;

    $identificadore_socios = Cache::remember($cacheKey, 5, function () {
        return IdentificadorSocio::select(
            'id',
            'name'
        )->paginate(30);
    });

    return response()->json($identificadore_socios);
}

}