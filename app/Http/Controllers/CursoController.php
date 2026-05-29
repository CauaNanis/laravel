<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function index(){ 
        return view('curso.index');
    }

    function add(Request $dados) {
        $curso = new \App\Models\AlunoModel();
        $curso::create($dados->all());
				
        $cursos = new \App\Models\AlunoModel();
        return view('curso.index', ['success'=>'Cadastrado!', 'cursos'=>$cursos::all()]);
    }

    function remove(string $id) {
        $curso = new \App\Models\AlunoModel();
        $curso::destroy($id);

        return view('curso.index', ['success'=>'Removido!', 'cursos'=>$curso::all()]);
    }

    function atualizar(string $id) {
        $curso = new \App\Models\AlunoModel();
        $curso = $curso::find($id);

        return view('curso.atualizar', ['curso'=>$curso]);
    }

    function save(Request $dados) {
        $curso = new \App\Models\AlunoModel();
        $curso = $curso::find($dados->id);
        $curso->update($dados->all());

        return view('curso.index', ['success'=>'Atualizado!', 'cursos'=>$curso::all()]);
    }
}
