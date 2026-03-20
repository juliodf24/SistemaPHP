<?php
require_once '../model/DAO/UsuarioLoginDAO.php';
require_once '../model/DTO/UsuariologinDTO.php';


$emailUsu = $_POST["emailUsu"];
$senhaUsu = $_POST["senhaUsu"];


$usuariologinDto = new UsuariologinDTO();
$usuariologinDto->__set('emailUsu', $emailUsu);
$usuariologinDto->__set('senhaUsu', $senhaUsu);


$usuariologinDAO = new UsuariologinDAO();

$sucesso = $usuariologinDAO->logarUsu($usuariologinDto);


if ($sucesso) {
    // $msg  = "Cadastro realizado";
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['idUsu'] = $sucesso->idUsu;
    $_SESSION['nomeUsu'] = $sucesso->nomeUsu;
    $_SESSION['emailUsu'] = $sucesso->emailUsu;
    $_SESSION['situacaoUsu'] = $sucesso->situacaoUsu;
    $_SESSION['perfilUsu'] = $sucesso->perfilUsu;

    header('Location: ../index.php');
} else {
    // $msg  = "Cadastro não realizado";
    header('Location: ../View/login.php?situacao=erro');
}
