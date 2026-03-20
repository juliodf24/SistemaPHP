<?php
require_once '../model/DAO/ProdutoDAO.php';
require_once '../model/DTO/ProdutoDTO.php';

//receber os dados do formulario
$nomePro = $_POST["nomePro"];
$valorCompraPro= $_POST["valorCompraPro"];
$valorVendaPro = $_POST["valorVendaPro"];
$qtdEstoquePro = $_POST["qtdEstoquePro"];
$codigoPro = $_POST["codigoPro"];
$marcaPro= $_POST["marcaPro"];
$categoriaPro= $_POST["categoriaPro"];
$descricaoPro= $_POST["descricaoPro"];
$FORNECEDOR_idFor= $_POST["FORNECEDOR_idFor"];


$valorCompraPro = str_replace('R$ ', '', $valorCompraPro); 
$valorCompraPro = str_replace(',', '.', $valorCompraPro); 
$valorCompraPro = floatval($valorCompraPro);

$valorVendaPro = str_replace('R$ ', '', $valorVendaPro); 
$valorVendaPro = str_replace(',', '.', $valorVendaPro); 
$valorVendaPro = floatval($valorVendaPro);



if(isset($_FILES['imagemPro'])){
    $arquivo = $_FILES['imagemPro'];
    if($arquivo['error']){
        header('Location: ../View/adicionarPro.php?situacao=erroImg');
        die("falha ao enviar arquivo");
    }
    $pasta = "../imgProd/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeImg = uniqid();
    // strtolower() converte tudo pra letra minúsculas
    $extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
        header('Location: ../View/adicionarPro.php?situacao=erroImgT');
        die("Tipo de arquivo não aceito");
    }
    $caminhoImg = "imgProd/".$novoNomeImg.".".$extensao ;
    $retorno = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeImg . "." . $extensao );
    if (!$retorno){
        
        header('Location: ../View/adicionarPro.php?situacao=erroImg');
        die("Erro ao enviar imagem");
    }
    $imagemPro = $caminhoImg;
}



//criar o objeto DTO para armazenar os dados do formulario
$ProdutoDTO = new ProdutoDTO();

$ProdutoDTO->__set('nomePro',$nomePro);
$ProdutoDTO->__set('valorCompraPro',$valorCompraPro);
$ProdutoDTO->__set('valorVendaPro',$valorVendaPro);
$ProdutoDTO->__set('qtdEstoquePro',$qtdEstoquePro);
$ProdutoDTO->__set('imagemPro',$imagemPro);
$ProdutoDTO->__set('codigoPro',$codigoPro);
$ProdutoDTO->__set('marcaPro',$marcaPro);
$ProdutoDTO->__set('categoriaPro',$categoriaPro);
$ProdutoDTO->__set('descricaoPro',$descricaoPro);
$ProdutoDTO->__set('FORNECEDOR_idFor',$FORNECEDOR_idFor);


//criar o objeto que gravará os dados no banco
$ProdutoDAO = new ProdutoDAO();

// echo "<pre>";
// var_dump($ProdutoDTO);
// echo "</pre>";

$sucesso = $ProdutoDAO->salvarProduto($ProdutoDTO);

if($sucesso){
    header('Location: ../View/adicionarPro.php?situacao=cadastrado');
} else {
    header('Location: ../View/adicionarPro.php?situacao=erro');
}


// echo "{$msg}";





?>