<?PHP
require_once '../control/pesquisaProController.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/boot.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/produto.css">
  <title>Mundo Autopeças</title>
</head>

<body>
  <?php include "header.php" ?>


  <section class="Primeira_section">
    <main>
      <div class="imagem">
        <img src="../<?php echo $produto[0]['imagemPro']; ?>" alt="" width="100%">
      </div>
      <div class="produto">
        <h1><?php echo $produto[0]['nomePro']; ?></h1>
        <div class="classificacao">
          <img src="../img/icone/star_1.svg" alt="" class="estrela">
          <img src="../img/icone/star_1.svg" alt="" class="estrela">
          <img src="../img/icone/star_1.svg" alt="" class="estrela">
          <img src="../img/icone/star_1.svg" alt="" class="estrela">
          <img src="../img/icone/star_0.svg" alt="" class="estrela">
          <span class="avaliacoes">10.254 Avaliações</span>
        </div>
        <div class="container_preco">
          <p>R$ <span class="preco"><?php echo $produto[0]['valorVendaPro']; ?></span></p>
        </div>
        <div class="btns">
          <div class="qtd">

            <div class="container01">
              <button id="minus" class="count-button" onclick="remover()">-</button>
              <span id="value">1</span>
              <button id="plus" class="count-button" onclick="adicionar()">+</button>
            </div>

          </div>
          <a href="#"><button class="btn_adicionar">Adicionar ao Carrinho</button></a>
          <a href="#"><button class="btn_comprar">Comprar Agora</button></a>
        </div>
      </div>
    </main>
  </section>




  <!-- inicio descrição -->
  <section>
    <aside class="aside_descricao">
      <h2>Descrição</h2>
      <div class="descricao_produto">
        <?php echo $produto[0]['descricaoPro']; ?>
      </div>
    </aside>
  </section>
  <!-- Fim descrição -->




  <!-- avaliação -->
  <section>
    <aside class="aside_avaliacoes">
      <div class="comentarios">
        <h2>Principais Avaliações</h2>
        <a href="adicionar_avaliacao.php?produto=<?php echo $produto[0]['codigoPro']; ?>"><button class="btn_adicionar btn_comentario">Adicionar Avaliação</button></a>

        <!-- inicio mensagem avaliação -->
        <div class="mensagem">
          <div class="classificacao">
            <img src="../img/icone/star_1.svg" alt="" class="estrela">
            <img src="../img/icone/star_1.svg" alt="" class="estrela">
            <img src="../img/icone/star_1.svg" alt="" class="estrela">
            <img src="../img/icone/star_1.svg" alt="" class="estrela">
            <img src="../img/icone/star_0.svg" alt="" class="estrela">
            <span class="nome">José eduardo</span>
          </div>
          <div class="comentario">

            <div class="texto_mensagem">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut iure nisi laudantium accusantium fugiat totam
              quidem numquam sint amet maxime atque eos iusto aliquid harum, commodi tenetur deserunt error? Autem!
            </div>
            <div class="img_comentario">
              <img src="../img/prodex6.jpg" alt="" width="100%">
            </div>
          </div>
        </div>
        <!-- fim mensagem avaliação -->

      </div>
    </aside>
  </section>
  <!-- fim avaliação -->

  <script src="../js/produto.js"></script>


</body>

</html>