<?php

namespace App\Http\Controllers;

use App\Models\Cnaes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CnaesController extends Controller
{
    public function index(Request $request)
{
    $page = $request->get('page', 1);

    $cacheKey = 'cnaes_page_' . $page;

    $cnaes = Cache::remember($cacheKey, 5, function () {
        return Cnaes::select(
            'id',
            'name'
        )->paginate(30);
    });

    return response()->json($cnaes);
}

}