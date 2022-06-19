<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cursos | Kids Academy</title>
  <link rel="stylesheet" href="./styles/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet">
</head>

<body id="courses">

  <?php include_once("./includes/header.php"); ?>

  <header class="hero">
    <h1 class="font-1-xxl clr-gray11">Confira os principais cursos oferecidos pela nossa plataforma</h1>
  </header>

  <section class="available-courses">
    <div class="course">
      <img src="./images/courses/course-ai.png" alt="">
      <h4 class="font-1-xl clr-gray11 ">Inteligência Artificial</h4>
      <p class="font-2-l clr-gray10">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
    </div>
    <div class="course">
      <img src="./images/courses/course-data-analysis.png" alt="">
      <h4 class="font-1-xl clr-gray11 ">Análise de Dados</h4>
      <p class="font-2-l clr-gray10">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
    </div>
    <div class="course">
      <img src="./images/courses/course-front-end.png" alt="">
      <h4 class="font-1-xl clr-gray11 ">Front-end</h4>
      <p class="font-2-l clr-gray10">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
    </div>
  </section>

  <section class="signature-bg">
    <div class="signature container">
      <h2 class="font-1-xxl clr-purple01">Assinatura</h2>
      <p class="font-2-l clr-gray11 signature-description">Conheça nossos planos de assinatura mensais.</p>
      <div class="signature-plans">
        <div class="signature-plan">
          <h3 class="font-1-xl clr-gray10">ESSENCIAL <span>R$ 29,90</span></h3>
          <p class="font-1-m clr-gray09">por mês</p>
          <ul class="font-1-m clr-gray10">
            <li>Aulas particulares</li>
            <li>Exercícios complementares</li>
            <li>Suporte ao aluno</li>
            <li>Construção de portfólio</li>
          </ul>
          <a href="inscricao.php" class="btn signature font-1-s-b clr-gray02">INSCREVER-SE</a>
        </div>
        <div id="essencial-plus" class="signature-plan">
          <h3 class="font-1-xl clr-pink01">ESSENCIAL + <span class="clr-white">R$ 49,90</span></h3>
          <p class="font-1-m clr-white">por mês</p>
          <ul class="font-1-m clr-white">
            <li>Aulas particulares</li>
            <li>Exercícios complementares</li>
            <li>Suporte ao aluno</li>
            <li>Construção de portfólio</li>
            <li>Download das aulas</li>
            <li>Clube de membros exclusivo</li>
          </ul>
          <a href="inscricao.php" class="btn signature font-1-s-b clr-gray02">INSCREVER-SE</a>
        </div>
      </div>
    </div>
  </section>

  <?php include_once("./includes/footer.php"); ?>

  <script type="text/javascript" src="./scripts/script.js"></script>
</body>

</html>