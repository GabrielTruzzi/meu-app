<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Pessoa;

class PessoaController extends Controller
{
    public function listar(){
        $pessoas = Pessoa::all();
        return view('pessoa', compact('pessoas'));
    }


    public function criar(){
        return view ('criarpessoa');
    }

    public function salvar(Request $request){
       
        $objeto_pessoa = new Pessoa;

        $objeto_pessoa->nome = $request->nome;
        $objeto_pessoa->cpf = $request->cpf;
        $objeto_pessoa->email = $request->email;
        $objeto_pessoa->idade = $request->idade;

        $objeto_pessoa->save();

        return redirect("/pessoa");
    }

}
