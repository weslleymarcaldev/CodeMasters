<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Portfólio Front-End - Wes Marçal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .hero {
      padding: 60px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="container hero">
    <h1 class="display-4">Olá, eu sou o Wes Marçal</h1>
    <p class="lead">Desenvolvedor Front-End apaixonado por interfaces bonitas e funcionais.</p>
    <a href="#portfolio" class="btn btn-primary">Ver Portfólio</a>
  </div>

  <section id="portfolio" class="container">
    <h2 class="mb-4">Projetos Recentes</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Projeto To-do List</h5>
            <p class="card-text">App com Laravel + JS puro + JWT.</p>
          </div>
        </div>
      </div>
      <!-- Adicione mais cards se quiser -->
    </div>
  </section>

  <footer class="text-center mt-5 py-4 bg-light">
    <p>&copy; <?php echo date('Y'); ?> Wes Marçal - Todos os direitos reservados</p>
  </footer>

</body>
</html>
