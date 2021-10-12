<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){ // Pesquisar repositórios
        $repos = Http::all();

        $search = request('search');
        if($search){
            $repos = Http::where([
                ['repos', 'like', '%' .$search. '%']
            ])->get();

        } else {
            $repos = Http::all(); // Pegando arquivos do Link
        }
        return view('show', ['repos' => $repos, 'search' => $search]);
    }
}
