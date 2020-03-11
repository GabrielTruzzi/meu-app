<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Livro;

class LivroController extends Controller
{
    public function listar(){
        $livros = Livro::all();
        return view('livro', compact('livros'));
    }


    public function criar(){
        return view ('criarlivro');
    }

    public function salvar(Request $request){
       
        $objeto_livro = new Livro;

        $objeto_livro->titulo = $request->titulo;
        $objeto_livro->autor = $request->autor;
        $objeto_livro->isbn = $request->isbn;
        $objeto_livro->procedencia = $request->procedencia;

        $objeto_livro->save();

        return redirect("/livro");
    }

}
