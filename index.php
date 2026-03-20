<?PHP
  // include "control/listarProdutoController.php";
  include 'control/listarindexController.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/boot.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <title>Mundo Autopeças</title>
</head>
<body>

  <?php include "header.php" ?>

  <section class="banner">
    <img src="img/banner2.webp" alt="" width="100%">
  </section>

  <section>
    <aside class="menu_auxiliar">
      <nav>
        <a href="#"><button>Peças</button></a>
        <a href="#"><button>Pneus</button></a>
        <a href="#"><button>Acessórios</button></a>
      </nav>
    </aside>
  </section>

  <section>
    <main class="produtos">

<!-- Card Produto -->
    <?php foreach ($todos as $t) { ?>
      <div class="card">
        <a href="View/produto.php?produto=<?php echo $t['codigoPro']; ?>"><img src="<?php echo $t['imagemPro']; ?>" alt=""></a>
        <h2><a href="View/produto.php?produto=<?php echo $t['codigoPro']; ?>"><?php echo $t['nomePro']; ?></a></h2>
        <div class="avaliacao">
          <img src="img/icone/star_1.svg" alt="" class="star">
          <img src="img/icone/star_1.svg" alt="" class="star">
          <img src="img/icone/star_1.svg" alt="" class="star">
          <img src="img/icone/star_1.svg" alt="" class="star">
          <img src="img/icone/star_0.svg" alt="" class="star">
          <span><span>10.254</span> Avaliações</span>
        </div>
        <div class="preco">
          <a href="View/produto.php?produto=<?php echo $t['codigoPro']; ?>"><span>R$: <span><?php echo $t['valorVendaPro']; ?></span></span></a>
        </div>
      </div>
    <?php } ?>
<!-- Fim Card Produto -->

    </main>
  </section>

</body>
</html>