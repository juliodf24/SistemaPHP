<?php

require_once '../model/DTO/FornecedorDTO.php';
require_once '../model/DAO/FornecedorDAO.php';

error_reporting(0);

if(isset( $_GET['idFor'])){
$idFor = $_GET['idFor'];

$FornecedorDAO = new FornecedorDAO();

$sucesso = $FornecedorDAO->excluirFornecedor($idFor);

if($sucesso){
  header('Location: ../View/gerenciarFor.php');
}else{
  header('Location: ../View/gerenciarFor.php');
}
}