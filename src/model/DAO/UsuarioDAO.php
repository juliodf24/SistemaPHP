<?php
include 'Conexao.php';
require_once '../model/DTO/UsuarioDTO.php';
class UsuarioDAO
{
    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {

        try {
            $sql = "INSERT INTO usuario (nomeUsu, dtNascimentoUsu, cpfUsu, telefoneUsu, emailUsu, senhaUsu, cepUsu, enderecoUsu, numeroUsu, complementoUsu, bairroUsu, cidadeUsu, ufUsu) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt = $this->pdo->prepare($sql);

            $nomeUsu = $usuarioDTO->__get('nomeUsu');
            $dtNascimentoUsu = $usuarioDTO->__get('dtNascimentoUsu');
            $cpfUsu = $usuarioDTO->__get('cpfUsu');
            $telefoneUsu = $usuarioDTO->__get('telefoneUsu');
            $emailUsu = $usuarioDTO->__get('emailUsu');
            $senhaUsu = $usuarioDTO->__get('senhaUsu');
            $cepUsu = $usuarioDTO->__get('cepUsu');
            $enderecoUsu = $usuarioDTO->__get('enderecoUsu');
            $numeroUsu = $usuarioDTO->__get('numeroUsu');
            $complementoUsu = $usuarioDTO->__get('complementoUsu');
            $bairroUsu = $usuarioDTO->__get('bairroUsu');
            $cidadeUsu = $usuarioDTO->__get('cidadeUsu');
            $ufUsu = $usuarioDTO->__get('ufUsu');

            $stmt->bindValue(1, $nomeUsu);
            $stmt->bindValue(2, $dtNascimentoUsu);
            $stmt->bindValue(3, $cpfUsu);
            $stmt->bindValue(4, $telefoneUsu);
            $stmt->bindValue(5, $emailUsu);
            $stmt->bindValue(6, $senhaUsu);
            $stmt->bindValue(7, $cepUsu);
            $stmt->bindValue(8, $enderecoUsu);
            $stmt->bindValue(9, $numeroUsu);
            $stmt->bindValue(10, $complementoUsu);
            $stmt->bindValue(11, $bairroUsu);
            $stmt->bindValue(12, $cidadeUsu);
            $stmt->bindValue(13, $ufUsu);

            $retorno = $stmt->execute();
            return  $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM usuario ";
            $stmt = $this->pdo->prepare($sql);


            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirUsuario($idUsuario)
    {
        try {
            $sql = "DELETE FROM usuario
            WHERE idUsu = ?";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);


            $retorno = $stmt->execute();

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function contabilizarUsu()
    {
        $sql = "SELECT count(*) AS totalUsu FROM usuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
        return $retorno['totalUsu'];
    }

    public function contRegiaoUsu()
    {
        $uf_regiao = [
            'AC' => 'Norte',
            'AL' => 'Nordeste',
            'AP' => 'Norte',
            'AM' => 'Norte',
            'BA' => 'Nordeste',
            'CE' => 'Nordeste',
            'DF' => 'Centro-Oeste',
            'ES' => 'Sudeste',
            'GO' => 'Centro-Oeste',
            'MA' => 'Nordeste',
            'MT' => 'Centro-Oeste',
            'MS' => 'Centro-Oeste',
            'MG' => 'Sudeste',
            'PA' => 'Norte',
            'PB' => 'Nordeste',
            'PR' => 'Sul',
            'PE' => 'Nordeste',
            'PI' => 'Nordeste',
            'RJ' => 'Sudeste',
            'RN' => 'Nordeste',
            'RS' => 'Sul',
            'RO' => 'Norte',
            'RR' => 'Norte',
            'SC' => 'Sul',
            'SP' => 'Sudeste',
            'SE' => 'Nordeste',
            'TO' => 'Norte',
        ];
        $regiao_num = [
            'Norte' => 0,
            'Nordeste' => 0,
            'Sudeste' => 0,
            'Sul' => 0,
            'Centro-Oeste' => 0
        ];

        $sql = "SELECT ufUsu FROM usuario ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $resultbd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultbd as $t) {
            $uf = $t['ufUsu'];
            $regiao = $uf_regiao[$uf];
            $regiao_num[$regiao]++;
        }
        return $regiao_num;
    }
}
