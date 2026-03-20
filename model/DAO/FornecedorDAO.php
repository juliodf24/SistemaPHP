<?php
include 'Conexao.php';
require_once '../model/DTO/FornecedorDTO.php';
class FornecedorDAO
{
    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function salvarFornecedor(FornecedorDTO $FornecedorDTO)
    {

        try {
            $sql = "INSERT INTO fornecedor (nomeFor, telefoneFor, emailFor) VALUES (?,?,?)";

            $stmt = $this->pdo->prepare($sql);

            $nomeFornecedor = $FornecedorDTO->__get('nomeFornecedor');
            $telefoneFornecedor = $FornecedorDTO->__get('telefoneFornecedor');
            $emailFornecedor = $FornecedorDTO->__get('emailFornecedor');


            $stmt->bindValue(1, $nomeFornecedor);
            $stmt->bindValue(2, $telefoneFornecedor);
            $stmt->bindValue(3, $emailFornecedor);


            $retorno = $stmt->execute();
            return  $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarFornecedores()
    {
        try {
            $sql = "SELECT * FROM fornecedor ";
            $stmt = $this->pdo->prepare($sql);


            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirFornecedor($idFor) {
        try {
            $sql = "DELETE FROM fornecedor
            WHERE idFor = ?";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idFor);

            
            $retorno = $stmt->execute();
           
            return $retorno;
         } catch (PDOException $exc) {
            echo $exc->getMessage();
            
         }
      }
}
