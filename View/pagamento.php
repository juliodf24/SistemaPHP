<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/pagamento.css">
    <title>Mundo Autopeças</title>
</head>

<body>
    <?php include "header.php" ?>
    <section class="Primeira_section">
        <h2>Finalizar comprar</h2>
        <section class="card_container">
            <div class="card">
                <div class="card_info">
                    <h2>Endereço</h2>
                    <table>
                        <tr>
                            <!-- <th>CEP:</th> -->
                            <td>72145-450</td>
                        </tr>
                        <tr>
                            <!-- <th>Endereço:</th> -->
                            <td>QNM 34 Área Especial 1</td>
                        </tr>
                        <tr>
                            <!-- <th>Bairro:</th> -->
                            <td>Taguatinga Norte (Taguatinga)</td>
                        </tr>
                        <tr>
                            <!-- <th>Cidade:</th> -->
                            <td>Brasília</td>
                        </tr>
                    </table>
                </div>

                <div class="card_info formaPag">
                    <div class="card_menu">
                        <button>
                            <img src="../img/icone/voltar.svg" alt="" width="20px">
                        </button>
                        <div class="titulo">
                            <h2>Forma de pagamento</h2>
                        </div>
                    </div>


                    <div id="card_metodos">
                        <a class="metodo" href="#" onclick="btn_debito_credito()">
                            <div class="texto">
                                <span for="debito"><b>Débito</b></span>
                            </div>
                            <img src="../img/icone/cartao_icone.png" alt="">
                        </a>
                        <a class="metodo" href="#" onclick="btn_debito_credito()">
                            <div class="texto">
                                <span for="debito"><b>Crédito</b></span>
                            </div>
                            <img src="../img/icone/cartao_icone.png" alt="">
                        </a>
                        <a class="metodo" href="#">
                            <div class="texto">
                                <span><b>Pix</b></span>
                            </div>
                            <img src="../img/icone/pix_logo.svg" alt="">
                        </a>
                        <a class="metodo" href="#">
                            <div class="texto">
                                <span><b>Boleto</b></span>
                            </div>
                            <img src="../img/icone/fatura.png" alt="">
                        </a>
                    </div>



                    <div id="pagamento_cartao">
                        <div class="cartao">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <p class="heading_8264">Mastercard</p>
                                        <svg class="logo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36"
                                            height="36" viewBox="0 0 48 48">
                                            <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                                            <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                                            <path fill="#ff3d00"
                                                d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z">
                                            </path>
                                        </svg>
                                        <svg version="1.1" class="chip" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px"
                                            height="30px" viewBox="0 0 50 50" xml:space="preserve">
                                            <image id="image0" width="50" height="50" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
              AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB6VBMVEUAAACNcTiVeUKVeUOY
              fEaafEeUeUSYfEWZfEaykleyklaXe0SWekSZZjOYfEWYe0WXfUWXe0WcgEicfkiXe0SVekSXekSW
              ekKYe0a9nF67m12ZfUWUeEaXfESVekOdgEmVeUWWekSniU+VeUKVeUOrjFKYfEWliE6WeESZe0GS
              e0WYfES7ml2Xe0WXeESUeEOWfEWcf0eWfESXe0SXfEWYekSVeUKXfEWxklawkVaZfEWWekOUekOW
              ekSYfESZe0eXekWYfEWZe0WZe0eVeUSWeETAnmDCoWLJpmbxy4P1zoXwyoLIpWbjvXjivnjgu3bf
              u3beunWvkFWxkle/nmDivXiWekTnwXvkwHrCoWOuj1SXe0TEo2TDo2PlwHratnKZfEbQrWvPrWua
              fUfbt3PJp2agg0v0zYX0zYSfgkvKp2frxX7mwHrlv3rsxn/yzIPgvHfduXWXe0XuyIDzzISsjVO1
              lVm0lFitjVPzzIPqxX7duna0lVncuHTLqGjvyIHeuXXxyYGZfUayk1iyk1e2lln1zYTEomO2llrb
              tnOafkjFpGSbfkfZtXLhvHfkv3nqxH3mwXujhU3KqWizlFilh06khk2fgkqsjlPHpWXJp2erjVOh
              g0yWe0SliE+XekShhEvAn2D///+gx8TWAAAARnRSTlMACVCTtsRl7Pv7+vxkBab7pZv5+ZlL/UnU
              /f3SJCVe+Fx39naA9/75XSMh0/3SSkia+pil/KRj7Pr662JPkrbP7OLQ0JFOijI1MwAAAAFiS0dE
              orDd34wAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfnAg0IDx2lsiuJAAACLElEQVRIx2Ng
              GAXkAUYmZhZWPICFmYkRVQcbOwenmzse4MbFzc6DpIGXj8PD04sA8PbhF+CFaxEU8iWkAQT8hEVg
              OkTF/InR4eUVICYO1SIhCRMLDAoKDvFDVhUaEhwUFAjjSUlDdMiEhcOEItzdI6OiYxA6YqODIt3d
              I2DcuDBZsBY5eVTr4xMSYcyk5BRUOXkFsBZFJTQnp6alQxgZmVloUkrKYC0qqmji2WE5EEZuWB6a
              lKoKdi35YQUQRkFYPpFaCouKIYzi6EDitJSUlsGY5RWVRGjJLyxNy4ZxqtIqqvOxaVELQwZFZdkI
              JVU1RSiSalAt6rUwUBdWG1CP6pT6gNqwOrgCdQyHNYR5YQFhDXj8MiK1IAeyN6aORiyBjByVTc0F
              qBoKWpqwRCVSgilOaY2OaUPw29qjOzqLvTAchpos47u6EZyYnngUSRwpuTe6D+6qaFQdOPNLRzOM
              1dzhRZyW+CZouHk3dWLXglFcFIflQhj9YWjJGlZcaKAVSvjyPrRQ0oQVKDAQHlYFYUwIm4gqExGm
              BSkutaVQJeomwViTJqPK6OhCy2Q9sQBk8cY0DxjTJw0lAQWK6cOKfgNhpKK7ZMpUeF3jPa28BCET
              amiEqJKM+X1gxvWXpoUjVIVPnwErw71nmpgiqiQGBjNzbgs3j1nus+fMndc+Cwm0T52/oNR9lsdC
              S24ra7Tq1cbWjpXV3sHRCb1idXZ0sGdltXNxRateRwHRAACYHutzk/2I5QAAACV0RVh0ZGF0ZTpj
              cmVhdGUAMjAyMy0wMi0xM1QwODoxNToyOSswMDowMEUnN7UAAAAldEVYdGRhdGU6bW9kaWZ5ADIw
              MjMtMDItMTNUMDg6MTU6MjkrMDA6MDA0eo8JAAAAKHRFWHRkYXRlOnRpbWVzdGFtcAAyMDIzLTAy
              LTEzVDA4OjE1OjI5KzAwOjAwY2+u1gAAAABJRU5ErkJggg=="></image>
                                        </svg>
                                        <svg version="1.1" class="contactless" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                            height="20px" viewBox="0 0 50 50" xml:space="preserve">
                                            <image id="image0" width="50" height="50" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
              AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
              cwAACxMAAAsTAQCanBgAAAAHdElNRQfnAg0IEzgIwaKTAAADDklEQVRYw+1XS0iUURQ+f5qPyjQf
              lGRFEEFK76koKGxRbWyVVLSOgsCgwjZBJJYuKogSIoOonUK4q3U0WVBWFPZYiIE6kuArG3VGzK/F
              fPeMM/MLt99/NuHdfPd888/57jn3nvsQWWj/VcMlvMMd5KRTogqx9iCdIjUUmcGR9ImUYowyP3xN
              GQJoRLVaZ2DaZf8kyjEJALhI28ELioyiwC+Rc3QZwRYyO/DH51hQgWm6DMIh10KmD4u9O16K49it
              VoPOAmcGAWWOepXIRScAoJZ2Frro8oN+EyTT6lWkkg6msZfMSR35QTJmjU0g15tIGSJ08ZZMJkJk
              HpNZgSkyXosS13TkJpZ62mPIJvOSzC1bp8vRhhCakEk7G9/o4gmZdbpsTcKu0m63FbnBP9Qrc15z
              bkbemfgNDtEOI8NO5L5O9VYyRYgmJayZ9nPaxZrSjW4+F6Uw9yQqIiIZwhp2huQTf6OIvCZyGM6g
              DJBZbyXifJXr7FZjGXsdxADxI7HUJFB6iWvsIhFpkoiIiGTJfjJfiCuJg2ZEspq9EHGVpYgzKqwJ
              qSAOEwuJQ/pxPvE3cYltJCLdxBLiSKKIE5HxJKcTRNeadxfhDiuYw44zVs1dxKwRk/uCxIiQkxKB
              sSctRVAge9g1E15EHE6yRUaJecRxcWlukdRIbGFOSZCMWQA/iWauIP3slREHXPyliqBcrrD71Amz
              Z+rD1Mt2Yr8TZc/UR4/YtFnbijnHi3UrN9vKQ9rPaJf867ZiaqDB+czeKYmd3pNa6fuI75MiC0uX
              XSR5aEMf7s7a6r/PudVXkjFb/SsrCRfROk0Fx6+H1i9kkTGn/E1vEmt1m089fh+RKdQ5O+xNJPUi
              cUIjO0Dm7HwvErEr0YxeibL1StSh37STafE4I7zcBdRq1DiOkdmlTJVnkQTBTS7X1FYyvfO4piaI
              nKbDCDaT2anLudYXCRFsQBgAcIF2/Okwgvz5+Z4tsw118dzruvIvjhTB+HOuWy8UvovEH6beitBK
              xDyxm9MmISKCWrzB7bSlaqGlsf0FC0gMjzTg6GgAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDIt
              MTNUMDg6MTk6NTYrMDA6MDCjlq7LAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAyLTEzVDA4OjE5
              OjU2KzAwOjAw0ssWdwAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMi0xM1QwODoxOTo1Nisw
              MDowMIXeN6gAAAAASUVORK5CYII="></image>
                                        </svg>
                                        <p class="number" id="number">9759 2484 5269 6576</p>
                                        <p class="valid_thru">VALID THRU</p>
                                        <p class="date_8264" id="date_8264">1 2 / 2 4</p>
                                        <p class="name" id="name">BRUCE WAYNE</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="formulario_cartao">
                            <form action="">
                                <input type="text" placeholder="Número do Cartão" id="numero"
                                    onkeyup="mascaraCartao(this)" maxlength="19" oninput="preencher()" required>
                                <input type="text" placeholder="Nome do Titular" id="nome" oninput="preencher()"
                                    required>
                                <span>Data de expiração</span>
                                <div class="data">
                                    <input type="text" placeholder="Mês" id="validade_mes" onkeyup="validarMes(this)"
                                        min="1" max="12" oninput="preencher()" maxlength="2" required>
                                    <span>/</span>
                                    <input type="text" placeholder="Ano" id="validade_ano" onkeyup="validarAno(this)"
                                        oninput="preencher()" min="24" max="99" maxlength="2" required>
                                </div>
                                <input type="password" onkeyup="validarCvv(this)"
                                    placeholder="codigo de segurança (CVV)" required>
                                <button type="submit">Confirmar</button>
                            </form>

                        </div>
                    </div>
                </div>





            </div>
            <div class="card_secundaria">
                <h2>Total</h2>
                <table>
                    <tr>
                        <th>Subtotal</th>
                        <td>R$ 100,80</td>
                    </tr>
                    <tr>
                        <th>Frete</th>
                        <td>Gratis</td>
                    </tr>
                    <tr>
                        <th>Forma de Pagamento</th>
                        <td id="Forma_pagamento">indefinito</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td><b class="total_final">R$ 100,80</b></td>
                    </tr>
                </table>
                <button>Finalizar compra</button>

            </div>
        </section>
    </section>
    
</body>
</html>