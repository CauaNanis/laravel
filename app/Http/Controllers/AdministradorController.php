<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
        function index(){ 
        return view('administrador.index');
    }

    function add(Request $dados) {
        $administrador = new \App\Models\AlunoModel();
        $administrador::create($dados->all());
				
        $administradores = new \App\Models\AlunoModel();
        return view('administrador.index', ['success'=>'Cadastrado!', 'administradores'=>$administradores::all()]);
    }

    function remove(string $id) {
        $administrador = new \App\Models\AlunoModel();
        $administrador::destroy($id);

        return view('administrador.index', ['success'=>'Removido!', 'administradores'=>$administrador::all()]);
    }

    function atualizar(string $id) {
        $administrador = new \App\Models\AlunoModel();
        $administrador = $administrador::find($id);

        return view('administrador.atualizar', ['administrador'=>$administrador]);
    }

    function save(Request $dados) {
        $administrador = new \App\Models\AlunoModel();
        $administrador = $administrador::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', ['success'=>'Atualizado!', 'administradores'=>$administrador::all()]);
    }
}
