<?php require_once '../control/protect.php'; 
require_once '../control/pesquisaProController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/adicionar_avaliacao.css">
    <title>Mundo Autopeças</title>
</head>

<body>
    <?php include "header.php" ?>

    <section class="Primeira_section">
        <main>
            <h1>Adicione Uma avaliação</h1>
            <div class="produto">
                <img src="../<?php echo $produto[0]['imagemPro']; ?>" alt="" width="62px">
                <h2><?php echo $produto[0]['nomePro']; ?></h2>
            </div>
            <hr>
            <p><b>Classificação geral</b></p>
            <div class="estrelas_container">
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>
            </div>
            <hr>
            <p><b>Comentário</b></p>
            <textarea name="" id="" rows="3" placeholder="O que você achou do produto?"></textarea>
            <hr>
            <a href="produto.php?produto=<?php echo $produto[0]['codigoPro']; ?>"><button>Adicionar</button></a>
        </main>
    </section>



</body>

</html>