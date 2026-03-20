<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/historicoCompra.css">
    <title>Mundo Autopeças</title>
</head>

<body>
    <?php include "header.php" ?>
    <section class="Primeira_section card_container">
        <div class="card">
            <h2>Histórico de compras</h2>
            <!-- <img src="img/icone/shopping-cart2_vazio.svg" alt="carrinho vazio">
            <p>Continue explorando</p>
            <button>Continuar comprando</button> -->
            <table>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Data do Pedido</th>
                    <th>Hora do Pedido</th>
                    <th>Total</th>
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
                    </td>

                    <td>
                        <div class="preco"><b>R$ 26,50</b></div>
                    </td>
                    <td>
                        <div class="qtd">
                            <span id="quant"><b>2</b></span>
                        </div>
                    </td>
                    <td>
                        <div class="total"><b>26/04/2024</b></div>
                    </td>
                    <td>
                        <div class="total"><b>19:36</b></div>
                    </td>
                    <td>
                        <div class="total"><b>R$ 53,00</b></div>
                    </td>
                    
                </tr>
                <!-- fim do produto -->

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
                    </td>

                    <td>
                        <div class="preco"><b>R$ 26,50</b></div>
                    </td>
                    <td>
                        <div class="qtd">
                            <span id="quant"><b>2</b></span>
                        </div>
                    </td>
                    <td>
                        <div class="total"><b>26/04/2024</b></div>
                    </td>
                    <td>
                        <div class="total"><b>19:36</b></div>
                    </td>
                    <td>
                        <div class="total"><b>R$ 53,00</b></div>
                    
                </tr>
                <!-- fim do produto -->
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
                    </td>

                    <td>
                        <div class="preco"><b>R$ 26,50</b></div>
                    </td>
                    <td>
                        <div class="qtd">
                            <span id="quant"><b>2</b></span>
                        </div>
                    </td>
                    <td>
                        <div class="total"><b>26/04/2024</b></div>
                    </td>
                    <td>
                        <div class="total"><b>19:36</b></div>
                    </td>
                    <td>
                        <div class="total"><b>R$ 53,00</b></div>
                    
                </tr>
                <!-- fim do produto -->

            </table>
        </div>
        <button ><a class="btn-voltar" href="perfil.php">Voltar</a></button>
    </section>

</body>
</html>