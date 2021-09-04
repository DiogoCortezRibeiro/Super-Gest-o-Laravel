@extends('site.layouts.basico')

@section('titulo', 'Login')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuario" class="borda-preta">
                    <span style="font-size: 14px;color: red;">{{ $errors->has('usuario') ? $errors->first('usuario') : '' }}<span>
                    <input name="senha" type="password" placeholder="Senha" class="borda-preta">
                    <span style="font-size: 14px;color: red;">{{ $errors->has('senha') ? $errors->first('senha') : '' }}<span>
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
                <span style="font-size: 14px;color: red;">{{ isset($erro) && $erro != '' ? $erro : '' }}</span>
            </div>
        </div>  
    </div>
@endsection