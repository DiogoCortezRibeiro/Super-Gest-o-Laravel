{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    {{-- sigla = falsificação de solicitação entre sites --}}
    @csrf
    <input type="text" placeholder="Nome" class="{{ $classeBorda }}" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="{{ $classeBorda }}" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="{{ $classeBorda }}" name="email">
    <br>
    <select class="{{ $classeBorda }}" name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $classeBorda }}" name="mensagem" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="{{ $classeBorda }}">ENVIAR</button>
</form>