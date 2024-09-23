<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "retorno teste";
    }

    public function pesquisaGeral() {
        $dados = Usuarios::get();
        return json_encode($dados);
    }

    public function filtrar(Request $request) {
        return ($request->cd_pessoa);
        $dados = Usuarios::where('cd_pessoa', '=', $request->cd_pessoa)->get();
        return json_encode($dados);
    }
}
