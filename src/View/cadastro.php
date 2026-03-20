<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header_simples.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/endereco.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/imask.js"></script>
    <script src="../js/cadastro.js"></script>
    <title>Mundo Autopeças</title>
</head>

<body>
    <?php include "header_simples.php" ?>
    <section class="Primeira_section card_container">
        <form action="../control/cadastrarUsuarioController.php" method="post" id="formulario">

            <div class="" id="formUser">
                <h2>Criar Cadastro</h2>
                <div class="dado" id="">
                    <label for="nomeUsu"><span style="color:red">*</span><b>nome completo</b></label>
                    <input type="text" name="nomeUsu" onblur="ValidarNome()" placeholder="Nome Completo" id="nome" required>
                </div>

                <div class="dado">
                    <label for="dtNascimentoUsu"><span style="color:red">*</span><b>data de nascimento</b></label>
                    <p>é necessario ter maioridade</p>
                    <input type="text" id="data" name="dtNascimentoUsu" placeholder="DD.MM.YYYY" onblur="validaridade()" required>
                </div>

                <div class="dado">
                    <label for="cpfUsu"><span style="color:red">*</span><b>CPF</b></label>
                    <input type="text" name="cpfUsu" id="cpf" placeholder="___.___.___-__" onblur="validarCPF()" required>
                </div>

                <div class="dado">
                    <label for="telefoneUsu"><span style="color:red">*</span><b>telefone</b></label>
                    <input type="text" name="telefoneUsu" onblur="ValidarTelefone()" id="telefone"
                        placeholder="+55 (__) 9____-____" required>
                </div>

                <div class="dado">
                    <label for="emailUsu"><span style="color:red">*</span><b>e-mail</b></label>
                    <input type="email" name="emailUsu" id="email" onblur="ValidarEmail()"
                        placeholder="exemplo@exemplo.com" required>
                </div>

                <div class="dado">
                    <label for="senhaUsu"><span style="color:red">*</span><b>Senha</b></label>
                    <p>precisa ter entre 8 a 20 caracteres</p>
                    <input type="password" name="senhaUsu" id="senha" placeholder="" onkeyup="verificarForcaDaSenha()"
                        minlength="8" maxlength="20" required>
                    <p id="resultado"></p>
                </div>




                <a onclick="ValidarformUser()" class="proximo">Proximo</a>
                <p class="detalhes">já tem cadastro? <a href="login.php"><b>entrar</b></a></p>
            </div>



            <!-- endereco -->
            <div class="" id="formEndereco">
                <h2>Adicionar Endereço</h2>

                <div class="dados">
                    <label for="cepUsu"><span style="color:red">*</span><b>CEP</b></label>
                    <input type="text" name="cepUsu" id="cep" placeholder="_____-___" required>
                </div>

                <div class="dados">
                    <label for="enderecoUsu"><span style="color:red">*</span><b>Endereço</b></label>
                    <input type="text" name="enderecoUsu" id="endereco" placeholder="" required>
                </div>

                <div class="dados">
                    <label for="numeroUsu"><span style="color:red">*</span><b>Número</b></label>
                    <input type="text" name="numeroUsu" id="numero" placeholder="" required>
                </div>

                <div class="dados">
                    <label for="complementoUsu"><b>Complemento</b></label>
                    <input type="text" name="complementoUsu" id="complemento" placeholder="">
                </div>

                <div class="dados">
                    <label for="bairroUsu"><span style="color:red">*</span><b>Bairro</b></label>
                    <input type="text" name="bairroUsu" id="bairro" placeholder="" required>
                </div>

                <div class="dados">
                    <label for="cidadeUsu"><span style="color:red">*</span><b>Cidade</b></label>
                    <input type="text" name="cidadeUsu" id="cidade" placeholder="" required>
                </div>

                <div class="dados">
                    <label for="ufUsu"><span style="color:red">*</span><b>UF</b></label>
                    <select name="ufUsu" id="uf" required>
                        <option value="" select></option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>


                <a onclick="ValidarformEndereco()" class="button">Criar Cadastro</a>

                <p class="detalhes">Ao criar o seu cadastro, você concorda com a nossa <a href="politica.php" target="_blank"><b>política de privacidade</b></a></p>
            </div>



        </form>
    </section>




    <script src="../js/check_password_strength.js"></script>
    <script src="../js/cadastro.js"></script>


</body>

</html>