<?php
require_once '../model/DAO/FornecedorDAO.php';
require_once '../model/DTO/FornecedorDTO.php';

//receber os dados do formulario
$nomeFornecedor = $_POST["nomeFor"];
$telefoneFornecedor= $_POST["telefoneFor"];
$emailFornecedor = $_POST["emailFor"];


//criar o objeto DTO para armazenar os dados do formulario
$FornecedorDTO = new FornecedorDTO();

$FornecedorDTO->__set('nomeFornecedor',$nomeFornecedor);
$FornecedorDTO->__set('telefoneFornecedor',$telefoneFornecedor);
$FornecedorDTO->__set('emailFornecedor',$emailFornecedor);


//criar o objeto que gravará os dados no banco
$FornecedorDAO = new FornecedorDAO();

echo "<pre>";
var_dump($FornecedorDTO);
echo "</pre>";

$sucesso = $FornecedorDAO->salvarFornecedor($FornecedorDTO);

if($sucesso){
    // $msg  = "Cadastro realizado";
    header('Location: ../View/adicionarFor.php?situacao=cadastrado');
}else{
    // $msg  = "Cadastro não realizado";
    header('Location: ../View/adicionarFor.php?situacao=erro');
}
// echo "{$msg}";





?>