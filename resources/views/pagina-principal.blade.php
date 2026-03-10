<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos Técnicos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER -->
<header class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Bem-vindo ao Portal de Cursos Técnicos</h1>
    <p class="lead">Conheça nossos cursos profissionais e prepare-se para o mercado de trabalho.</p>
  </div>
</header>

<!-- CURSOS -->
<section class="container my-5">

  <h2 class="text-center mb-4">Nossos Cursos</h2>

  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=1" class="card-img-top" alt="Desenvolvimento de Sistemas">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Aprenda programação, banco de dados, desenvolvimento web e criação de aplicativos modernos.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=2" class="card-img-top" alt="Administração">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Desenvolva habilidades em gestão empresarial, finanças, marketing e organização corporativa.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=3" class="card-img-top" alt="Meio Ambiente">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Estude sustentabilidade, gestão ambiental e preservação de recursos naturais.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Mecatrônica -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=4" class="card-img-top" alt="Mecatrônica">
        <div class="card-body">
          <h5 class="card-title">Mecatrônica</h5>
          <p class="card-text">
            Integre mecânica, eletrônica e programação para desenvolver sistemas automatizados e robóticos.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
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