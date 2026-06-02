<form action="{{ route('curso.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $curso->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $curso->nome }}">

        <label for="curso">Curso</label>
        <input type="text" name="curso" id="curso" value="{{ $curso->curso }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>