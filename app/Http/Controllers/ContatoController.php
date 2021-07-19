<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato()
    {
        /*
            para pegar todos os parametros do psot
            $request->all();
            
            ou se quisermos pegar parametro por parametro
            $request->input('nome');
        */

        /*if(!empty($request->all()))
        {
            $contato = new SiteContato();
            $contato->nome           = $request->input('nome');
            $contato->email          = $request->input('email');
            $contato->telefone       = $request->input('telefone');
            $contato->motivo_contato = $request->input('motivo_contato');
            $contato->mensagem       = $request->input('mensagem');
            $contato->save();
        }*/

        /*if(!empty($request->all()))
        {
            $contato = new SiteContato();
            $contato->fill($request->all());
            $contato->save();
        }*/

        $motivo_contatos = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        // realizar a validação do forms
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|min:10|max:1000'
        ]);
        //SiteContato::create($request->all());

        return view('site.contato');
    }
}
