<?php
require_once '../control/protect.php';
require_once '../control/listarFornecedorController.php';

?>
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

    <link rel="stylesheet" href="../js/Trumbowyg/ui/trumbowyg.min.css">
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
        display: flex;
        justify-content: center;
        align-items: center;
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
                    <p class="font-weight-bold">Cadastrar Produto</p>
                </div>
                <form id="form" method="post" enctype="multipart/form-data" action="../control/cadastrarProdutoController.php">
                    <div class="cardForm infoBasico">
                        <h2>Informação Básica</h2>
                        <div class="info">
                            <label for="nomePro"> <span style="color: rgb(241, 7, 7);">*</span> Nome do produto:</label>
                            <input type="text" name="nomePro" id="nomePro" required>
                        </div>
                        <div class="info">
                            <label for="descricaoPro"> <span style="color: rgb(241, 7, 7);">*</span> Descrição do
                                produto:</label>
                            <textarea name="descricaoPro" id="trumbowyg"></textarea>
                        </div>

                    </div>
                    <div class="cardForm infoDetalhes">
                        <h2>Detalhes</h2>

                        <div class="info">
                            <label for="codigoPro"><span style="color: rgb(241, 7, 7);">*</span>Código do
                                Produto:</label>
                            <input type="text" name="codigoPro" id="codigoPro" required>
                        </div>
                        <div class="info">
                            <label for="categoriaPro"><span style="color: rgb(241, 7, 7);">*</span>categoria do
                                Produto:</label>
                            <select name="categoriaPro" id="categoriaPro" required>
                                <option value="PNEU">Pneu</option>
                                <option value="ACESSORIOS">Acessórios</option>
                                <option value="PEÇAS">Peças</option>
                            </select>
                        </div>
                        <div class="info">
                            <label for="marcaPro"><span style="color: rgb(241, 7, 7);">*</span>Marca do Produto:</label>
                            <select name="marcaPro" id="marcaPro" required>
                                <option value="Não informado">Não informado</option>
                                <option value="Renault">Renault</option>
                                <option value="Michellin">Michellin</option>
                                <option value="Pirelli">Pirelli</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Fiat">Fiat</option>
                                <option value="Peugeot">Peugeot</option>
                            </select>
                        </div>
                        <div class="info">
                            <label for="FORNECEDOR_idFor"><span style="color: rgb(241, 7, 7);">*</span>Selecione o fornecedor</label>
                            <select name="FORNECEDOR_idFor" id="FORNECEDOR_idFor" required>
                                <?php
                                foreach ($todos as $t) { ?>
                                    <option value="<?php echo $t['idFor']; ?>"><?php echo $t['nomeFor']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="info">
                            <input type="file" name="imagemPro" id="imagemPro" required>
                        </div>
                    </div>
                    <div class="cardForm infoVendas">
                        <h2>Informações de Venda</h2>
                        <div class="info">
                            <label for="valorCompraPro"><span style="color: rgb(241, 7, 7);">*</span>Valor de
                                Compra:</label>
                            <div class="din"><input type="text" id="dinheiro" name="valorCompraPro" placeholder="R$ 0,00" required></div>
                        </div>
                        <div class="info">
                            <label for="valorVendaPro"><span style="color: rgb(241, 7, 7);">*</span>Valor de
                                venda:</label>
                            <div class="din"><input type="text" name="valorVendaPro" id="dinheiro2" placeholder="R$ 0,00" required></div>
                        </div>
                        <div class="info">
                            <label for="qtdEstoquePro"><span style="color: rgb(241, 7, 7);">*</span>Quantidade em
                                estoque:</label>
                            <input type="number" name="qtdEstoquePro" placeholder="00" id="qtdEstoquePro" required>
                        </div>

                        <a class="btnCad" onclick="validateForm()">Cadastrar</a>
                    </div>
                </form>



            </div>
        </main>
        <!--End Main -->









    </div>
    <!-- End grid-conteiner -->


    <!-- Chamando JS-->
    <script src="../js/adiministrador.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/Trumbowyg/trumbowyg.min.js"></script>
    <script type="text/javascript" src="../js/Trumbowyg/langs/pt_br.min.js"></script>
    <script type="text/javascript" src="../js/imask.js"></script>
    <script type="text/javascript" src="../js/adicionarPro.js"></script>
    <script>
        var urlAtual = window.location.href;
        var urlClass = new URL(urlAtual);
        var situacao = urlClass.searchParams.get("situacao");
        console.log(situacao);
        if (situacao == "cadastrado") {
            Swal.fire({
                icon: "success",
                title: "Cadastro realizado!",
                text: "Produto cadastrado com sucesso!",
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
        if (situacao == "erroImg") {
            Swal.fire({
                icon: "error",
                title: "Erro ao enviar Imagem!",
                text: "Por favor, tente novamente.",
            }).then((value) => {
                if (value) {
                    // Limpar os campos do formulário após o envio bem-sucedido
                }
            });
        }
        if (situacao == "erroImgT") {
            Swal.fire({
                icon: "error",
                title: "Tipo de arquivo não aceito!",
                text: "Por favor, envie a imagem apenas nos formatos aceitos: jpg, png, jpeg.",
            }).then((value) => {
                if (value) {
                    // Limpar os campos do formulário após o envio bem-sucedido
                }
            });
        }
    </script>
</body>

</html>