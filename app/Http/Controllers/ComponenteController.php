<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){ 
        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['componentes'=>$componentes::all()]);
    }

    function add(Request $dados) {
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());
				
        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Cadastrado!', 'componentes'=>$componentes::all()]);
    }

    function remove(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente::destroy($id);

        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Removido!', 'componentes'=>$componentes::all()]);
    }

    function atualizar(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($id);

        return view('componente.atualizar', ['componente'=>$componente]);
    }

    function save(Request $dados) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Atualizado!', 'componentes'=>$componentes::all()]);
    }
}
