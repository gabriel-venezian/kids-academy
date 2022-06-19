<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids Academy</title>
  <link rel="stylesheet" href="./styles/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

  <?php include_once("./includes/header.php"); ?>

  <main class="hero">
    <h1 class="font-1-xxl clr-gray11">Conheça a Kids Academy. <br>Onde as crianças aprendem código, <br>um projeto de cada vez.</h1>
  </main>

  <section class="courses container">
    <div class="courses-information">
      <h2 class="font-1-xl clr-gray11">Cursos de <span class="clr-green02">programação</span> para <span class="clr-green02 ">crianças</span>!</h2>
      <p class="font-2-l clr-gray10">
        Nossos cursos são oferecidos com o intuito de introduzir as crianças no mundo da programação! Contamos com professores capacitados e conteúdos de alta qualidade, para que seu pequeno tenha a melhor experiência de aprendizado.
      </p>
      <p class="font-2-l clr-gray10">
        Clique no botão abaixo para maiores informações e venha participar da Kids Academy.
      </p>
      <a href="/" class="btn secondary font-1-btn">
        SAIBA MAIS
        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 8H20M20 8L13.5 1.5M20 8L13.5 14.5" stroke="#63006F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
    </div>
    <div class="courses-image">
      <img src="./images/home/courses.jpg" alt="">
    </div>
  </section>

  <section class="projects container">
    <div class="projects-image">
      <img src="./images/home/projects.jpg" alt="">
    </div>
    <div class="projects-information">
      <h2 class="font-1-xl clr-gray11">Aulas <span class="clr-green02">interativas</span> e exercícios <span class="clr-green02">práticos</span></h2>
      <p class="font-2-l clr-gray10">
        As metodologias de ensino são direcionadas para as crianças, tornando as aulas mais divertidas e facilitando o processo de aprendizado. Sem conteúdo massante e sem enrolação: Estamos preparados para garantir que os pequenos tenham vontade de aprender!
      </p>
      <p class="font-2-l clr-gray10">
        Confira alguns exemplos de exercícíos produzidos pelos nossos alunos durante os cursos oferecidos por nossa plataforma.
      </p>
      <a href="/" class="btn secondary font-1-btn">
        PROJETOS
        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 8H20M20 8L13.5 1.5M20 8L13.5 14.5" stroke="#63006F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
    </div>
  </section>

  <?php include_once("./includes/footer.php"); ?>

  <script type="text/javascript" src="./scripts/script.js"></script>
</body>

</html>