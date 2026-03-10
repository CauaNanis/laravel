<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos - Portal de Cursos</title>

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
          <a class="nav-link active" href="{{ route('cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('principal') }}contato">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER -->
<header class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Nossos Cursos</h1>
    <p class="lead">Conheça os cursos técnicos disponíveis e escolha o seu futuro profissional.</p>
  </div>
</header>

<!-- CURSOS -->
<section class="container my-5">

  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=11" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Curso focado em programação, banco de dados, desenvolvimento web e criação de aplicativos.
          </p>
          <a href="{{ route('ds') }}" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=12" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Aprenda gestão empresarial, organização de empresas, marketing e planejamento estratégico.
          </p>
          <a href="{{ route('adm') }}" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=13" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Estude sustentabilidade, preservação ambiental e técnicas de gestão de recursos naturais.
          </p>
          <a href="{{ route('ma') }}" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

    <!-- Mecatrônica -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://picsum.photos/400/250?random=14" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Mecatrônica</h5>
          <p class="card-text">
            Integra mecânica, eletrônica e programação para desenvolver sistemas automatizados e robótica.
          </p>
          <a href="{{ route('meca') }}" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

  </div>

</section>

<!-- SEÇÃO EXTRA -->
<section class="bg-light p-5">
  <div class="container text-center">
    <h2>Por que estudar conosco?</h2>
    <p class="lead">
      Oferecemos ensino de qualidade, professores experientes e laboratórios modernos
      para preparar você para o mercado de trabalho.
    </p>
  </div>
</section>

<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-3">
  <p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>