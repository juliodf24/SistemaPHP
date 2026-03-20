<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/5c7597c188.js" crossorigin="anonymous"></script>
    <!--Css-->
    <link rel="stylesheet" href="../css/alterarCad.css">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header_simples.css">
    <!--fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- alerta-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>


    <?php include "header_simples.php" ?>
    <section class="Primeira_section card_container">

        <div class="container">

            <h2>Editar Dados Pessoais</h2>


            <form id="form" class="form">
                <!--Username-->
                <div class="form-control">
                    <label for="username">Nome</label>
                    <input type="text" id="username" placeholder="Digite seu nome de usuário...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <!-- Telefone -->
                <div class="form-control">
                    <label for="telefoneUsu">Telefone</label>
                    <input type="text" name="telefoneUsu" oninput="handlePhone(event)" id="telefone"
                        placeholder=" (__) ____-____" maxlength="15">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <!--Email-->
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Digite seu email...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <label for="password">Senha</label>
                    <input type="password" id="password" placeholder="Digite sua senha...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <label for="password-confirmation">Confirmação de senha</label>
                    <input type="password" id="password-confirmation" placeholder="Digite a senha novamente...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <script src="../js/alterarCad.js"></script>
</body>

</html>