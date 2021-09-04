<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';
        if($request->get('erro') == 1){
            $erro = "Usuario ou senha não existe";
        }

        if($request->get('erro') == 2){
            $erro = "Acesso negado.";
        }
        return view('site.login', ['erro' => $erro]);
    }

    public function autenticar(Request $request){
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha'   => 'required'
        ];

        // as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuario (e-mail) é obrigatorio',
            'senha.required' => 'O campo senha é obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $email    = $request->get('usuario');
        $password = $request->get('senha');

        // iniciar Model user para validar user
        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if(!empty($usuario)){
            session_start();
            $_SESSION['nome']  = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.cliente');
        }else{
            return redirect()->route('site.login', [
                'erro' => 1
            ]);
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.login');
    }
}
