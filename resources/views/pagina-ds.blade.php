<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Desenvolvimento de Sistemas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="index.html">Portal de Cursos</a>
</div>
</nav>

<header class="bg-primary text-white text-center p-5">
<div class="container">
<h1>Desenvolvimento de Sistemas</h1>
<p class="lead">Curso técnico focado na criação de softwares, sites e aplicativos.</p>
</div>
</header>

<section class="container my-5">

<div class="row">
<div class="col-md-6">
<img src="https://picsum.photos/600/400?random=11" class="img-fluid rounded">
</div>

<div class="col-md-6">
<h3>Sobre o curso</h3>
<p>
Neste curso o aluno aprende lógica de programação, desenvolvimento web,
banco de dados e criação de aplicativos.
</p>

<h4>O que você vai aprender</h4>

<ul>
<li>Lógica de programação</li>
<li>HTML, CSS e JavaScript</li>
<li>Banco de dados</li>
<li>Desenvolvimento de sistemas</li>
<li>Criação de aplicativos</li>
</ul>

<a href="{{ route('cursos') }}" class="btn btn-primary">Voltar</a>

</div>
</div>

</section>

<footer class="bg-dark text-white text-center p-3">
<p class="mb-0">© 2026 Portal de Cursos</p>
</footer>

</body>
</html>
