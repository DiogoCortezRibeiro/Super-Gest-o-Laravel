<?php

namespace App\Http\Middleware;

use App\LogAcesso;
use Closure;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $request manipular
        // $next empurra a requisição do request para frente
        $ipRequisicao  = $request->server->get('REMOTE_ADDR'); 
        $rotaAcessada = $request->getRequestUri();
        $mensagemLog = "Ip da requisição: $ipRequisicao, Rota acessada: $rotaAcessada";
        LogAcesso::create(['log' => $mensagemLog]);
        return $next($request);

        // response - manipular a resposta antes de entregar para o navegador
    }
}
