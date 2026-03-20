<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mundo Autopeças</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <!-- Icones do Material Design -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <!-- Chamando CSS -->
    <link rel="stylesheet" href="../css/adiministrador.css">
    <script src="../js/sweetalert2/sweetalert2.js"></script>
</head>
<style>
    * {
        box-sizing: border-box;
    }


    :root {
        --line-border-fill: #00172c;
        --line-border-empty: #e0e0e0;
    }

    .container {
        text-align: center;
    }

    .progress-container {
        display: flex;
        justify-content: space-between;
        position: relative;
        margin-bottom: 30px;
        max-width: 100%;
        width: 350px;
    }

    .progress-container::before {
        content: "";
        background-color: var(--line-border-empty);
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        height: 4px;
        width: 100%;
        z-index: -1;
    }

    .progress {
        background-color: var(--line-border-fill);
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        height: 4px;
        width: 0%;
        z-index: -1;
        transition: 0.4s ease;
    }

    .circle {
        background-color: #fff;
        color: #999;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid var(--line-border-empty);
        transition: 0.4s ease;
    }

    .active {
        border-color: var(--line-border-fill);
        color: var(--line-border-fill);
    }

    .btn {
        background-color: var(--line-border-fill);
        color: #fff;
        border: 0;
        border-radius: 6px;
        cursor: pointer;
        padding: 8px 30px;
        margin: 5px;
        font-size: 14px;
    }

    .btnCad {
        border-radius: 10px;
        background: #00172C;
        color: white;
        height: 40px;
        outline: none;
        cursor: pointer;
        border: none;
        padding: 7px;
        width: 100%;
    }

    .btn:active {
        transform: scale(0.98);
    }

    .btn:focus {
        outline: 0;
    }

    .btn:disabled {
        background-color: var(--line-border-empty);
        cursor: not-allowed;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 100%;
        max-width: 900px;
        align-self: center;
    }


    .cardForm {
        display: flex;
        flex-direction: column;
        width: 100%;

        gap: 15px;
        margin-top: 10px;
        box-shadow: 0px 0px 28px -7px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(211, 211, 211, 0.1);
        padding: 20px 10px;
        border-radius: 10px;
        background-color: white;
    }

    .cardForm textarea {
        width: 100%;
        max-width: 100%;
        min-width: 100%;
    }

    .cardForm:nth-child(1) {
        display: flex;
    }

    .info {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .info input,
    .info select {
        outline: none;
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-radius: 10px;
        background-color: white;
    }

    .info select {
        font-weight: 600;
    }

    .info input:focus {
        border: 2px solid var(--line-border-fill);
    }

    .din input {
        width: 100%;
        min-width: 200px;
    }
</style>

<body>

    <!--envolve todo o conteúdo da página -->
    <div class="grid-container">
        <!-- Header: Seção de cabeçalho da página -->
        <?php include 'header_adm.php' ?>

        <!-- Sidebar: Barra lateral(Menu) que poder ser aberta e fechada -->
        <?php include 'barraLateral_adm.php' ?>

        <!-- Main: Conteudo principal da página -->
        <main class="main-conteiner">








            <div class="main_conteudo">
                <div class="main-title">
                    <p class="font-weight-bold">Cadastrar Fornecedor</p>
                </div>
                <form id="form" method="post" action="../control/cadastrofornecedorController.php">
                    <div class="cardForm infoBasico">
                        <h2>Informação do Fornecedor</h2>
                        <div class="info">
                            <label for="nomeFor"> <span style="color: rgb(241, 7, 7);">*</span> Nome:</label>
                            <input type="text" name="nomeFor" id="nome">
                        </div>
                        <div class="info">
                            <label for="telefoneFor"> <span style="color: rgb(241, 7, 7);">*</span> Telefone:</label>
                            <input type="text" name="telefoneFor" id="telefone">
                        </div>
                        <div class="info">
                            <label for="emailFor"> <span style="color: rgb(241, 7, 7);">*</span> E-mail:</label>
                            <input type="text" name="emailFor" id="email">
                        </div>
                        <button class="btnCad" type="submit">Cadastrar</button>
                    </div>

                </form>
            </div>




    </div>
    </main>
    <!--End Main -->









    </div>
    <!-- End grid-conteiner -->


    <!-- Chamando JS-->
    <script src="../js/adiministrador.js"></script>
    <script type="text/javascript" src="../js/imask.js"></script>
    <script>
        var nomecorreto = false;
        var emailcorreto = false;
        var telefonecorreto = false;



        //------ validar telefone
        var telefone = document.getElementById("telefone");
        var mascaraTelefone = IMask(telefone, {
            mask: "+55 (00) 90000-0000",
        });

        function ValidarTelefone() {
            var telefoneMask = document.getElementById("telefone");
            var telefoneSemMask = telefoneMask.value.replace(/\D/g, "");
            var telefone = telefoneSemMask.length;
            if (telefone > 13 || telefone < 13) {
                telefoneMask.style.border = "1px solid red";
                telefonecorreto = false;
                console.log("telefone invalido");
            } else {
                telefoneMask.style.border = "1px solid green";
                telefonecorreto = true;
                console.log("telefone valido");
            }
        }
        //------ Fim validar telefone

        //------ validar email
        function ValidarEmail() {
            var email = document.getElementById("email");
            if (email.value.length <= 4) {
                email.style.border = "1px solid red";
                emailcorreto = false;
            } else if (email.value.includes(".") && email.value.includes("@")) {
                email.style.border = "1px solid green";
                emailcorreto = true;
                console.log("email valido");
            } else {
                email.style.border = "1px solid red";
                emailcorreto = false;
                console.log("email invalido");
            }
        }
        //------ Fim validar email

        //------ validar nome
        var nome = document.getElementById("nome");
        //ouvinte de evento 'input'
        nome.addEventListener("input", function() {
            //substitui todos os caracteres não alfabéticos por uma string vazia
            this.value = this.value.replace(/[^a-zA-Z\s]/g, "");
        });

        function validarnome() {
            var nome = document.getElementById("nome");
            if (nome.value.length <= 8) {
                nome.style.border = "1px solid red";
                nomecorreto = false;
                console.log("nome invalido");
            } else {
                nome.style.border = "1px solid green";
                nomecorreto = true;
                console.log("nome valido");
            }
        }
        //------ Fim validar nome


        telefone.addEventListener('blur', function() {
            ValidarTelefone();
        });
        email.addEventListener('blur', function() {
            ValidarEmail();
        });
        nome.addEventListener('blur', function() {
            validarnome();
        });



        var urlAtual = window.location.href;
        var urlClass = new URL(urlAtual);
        var situacao = urlClass.searchParams.get("situacao");
        console.log(situacao);
        if (situacao == "cadastrado") {
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado!",
                text: "Fornecedor cadastrado com sucesso!",
            }).then((value) => {
                if (value) {
                    // Limpar os campos do formulário após o envio bem-sucedido
                    form.reset();
                }
            });
        }
        if (situacao == "erro") {
            Swal.fire({
                icon: "error",
                title: "Erro ao cadastrar Fornecedor!",
                text: "Por favor, tente novamente.",
            }).then((value) => {
                if (value) {
                    // Limpar os campos do formulário após o envio bem-sucedido
                }
            });
        }
    </script>
</body>

</html>