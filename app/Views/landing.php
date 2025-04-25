<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>CodeMasters Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/cn/public/assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">
  <!-- Menu -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">CodeMasters</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#cursos">Cursos</a></li>
          <li class="nav-item"><a class="nav-link" href="#graficos">Gráficos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Parallax -->
  <header class="hero d-flex align-items-center justify-content-center text-white">
    <div class="text-center">
      <h1 class="display-4 fw-bold">Aprenda com os melhores</h1>
      <p class="lead">A CodeMasters Academy transforma sua carreira com tecnologia</p>
    </div>
  </header>

  <!-- Sobre -->
  <section id="sobre" class="py-5 bg-white">
    <div class="container">
      <h2 class="text-center mb-4">Quem somos</h2>
      <p class="text-center">Somos uma escola de tecnologia que oferece cursos modernos e práticos nas áreas de desenvolvimento web, mobile e inteligência artificial. Nosso objetivo é transformar iniciantes em profissionais de destaque.</p>
    </div>
  </section>

  <!-- Cursos -->
  <section id="cursos" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Cursos Populares</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="/cn/public/assets/img/web.jpg" class="card-img-top" alt="Curso Web">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento Web</h5>
              <p class="card-text">HTML, CSS, JavaScript, React, Laravel, APIs REST e mais.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="/cn/public/assets/img/mobile.jpg" class="card-img-top" alt="Curso Mobile">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento Mobile</h5>
              <p class="card-text">Crie apps Android/iOS com Flutter e React Native.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="/cn/public/assets/img/ai.jpg" class="card-img-top" alt="Curso IA">
            <div class="card-body">
              <h5 class="card-title">Inteligência Artificial</h5>
              <p class="card-text">Aprenda redes neurais, machine learning e Python aplicado.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gráfico -->
  <section id="graficos" class="py-5 bg-white">
    <div class="container">
      <h2 class="text-center mb-4">Alunos Formados</h2>
      <canvas id="graficoAlunos" width="400" height="200"></canvas>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Fale Conosco</h2>
      <form class="row g-3 justify-content-center">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Seu nome" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Seu e-mail" required>
        </div>
        <div class="col-12">
          <textarea class="form-control" rows="4" placeholder="Sua mensagem" required></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary px-5">Enviar</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-4 bg-white border-top">
    <p class="mb-1">© <?= date('Y') ?> CodeMasters Academy</p>
    <p class="small">Desenvolvido por <strong>Wes Marçal</strong> | <a href="https://github.com/weslleymarcaldev" target="_blank">GitHub</a> | <a href="https://linkedin.com/in/weslleymarcal" target="_blank">LinkedIn</a></p>
  </footer>

  <script src="/cn/public/assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
