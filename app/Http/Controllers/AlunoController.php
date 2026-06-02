<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){ 
        $alunos = new \App\Models\AlunoModel();
        return view('aluno.index', ['alunos'=>$alunos::all()]);
    }

    function add(Request $dados) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());
				
        $alunos = new \App\Models\AlunoModel();
        return view('aluno.index', ['success'=>'Cadastrado!', 'alunos'=>$alunos::all()]);
    }

    function remove(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::destroy($id);

        $alunos = new \App\Models\AlunoModel();
        return view('aluno.index', ['success'=>'Removido!', 'alunos'=>$alunos::all()]);
    }

    function atualizar(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($id);

        return view('aluno.atualizar', ['aluno'=>$aluno]);
    }

    function save(Request $dados) {
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($dados->id);
        $aluno->update($dados->all());

        $alunos = new \App\Models\AlunoModel();
        return view('aluno.index', ['success'=>'Atualizado!', 'alunos'=>$alunos::all()]);
    }
}
