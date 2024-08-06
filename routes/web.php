<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\CnaesController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\IdentificadorController;
use App\Http\Controllers\IdentificadorSocioController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use App\Http\Middleware\CorsMiddleware;
use App\Models\IdentificadorSocio;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Retorna campos auxiliares

$router->group(['middleware' => CorsMiddleware::class], function () use ($router) {
    $router->get('/test-cors', function () {
        return response()->json(['message' => 'CORS Middleware is working']);
    });
    $router->get('/municipios', 'MunicipioController@index');
    $router->get('/paises', 'PaisController@index');
    $router->get('/identificadores', 'IdentificadorController@index');
    $router->get('/cnaes', 'CnaesController@index');
    $router->get('/identificador_socio', 'IdentificadorSocioController@index');

    $router->get('/estabelecimentos', 'EstabelecimentoController@index'); // Retorna 10 registros
    $router->get('/estabelecimentos/{cnpj_basico}', 'EstabelecimentoController@show'); // Retorna registro baseado no início do CNPJ, todo o valor antes do /0001-01
    $router->get('/estabelecimentos/municipio/{id}', 'EstabelecimentoController@findByMunicipio'); // Retorna registro com base no ID do município
});




