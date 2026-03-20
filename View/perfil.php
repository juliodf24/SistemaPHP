<?php require_once '../control/protect.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/boot.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/perfil.css">
  <title>Mundo Autopeças</title>
</head>

<body>
  <?php include "header.php" ?>

  <section class="Primeira_section">
    <main>
      <div class="perfil">
        <div class="foto"><img src="../img/icone/user.svg" alt="" width="60px"></div>
        <h1><?php echo $_SESSION['nomeUsu'] ?></h1>
      </div>

      <div class="informacoes">
        <table>
          <tr class="dados_pessoais">
            <td><a href=""><img src="../img/icone/user2_black.svg" alt="" width="15px"></a></td>
            <th><a href="alterarCad.php">Dados pessoais</a></th>
          </tr>
          <tr class="Endereço">
            <td><a href=""><img src="../img/icone/truck-side.svg" alt="" width="15px"></a></td>
            <th><a href="alterarEnd.php">Endereço</a></th>
          </tr>
          <tr class="historico_compras">
            <td><a href=""><img src="../img/icone/shopping-cart2_black.svg" alt="" width="15px"></a></td>
            <th><a href="HistoricoCompra.php">Histórico de compras</a></th>
          </tr>
          <!-- <tr class="Painel_vendedor">
            <td><a href=""><img src="../img/icone/megafone.svg" alt="" width="15px"></a></td>
            <th><a href="">Painel do Vendedor</a></th>
          </tr> -->
          <!-- <tr class="Painel_vendedor">
            <td><a href=""><img src="../img/icone/megafone.svg" alt="" width="15px"></a></td>
            <th><a href="">Gerenciar Estoque</a></th>
          </tr> -->
          <!-- <tr class="Painel_vendedor">
            <td><a href=""><img src="../img/icone/megafone.svg" alt="" width="15px"></a></td>
            <th><a href="">Adicionar Produto</a></th>
          </tr> -->
          <?php if($_SESSION['perfilUsu']=='Administrador' || $_SESSION['perfilUsu']=='Funcionario'){ ?>
            <tr class="Painel_Adm">
              <td><a href=""><img src="../img/icone/definicoes.svg" alt="" width="15px"></a></td>
              <th><a href="painel.php">Painel do Sistema</a></th>
            </tr>
          <?php }?>
          <tr class="sair">
            <td><a href=""><img src="../img/icone/saida.svg" alt="" width="15px"></a></td>
            <th><a href="../control/logout.php">Sair</a></th>
          </tr>
        </table>
      </div>
    </main>
  </section>



</body>

</html>