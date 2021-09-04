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

        if($metodo_autenticacao == 'padrao')
        {
            // executa metodo padroa
        }

        if($metodo_autenticacao == 'outroMetodo')
        {
            // executa outro metodo
        }

        if(true){
            return $next($request);
        }
        
       return Response("Acesso negado! Rota exige autenticação!!");
    }
}
