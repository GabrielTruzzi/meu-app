<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function listar($livro){
        return view ('livro', compact('livro'));
    }

    public function criar(){
        return view ('criarlivro');
    }

    public function postar(){
        echo "livro enviado com sucesso";
    }

}
