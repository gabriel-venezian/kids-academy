<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscreva-se</title>
</head>
<body>
    <?php 
        include 'header.php';
    ?>

    <section class="signForm">
        <form action="index.php">
            <fieldset class="formBody">    
                <legend>REALIZAR INSCRIÇÃO</legend>
                    <h3>Informações do aluno:</h3>
                    <input type="text" id="studentName" placeholder="Nome completo"><br>
                    <input type="text" id="studentBirthDate" placeholder="Data de nascimento: 01/01/2000"><br>
                    <input type="email" id="studentUsername" placeholder="Usuário (para acessar a plataforma)"><br>
                    <input type="password" id="studentPassword" placeholder="Senha (para acessar a plataforma)"><br>
                    <h3>Informações do responsável:</h3>
                    <input type="text" id="guardianName" placeholder="Nome completo"><br>
                    <input type="text" id="guardianDocument" placeholder="Documento (CPF)"><br>
                    <input type="text" id="guardianBirthDate" placeholder="Data de nascimento: 01/01/1900"><br>
                    <input type="email" id="guardianEmail" placeholder="E-mail"><br>
                    <input type="text" id="guardianCity" placeholder="Cidade"><br>
                    <input type="text" id="guardianState" placeholder="Estado"><br>
                    <p>Já possui uma conta? <strong><a href="login.php">Fazer login</a></strong></p>
                    <a class="btn black" href="index.php">INSCREVER-SE</a>
            </fieldset>
        </form>
    </section>

    <?php 
        include 'footer.php';
    ?>
</body>
</html>