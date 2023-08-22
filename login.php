<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/autenticacao.css">
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
        <form class="auCaixa-form" action="index.html">
            <h2>Login</h2>
            <!-- input 1 -->
            <div class="auCaixa-input">
                <input type="email" placeholder=" " required="required">
                <span>
                    <i class="material-symbols-outlined iconGoogle">mail</i>
                    Email
                </span>
            </div>
            <div class="auCaixa-input">
                <input type="password" placeholder=" " required="required">
                <span>
                    <i class="material-symbols-outlined iconGoogle">lock</i>
                    Senha
                </span>
            </div>
            <div class="auBotoes">
                <!-- Botão de enviar -->
                <input type="submit" value="Entrar">
                <!-- extra -->
                <div class="auCaixa-extra">
                    <a class="auExtra auLink" tabindex="0" href="#">Esqueceu a senha?
                    </a>
                    <span class="auExtra">
                        Não tem conta?
                        <a class="auExtra auLink" tabindex="0" href="cadastro.html">
                            Cadastrar
                        </a>
                    </span>
                </div>
            </div>
        </form>
    </main>
</body>

</html>