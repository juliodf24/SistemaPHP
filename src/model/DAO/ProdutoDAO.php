<?php
require_once 'Conexao.php';
require_once '../model/DTO/ProdutoDTO.php';

class ProdutoDAO
{
    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function salvarProduto(ProdutoDTO $ProdutoDTO)
    {
        try {
            $sql = "INSERT INTO produto (nomePro, valorCompraPro, valorVendaPro, qtdEstoquePro, codigoPro, marcaPro, categoriaPro, descricaoPro, FORNECEDOR_idFor, imagemPro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);

            // Obtém os valores do DTO
            $nomePro = $ProdutoDTO->__get('nomePro');
            $valorCompraPro = $ProdutoDTO->__get('valorCompraPro');
            $valorVendaPro = $ProdutoDTO->__get('valorVendaPro');
            $qtdEstoquePro = $ProdutoDTO->__get('qtdEstoquePro');
            $codigoPro = $ProdutoDTO->__get('codigoPro');
            $marcaPro = $ProdutoDTO->__get('marcaPro');
            $categoriaPro = $ProdutoDTO->__get('categoriaPro');
            $descricaoPro = $ProdutoDTO->__get('descricaoPro');
            $FORNECEDOR_idFor = $ProdutoDTO->__get('FORNECEDOR_idFor');
            $imagemPro = $ProdutoDTO->__get('imagemPro');

            // Verifica se os valores foram atribuídos corretamente
            // var_dump($nomePro, $valorCompraPro, $valorVendaPro, $qtdEstoquePro, $codigoPro, $marcaPro, $categoriaPro, $descricaoPro);

            // Vincula os valores aos parâmetros da consulta preparada
            $stmt->bindValue(1, $nomePro);
            $stmt->bindValue(2, $valorCompraPro);
            $stmt->bindValue(3, $valorVendaPro);
            $stmt->bindValue(4, $qtdEstoquePro);
            $stmt->bindValue(5, $codigoPro);
            $stmt->bindValue(6, $marcaPro);
            $stmt->bindValue(7, $categoriaPro);
            $stmt->bindValue(8, $descricaoPro);
            $stmt->bindValue(9, $FORNECEDOR_idFor);
            $stmt->bindValue(10, $imagemPro);

            // Executa a consulta preparada
            $retorno = $stmt->execute();

            // Verifica se a consulta foi executada com sucesso
            // var_dump($retorno);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            return false; // Retorna false em caso de erro
        }
    }
    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM produto ";
            $stmt = $this->pdo->prepare($sql);


            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirProduto($idPro)
    {
        try {
            $sql = "DELETE FROM produto
            WHERE idPro = ?";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idPro);


            $retorno = $stmt->execute();

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function contarPro()
    {
        $sql = "SELECT count(*) AS totalPro FROM produto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
        return $retorno['totalPro'];
    }
    public function pesquisaPro($codigo){
        try {
            $sql = "SELECT * FROM produto WHERE codigoPro = ?";
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->bindValue(1, $codigo);

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $retorno;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
