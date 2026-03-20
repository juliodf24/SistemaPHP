<?php
require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';

//receber os dados do formulario
$nomeUsuario = $_POST["nomeUsu"];
$dtNascimentoUsu = $_POST["dtNascimentoUsu"];
$cpfUsu = $_POST["cpfUsu"];
$telefoneUsu = $_POST["telefoneUsu"];
$emailUsu = $_POST["emailUsu"];
$senhaUsu = $_POST["senhaUsu"];
$cepUsu = $_POST["cepUsu"];
$enderecoUsu = $_POST["enderecoUsu"];
$numeroUsu = $_POST["numeroUsu"];
$complementoUsu = $_POST["complementoUsu"];
$bairroUsu = $_POST["bairroUsu"];
$cidadeUsu = $_POST["cidadeUsu"];
$ufUsu = $_POST["ufUsu"];


//criar o objeto DTO para armazenar os dados do formulario
$usuarioDTO = new UsuarioDTO();

$usuarioDTO->__set('nomeUsu',$nomeUsuario);
$usuarioDTO->__set('dtNascimentoUsu',$dtNascimentoUsu);
$usuarioDTO->__set('cpfUsu',$cpfUsu);
$usuarioDTO->__set('telefoneUsu',$telefoneUsu);
$usuarioDTO->__set('emailUsu',$emailUsu);
$usuarioDTO->__set('senhaUsu',$senhaUsu);
$usuarioDTO->__set('cepUsu',$cepUsu);
$usuarioDTO->__set('enderecoUsu',$enderecoUsu);
$usuarioDTO->__set('numeroUsu',$numeroUsu);
$usuarioDTO->__set('complementoUsu',$complementoUsu);
$usuarioDTO->__set('bairroUsu',$bairroUsu);
$usuarioDTO->__set('cidadeUsu',$cidadeUsu);
$usuarioDTO->__set('ufUsu',$ufUsu);

//criar o objeto que gravará os dados no banco
$usuarioDAO = new UsuarioDAO();

// echo "<pre>";
// var_dump($usuarioDTO);
// echo "</pre>";

$sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

if($sucesso){
    // $msg  = "Cadastro realizado";
    header('Location: ../View/cadastro.php?situacao=cadastrado');
}else{
    // $msg  = "Cadastro não realizado";
    header('Location: ../View/cadastro.php?situacao=erro');
}
// echo "{$msg}";





?>