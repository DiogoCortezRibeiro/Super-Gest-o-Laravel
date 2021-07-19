{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    {{-- sigla = falsificação de solicitação entre sites --}}
    @csrf
    <input type="text" placeholder="Nome" class="{{ $classeBorda }}" name="nome" value="{{ old('nome')}}"><br>
    <input type="text" placeholder="Telefone" class="{{ $classeBorda }}" name="telefone" value="{{ old('telefone')}}"><br>
    <input type="text" placeholder="E-mail" class="{{ $classeBorda }}" name="email" value="{{ old('email')}}"><br>
    <select class="{{ $classeBorda }}" name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $key }}" {{ old('motivo_contato') == $key ? 'selected' : '' }}>{{ $motivo_contato }}</option>
        @endforeach
    </select><br>
    <textarea class="{{ $classeBorda }}" name="mensagem"> {{ (old('mensagem') != '') ?  old('mensagem') : "Preencha aqui a sua mensagem" }} </textarea>
    <br>
    <button type="submit" class="{{ $classeBorda }}">ENVIAR</button>
</form>