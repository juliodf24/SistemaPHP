<?php
include 'Conexao.php';
require_once '../model/DTO/UsuariologinDTO.php';

class UsuariologinDAO
{
    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    public function logarUsu(UsuariologinDTO $usuariologinDto)
    {

        try {
            $sql = "SELECT * FROM usuario WHERE emailUsu = ?";

            // $stmt = Conexao::getInstance()->prepare($sql);
            $stmt = $this->pdo->prepare($sql);

            $emailUsu = $usuariologinDto->__get('emailUsu');
            $senhaUsu = $usuariologinDto->__get('senhaUsu');


            $stmt->bindValue(1, $emailUsu);


            $resposta = $stmt->execute();


            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_OBJ);
                $hashed_senha = $row->senhaUsu;
                if (password_verify($senhaUsu, $hashed_senha)) {
                    return $row;
                }
            } else {
                return false;
            }

        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }


    }
}
?>