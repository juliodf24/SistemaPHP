<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/5c7597c188.js" crossorigin="anonymous"></script>
    <!-- Css -->
    <link rel="stylesheet" href="../css/alterarEnd.css">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header_simples.css">
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- Alerta -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <?php include "header_simples.php" ?>
    <section class="Primeira_section card_container">

        <div class="container" id="container">
            <h2>Editar Endereço</h2>
            <form id="form" class="form" onsubmit="return validarForm(event)">
                <div class="form-control">
                    <div class="dados">
                        <label for="cep">CEP</label>
                        <input type="text" class="cep" name="cepUsu" id="cep" placeholder="_____-___"
                            oninput="handleCep(event)" >
                    </div>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <div class="dados">
                        <label for="enderecoUsu">Endereço</label>
                        <input type="text" name="enderecoUsu" id="endereco" placeholder="" disabled ="disabled">
                    </div>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <div class="dados">
                        <label for="numeroUsu">Número</label>
                        <input type="text" name="numeroUsu" id="numero" placeholder="" >
                    </div>
                    <small></small>
                </div>

                <div class="form-control">
                    <div class="dados">
                        <label for="complementoUsu">Complemento</label>
                        <input type="text" name="complementoUsu" id="complemento" placeholder="" >
                    </div>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <div class="dados">
                        <label for="bairroUsu">Bairro</label>
                        <input type="text" name="bairroUsu" id="bairro" placeholder="" disabled ="disabled">
                    </div>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <div class="dados">
                        <label for="cidadeUsu">Cidade</label>
                        <input type="text" name="cidadeUsu" id="cidade" placeholder="" disabled ="disabled">
                    </div>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>

                <div class="form-control">
                    <div class="dados">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" id="estado" readonly disabled ="disabled">
                    </div>
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small></small>
                </div>
                <button type="submit" id="editarEnderecoBtn">Editar Endereço</button>
            </form>
        </div>
    </section>
    <script src="../js/alterarEnd.js"></script>

    
</body>

</html>