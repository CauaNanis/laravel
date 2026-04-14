<form action="{{ route('aluno.adicionar') }}" method="post">
    @csrf
    <label for="nome"></label>
    <input type="text" name="nome" id="nome" placeholder="Nome do aluno">

    <label for="email"></label>
    <input type="text" name="email" id="email" placeholder="Email do aluno">

    <button type="submit">Salvar</button>
    @isset($sucesso)
        {{ $sucesso }}
    @endisset
</form>