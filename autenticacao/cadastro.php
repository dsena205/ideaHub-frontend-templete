<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/c75f42268e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Bloco principal -->
    <main class="auPrincipal">
        <!-- Titulo -->
        <hgroup>
            <h1 class="auTitulo">IdeaHub</h1>
            <h2>Feito por alunos para alunos</h2>
        </hgroup>
        <!-- Formulario de login -->
        <form class="auCaixa-form" action="">
            <h2>cadastro</h2>
            <!-- inputs -->
            <div class="auCaixa-input">
                <input type="text" placeholder=" " required="required">
                <span>
                    <i class="fa-solid fa-user"></i>
                    Nome
                </span>
            </div>
            <div class="auCaixa-input">
                <input type="email" placeholder=" " required="required">
                <span>
                    <i class="fa-solid fa-envelope"></i>
                    Email
                </span>
            </div>
            <div class="auCaixa-input">
                <input type="password" placeholder=" " required="required">
                <span>
                    <i class="fa-solid fa-lock icones"></i>
                    Senha
                </span>
            </div>
            <div class="auBotoes">
                <!-- Botão de enviar -->
                <input type="submit" value="Cadastrar">
                <!-- extra -->
                <div>
                    <span class="auExtra">Já tem conta?
                        <a class="auExtra auLink" tabindex="0" href="login.php">Entrar</a>
                    </span>
                </div>
            </div>
        </form>
    </main>
</body>

</html>