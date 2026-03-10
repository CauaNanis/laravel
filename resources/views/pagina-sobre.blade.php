<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre - Portal de Cursos</title>

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
          <a class="nav-link" href="{{ route('principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('sobre') }}">Sobre</a>
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
    <h1>Sobre Nossa Instituição</h1>
    <p class="lead">Conheça nossa história, missão e compromisso com a educação.</p>
  </div>
</header>

<!-- SOBRE -->
<section class="container my-5">

  <div class="row align-items-center mb-5">
    
    <div class="col-md-6">
      <h2>Quem Somos</h2>
      <p>
        O Portal de Cursos é uma instituição dedicada à formação técnica e profissional de qualidade.
        Nosso objetivo é preparar estudantes para os desafios do mercado de trabalho, oferecendo
        cursos atualizados e alinhados às demandas da indústria e da tecnologia.
      </p>

      <p>
        Contamos com professores qualificados, infraestrutura moderna e metodologias de ensino
        voltadas para a prática profissional.
      </p>
    </div>

    <div class="col-md-6">
      <img src="https://picsum.photos/600/400?random=10" class="img-fluid rounded" alt="Instituição">
    </div>

  </div>

  <!-- MISSÃO VISÃO VALORES -->

  <div class="row g-4 text-center">

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Missão</h4>
          <p class="card-text">
            Oferecer educação técnica de qualidade, formando profissionais capacitados
            para atuar com responsabilidade e inovação no mercado de trabalho.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Visão</h4>
          <p class="card-text">
            Ser referência em ensino técnico, reconhecida pela excelência acadêmica
            e pela formação de profissionais preparados para o futuro.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Valores</h4>
          <p class="card-text">
            Ética, inovação, sustentabilidade, responsabilidade social e compromisso
            com a formação integral dos nossos estudantes.
          </p>
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