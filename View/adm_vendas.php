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

    <!-- grafico -->
    <script src="../js/apexcharts.min.js"></script>
</head>
<style>
    body {
        height: 100vh;
    }

    .card2_container {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        width: 100%;
        height: 100%;
        gap: 20px;
    }

    .card2_container .card2 {
        background-color: white;
        max-width: 1300px;
        width: 100%;
        padding: 25px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        border-radius: 10px;
    }

    .card2 h2,
    .card2_secundaria h2 {
        text-align: center;
        font-size: 24px;
        color: #00172C;
    }

    .card2_secundaria button {
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


    .card2 .detalhes {
        font-size: 1rem;
        color: rgb(102, 102, 102);
        text-align: center;
    }

    .card2 .detalhes a {
        text-decoration: none;
        text-decoration: underline;
        color: rgb(102, 102, 102);

    }

    .card2 table {
        width: 100%;
        border-collapse: collapse;
    }

    .card2 th {
        text-align: left;
        border-bottom: 2px solid #ccc;
        padding: 15px 10px;
        color: #666;
    }

    .card2 td {
        padding: 15px 5px;
    }


    .card2 tr {
        border-bottom: 1px solid #ccc;
    }

    .marcaPro,
    .codigoPro,
    .valorVendaPro,
    .valorCompraPro,
    .qtdEstoquePro,
    .total {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icone svg:hover {
        fill: #fd384f;
    }

    .icone {
        width: 5%;
    }

    .qtd {
        height: 23px;
    }

    .qtd span {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        padding: 1px;
        border-bottom: 1px solid #00172C;
        border-top: 1px solid #00172C;
    }

    .card2 table a {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }


    .produto {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .produto img {
        width: 20%;
        border-radius: 10px;
    }

    @media only screen and (max-width: 600px) {
        .card2_container {
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card2_container img {
            display: none;
        }

        .card2_container .card2 {
            max-width: 100%;
            width: 100%;
            padding: 0px;
        }
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
                <section class=" card2_container">
                    <div class="card2">
                        <h2>Gestão de Estoque</h2>
                        <table>
                            <tr>
                                <th>Produto</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Total</th>
                                <th>Situacao</th>
                                <th>Forma de Pagamento</th>
                                <!-- <th>Quantidade</th> -->
                                <th class="icone"></th>
                            </tr>
                            <!-- produto -->
                            <tr>
                                <td>
                                    <div class="produto">
                                        <img src="https://picsum.photos/200" alt="">
                                        <div class="infoPro">
                                            <div class="nomePro"><a href=""><b>Nome do produto</b></a></div>
                                            <div class="categoriaPro"><a href="">Categoria do produto</a></div>
                                        </div>
                                    </div>
                                <td>
                                    <div><b>11/05/2024</b></div>
                                </td>
                                <td>
                                    <div><b>15:02</b></div>
                                </td>
                                <td>
                                    <div><b>R$ 150,00</b></div>
                                </td>
                                <td>
                                    <div><b>Finalizado</b></div>
                                </td>
                                <td>
                                    <div><b>Débito</b></div>
                                </td>
                                <td>
                                    <div><b></b></div>
                                </td>
                                <td>
                                    <div><a class="delete" value="<?php echo $t['idPro']; ?>"><span class="material-icons-outlined">delete</span></a></div>
                                </td>


                            </tr>
                            <!-- fim do produto -->
                            <!-- <?php /*
                            foreach ($todos as $t) { ?>
                                <tr>
                                    <td><?php echo $t['nomeFor']; ?></td>
                                    <td><?php echo $t['emailFor']; ?></td>
                                    <td><?php echo $t['telefoneFor']; ?></td>
                                    <td></td>


                                    <td>
                                        <div class="produto">
                                            <img src="https://picsum.photos/200" alt="">
                                            <div class="infoPro">
                                                <div class="nomePro"><a href=""><b><?php echo $t['nomePro']; ?></b></a></div>
                                                <div class="categoriaPro"><a href=""><?php echo $t['categoriaPro']; ?></a></div>
                                            </div>
                                        </div>
                                    <td>
                                        <div class="marcaPro"><b><?php echo $t['marcaPro']; ?></b></div>
                                    </td>
                                    <td>
                                        <div class="codigoPro"><b><?php echo $t['codigoPro']; ?></b></div>
                                    </td>
                                    </td>
                                    <td>
                                        <div class="valorCompraPro"><b><?php echo $t['valorCompraPro']; ?></b></div>
                                    </td>
                                    <td>
                                        <div class="valorVendaPro"><b><?php echo $t['valorVendaPro']; ?></b></div>
                                    </td>
                                    <td>
                                        <div class="qtdEstoquePro"><b><?php echo $t['qtdEstoquePro']; ?></b></div>
                                    </td>
                                    <td>
                                        <div><b>?</b></div>
                                    </td>
                                    <td><a class="delete" value="<?php echo $t['idPro']; ?>"><span class="material-icons-outlined">delete</span></a></td>

                                </tr>
                            <?php }  */?> -->
                        </table>
                </section>


                <!-- coloque o conteúdo aqui -->






            </div>
        </main>
        <!--End Main -->


    </div>
    <!-- End grid-conteiner -->


    <!-- Chamando JS-->
    <script src="../js/adiministrador.js"></script>
</body>

</html>