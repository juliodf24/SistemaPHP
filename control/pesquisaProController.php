<?php

require_once('../model/DTO/ProdutoDTO.php');
require_once '../model/DAO/ProdutoDAO.php';


if (isset($_GET['produto'])) {
    $codigo = $_GET['produto'];
    $ProdutoDAO = new ProdutoDAO();
    $produto = $ProdutoDAO->pesquisaPro($codigo);
}
if ($produto == false){
    header('location: ../view/erroproduto.php');
}
