<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
        function index(){ 
        return view('professor.index');
    }

    function add(Request $dados) {
        $professor = new \App\Models\AlunoModel();
        $professor::create($dados->all());
				
        $professores = new \App\Models\AlunoModel();
        return view('professor.index', ['success'=>'Cadastrado!', 'professores'=>$professores::all()]);
    }

    function remove(string $id) {
        $professor = new \App\Models\AlunoModel();
        $professor::destroy($id);

        return view('professor.index', ['success'=>'Removido!', 'professores'=>$professor::all()]);
    }

    function atualizar(string $id) {
        $professor = new \App\Models\AlunoModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

    function save(Request $dados) {
        $professor = new \App\Models\AlunoModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success'=>'Atualizado!', 'professores'=>$professor::all()]);
    }
}
