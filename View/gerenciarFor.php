<?php
require_once '../control/protect.php';
require_once '../control/listarFornecedorController.php';
require_once '../control/excluirFornecedorController.php';
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
    <link rel="stylesheet" href="../css/ListaClientes.css">
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
    <script src="../js/sweetalert2/sweetalert2.js"></script>
    
</head>

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
                <!-- <div class="main-title">
                    <p class="font-weight-bold">Gestão de Usuários</p>
                </div> -->

                <div class="container">
                    <div class="header">
                        <span class="titulo">Lista de Fornecedores</span>
                        <!-- <button onclick="openModal()" id="new">Incluir</i></button> -->
                    </div>

                    <div class="divTable">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th class="acao">Editar</th>
                                    <th class="acao">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($todos as $t) { ?>
                                    <tr>
                                        <td><?php echo $t['nomeFor']; ?></td>
                                        <td><?php echo $t['emailFor']; ?></td>
                                        <td><?php echo $t['telefoneFor']; ?></td>
                                        <td></td>
                                        <td><a class="delete" value="<?php echo $t['idFor'];?>"><span class="material-icons-outlined">delete</span></a></td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-container">
                        <div class="modal">
                            <form>
                                <label for="m-nome">Nome</label>
                                <input id="m-nome" type="text" required />

                                <label for="m-nome">CPF</label>
                                <input id="m-nome" type="text" required />

                                <label for="m-email">Email</label>
                                <input id="m-email" type="text" required />

                                <label for="m-telefone">Telefone</label>
                                <input id="m-telefone" type="text" name="telefoneUsu" oninput="handlePhone(event)" required />

                                <label for="m-funcao">Função</label>
                                <input id="m-funcao" type="text" required />

                                <label for="m-status">Status</label>
                                <input id="m-status" type="text" required />

                                <button id="btnSalvar">Salvar</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </main>
    </div>
    <!-- Chamando JS-->
    
    <script type="text/javascript" src="../js/imask.js"></script>
    <script src="../js/ListaFornecedores.js"></script>
    <!-- <script src="../js/ListaClientes_antigo.js"></script> -->
    
    <script src="../js/adiministrador.js"></script>
</body>

</html>