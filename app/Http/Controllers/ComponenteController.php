<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){ 
        return view('componente.index');
    }

    function add(Request $dados) {
        $componente = new \App\Models\AlunoModel();
        $componente::create($dados->all());
				
        $componentes = new \App\Models\AlunoModel();
        return view('componente.index', ['success'=>'Cadastrado!', 'componentes'=>$componentes::all()]);
    }

    function remove(string $id) {
        $componente = new \App\Models\AlunoModel();
        $componente::destroy($id);

        return view('componente.index', ['success'=>'Removido!', 'componentes'=>$componente::all()]);
    }

    function atualizar(string $id) {
        $componente = new \App\Models\AlunoModel();
        $componente = $componente::find($id);

        return view('componente.atualizar', ['componente'=>$componente]);
    }

    function save(Request $dados) {
        $componente = new \App\Models\AlunoModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        return view('componente.index', ['success'=>'Atualizado!', 'componentes'=>$componente::all()]);
    }
}
