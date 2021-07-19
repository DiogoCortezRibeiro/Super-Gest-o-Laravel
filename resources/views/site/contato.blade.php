@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts.form_contato',['classeBorda' => 'borda-preta', 'rota' => 'site.contato', 'motivo_contatos' => $motivo_contatos])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível!</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent
            </div>
        </div>  
    </div>
@endsection