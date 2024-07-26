<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use Illuminate\Support\Facades\Cache;

class MunicipioController extends Controller
{
    public function index(Request $request)
{
    $page = $request->get('page', 1);

    $cacheKey = 'estabelecimentos_page_' . $page;

    $municipios = Cache::remember($cacheKey, 5, function () {
        return Municipio::select(
            'id',
            'name'
        )->paginate(30);
    });

    return response()->json($municipios);
}

}
