<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use Illuminate\Support\Facades\Cache;

class PaisController extends Controller
{
    public function index(Request $request)
{
    $page = $request->get('page', 1);

    $cacheKey = 'paises_page_' . $page;

    $paises = Cache::remember($cacheKey, 5, function () {
        return Pais::select(
            'id',
            'name'
        )->paginate(30);
    });

    return response()->json($paises);
}

}