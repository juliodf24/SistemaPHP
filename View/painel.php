<?php
require_once '../control/protect.php';
require_once '../control/contUsuController.php';
require_once '../control/contUsuRegController.php';
require_once '../control/contProController.php';
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

  <!-- grafico -->
  <script src="../js/apexcharts.min.js"></script>
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
        <div class="main-title">
          <p class="font-weight-bold">PAINEL INICIAL</p>
        </div>
        <!-- Cards -->
        <div class="main-cards">
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Produtos</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold"><?php echo $contPro?></span>
          </div>
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Total de vendas</p>
              <span class="material-icons-outlined text-orange">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">2000</span>
          </div>
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Total de Usuários</p>
              <span class="material-icons-outlined text-green">account_circle</span>
            </div>
            <span class="text-primary font-weight-bold"><?php echo $contUsu?></span>
          </div>
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">ALERTAS</p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold">0</span>
          </div>
        </div>
        <!-- End Cards -->
        <!-- Relatórios -->
        <div class="charts">
          <div class="charts-card">
            <p class="chart-title"> Vendas ao Longo do Tempo</p>
            <div id="chart"></div>
          </div>
          <div class="charts-card">
          <p class="chart-title">Produtos Mais Vendidos </p>
            <div id="chart2"></div>
          </div>
          <div class="charts-card">
            <p class="chart-title">Usuários por Região do Brasil</p>
            <div id="chart3"></div>
          </div>
          <!-- <div class="charts-card">
            <div id="area-chart"></div>
          </div>
        </div> -->
        <!-- End Relatórios -->
      </div>
    </main>
    <!--End Main -->









  </div>
  <!-- End grid-conteiner -->


  <!-- Chamando JS-->
  <?PHP  include "../js/painel.php"  ?>
</body>

</html>