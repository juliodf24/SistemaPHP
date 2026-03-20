<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/carrinho.css">
    <title>Mundo Autopeças</title>
</head>


<body>
    <?php include "header.php" ?>
    <section class="Primeira_section card_container">
        <div class="card">
            <h2>Carrinho</h2>
            <!-- <img src="img/icone/shopping-cart2_vazio.svg" alt="carrinho vazio">
            <p>Continue explorando</p>
            <button>Continuar comprando</button> -->
            <table>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
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
                        <div class="preco"><b>R$ 30,00</b></div>
                    </td>
                    <td>
                        <div class="qtd">
                            <button id="menos">-</button>
                            <span id="quant">2</span>
                            <button id="mais">+</button>
                        </div>
                    </td>
                    <td>
                        <div class="total"><b>R$ 50,00</b></div>
                    </td>
                    <td><a href="">
                            <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                    width="20" height="20">
                                    <path
                                        d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                    <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                </svg></div>
                        </a></td>
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
                        <div class="preco"><b>R$ 36,50</b></div>
                    </td>
                    <td>
                        <div class="qtd">
                            <button id="menos">-</button>
                            <span id="quant">2</span>
                            <button id="mais">+</button>
                        </div>
                    </td>
                    <td>
                        <div class="total"><b>R$ 50,00</b></div>
                    </td>
                    <td><a href="">
                            <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                    width="20" height="20">
                                    <path
                                        d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                    <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                </svg></div>
                        </a></td>
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
                        <div class="preco"><b>R$ 39,00</b></div>
                    </td>
                    <td>
                        <div class="qtd">
                            <button id="menos">-</button>
                            <span id="quant">2</span>
                            <button id="mais">+</button>
                        </div>
                    </td>
                    <td>
                        <div class="total"><b>R$ 55,00</b></div>
                    </td>
                    <td><a href="">
                            <div class="icone"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                    width="20" height="20">
                                    <path
                                        d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                    <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                </svg></div>
                        </a></td>
                </tr>
                <!-- fim do produto -->

            </table>





        </div>
        <div class="card_secundaria">
            <h2>Total</h2>
            <table>
                <tr>
                    <th>Subtotal</th>
                    <td>R$ 155,00</td>
                </tr>
                <tr>
                    <th>Frete</th>
                    <td>Gratis</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td><b class="total_final">R$ 155,00</b></td>
                </tr>
            </table>
            <button>Finalizar compra</button>

        </div>
    </section>



























    <!-- <script>
        const value = document.getElementById('quant');
        const plusButton = document.getElementById('mais');
        const minusButton = document.getElementById('menos');

        let count = 0;
        let intervalId = 0;

        function updateValue() {
            value.textContent = count;
        }


        function adicionar() {
            if (count < 15) {
                count += 1;
            }
            updateValue();
        }

        function diminuir() {
            if (count > 0) { // Verifica se o valor é maior que 0 antes de decrementar
                count -= 1;
                updateValue();
            } else {
                clearInterval(intervalId); // Para o intervalo se o valor for 0
            }
        }

        // Atualizar o valor inicial
        updateValue();
    </script> -->


</body>

</html>