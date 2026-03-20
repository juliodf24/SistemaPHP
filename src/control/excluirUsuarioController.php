<?php

require_once '../model/DTO/UsuarioDTO.php';
require_once '../model/DAO/UsuarioDAO.php';

error_reporting(0);

if(isset( $_GET['idUsu'])){
$idUsu = $_GET['idUsu'];

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->excluirUsuario($idUsu);

if($sucesso){
  header('Location: ../View/adm_listaCliente.php');
}else{
  header('Location: ../View/adm_listaCliente.php');
}
}