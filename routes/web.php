<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ------------------------------ */
Route::get('/', function () { // rota api

    $api = Http::get('https://api.github.com/users/Robertobarross'); // Requisitando api dados do usuário
    $apiArray = $api->json(); // Chamada de dados em json

return view('api', ['apiArray' => $apiArray]); // Retornado a view api e declarando variáveis
});
/* ------------------------------ */


/* ------------------------------ */
Route::get('/show', function () { // Rota show

    $repos = Http::get('https://api.github.com/users/robertobarross/repos');  // Requisitando repositórios/projetos do usuário
    $reposArray = $repos->json(); // Chamada de dados em json

    return view('show', ['reposArray' => $reposArray]); // Retornado a view show e declarando variáveis
});
/* ------------------------------ */
