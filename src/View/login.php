<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header_simples.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/imask.js"></script>
    <title>Mundo Autopeças</title>
</head>

<body>
    <?php include "header_simples.php" ?>
    <section class="Primeira_section card_container">
        <form action="../control/loginController.php" method="post" id="formulario">
            <?php
            if (isset($_GET['situacao'])) {
                if ($_GET['situacao'] == 'erro') { ?>
                <div class="erro">
                    Usuário e/ou senha inválidos.
                </div>
            <?php } }?>
            
            <h2>Entrar</h2>

            <div class="dado">
                <label for="emailUsu"><b>E-mail</b></label>
                <input type="email" name="emailUsu" id="email" required>
            </div>

            <div class="dado">
                <label for="senhaUsu"><b>Senha</b></label>
                <input type="password" name="senhaUsu" id="senha" required>
                <p id="resultado"></p>
            </div>
            <button type="submit">Entrar</button>
            <p class="detalhes">não tem cadastro? <a href="cadastro.php"><b>Criar conta</b></a></p>

        </form>
    </section>
</body>

</html>