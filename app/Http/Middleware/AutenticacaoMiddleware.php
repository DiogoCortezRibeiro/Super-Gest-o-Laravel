<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao)
    {
        // verifica se o suuario possui acesso a rota
        session_start();

        if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
            return $next($request);
        }

        return redirect()->route('site.login', ['erro' => 2]);
    }
}
