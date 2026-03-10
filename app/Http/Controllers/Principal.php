<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function index(){
        return view('pagina-principal');
    }

    function sobre(){
        return view('pagina-sobre');
    }

    function contato(){
        return view('pagina-contato');
    }

    function cursos(){
        return view('pagina-cursos');
    }

    function ds(){
        return view('pagina-ds');
    }

    function adm(){
        return view('pagina-adm');
    }
    
    function ma(){
        return view('pagina-ma');
    }

    function meca(){
        return view('pagina-meca');
    }
    
}


