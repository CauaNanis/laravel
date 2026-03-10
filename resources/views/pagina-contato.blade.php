<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato - Portal de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER -->
<header class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Entre em Contato</h1>
    <p class="lead">Envie sua mensagem ou tire suas dúvidas sobre nossos cursos.</p>
  </div>
</header>

<!-- CONTATO -->
<section class="container my-5">

  <div class="row g-5">

    <!-- FORMULÁRIO -->
    <div class="col-md-7">

      <h3 class="mb-4">Envie uma mensagem</h3>

      <form>

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Digite seu email">
        </div>

        <div class="mb-3">
          <label class="form-label">Assunto</label>
          <input type="text" class="form-control" placeholder="Assunto da mensagem">
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="5" placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar mensagem</button>

      </form>

    </div>

    <!-- INFORMAÇÕES -->
    <div class="col-md-5">

      <h3 class="mb-4">Informações</h3>

      <p><strong>Endereço:</strong><br>
      Rua Exemplo, 123<br>
      São Paulo - SP</p>

      <p><strong>Telefone:</strong><br>
      (11) 99999-9999</p>

      <p><strong>Email:</strong><br>
      contato@portalcursos.com</p>

      <img src="https://picsum.photos/500/300?random=20" class="img-fluid rounded mt-3" alt="Mapa localização">

    </div>

  </div>

</section>

<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-3">
  <p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
