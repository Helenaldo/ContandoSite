<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function create() {
        $cidades = Http::get(env("API_PAINEL_BASE_URL"). '/cidades')['data'];
        $errors = [];
        return view('register', compact( 'cidades', 'errors'));
    }

    public function store(Request $request)
    {
        $cidades = Http::get(env("API_PAINEL_BASE_URL"). '/cidades')['data'];
        $data = $request->only([
            "tipo_identificacao",
            "cnpj_cpf",
            "nome",
            "email",
            "cep",
            "logradouro",
            "numero",
            "bairro",
            "complemento",
            "telefone",
            "cidade_id"
        ]);

        $action = Http::acceptJson()->post(env("API_PAINEL_BASE_URL").'/tenants', $data)->json();


        if(isset($action['errors'])) {
            return view('register', [
                'errors' => $action['errors'],
                'cidades' => $cidades
            ]);
        }
        return redirect(route('welcome'));
    }

    public function welcome() {
        return view('welcome');
    }
}


