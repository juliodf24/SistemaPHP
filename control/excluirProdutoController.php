<?php

require_once '../model/DTO/ProdutoDTO.php';
require_once '../model/DAO/ProdutoDAO.php';

error_reporting(0);

if(isset( $_GET['idPro'])){
$idPro = $_GET['idPro'];

$ProdutoDAO = new ProdutoDAO();

$sucesso = $ProdutoDAO->excluirProduto($idPro);

if($sucesso){
  header('Location: ../View/adm_estoque.php?situacao=excluido');
}else{
  header('Location: ../View/adm_estoque.php?situacao=erro');
}
}