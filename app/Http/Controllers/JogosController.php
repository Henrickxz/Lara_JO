<?php

namespace App\Http\Controllers;

use App\Models\Jogos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validate;

class JogosController extends Controller
{
    //mostrar home
    public function mostrarHome()
    {
            return view('home');
    }

     //mostrar cadastro de jogos
     public function MostrarCadastroJogo(){
        return view('cadastrojogo');
    }

    //cadastrar jogo
    public function CadastrarJogo(Request $request){
        $registros = $request->validate([
            'nomeJogo'=>'string|required',
            'anoJogo'=>'string|required',
            'criadorJogo'=>'string|required',
            'medalhasJogo'=>'integer|required'
        ]);

        Jogos::create($registros);
        return Redirect::route('home');
    }
  
}
