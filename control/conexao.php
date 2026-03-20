<?php
class Conexao2 {
    private static $conexao;

    private function __construct() {
    }
    public static function getInstance(){
        //não existe instancia no atributo conexao?
        if(!isset(self::$conexao)){
            try {
                //verificar persistencia nos valores
                // aceitar caracteres com acentos e cedilhas
                //levantar exceção ao criar sql com erros
                $options = array(

                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8;',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
                $host = getenv('DB_HOST');
                $db   = getenv('DB_DATABASE');
                $user = getenv('DB_USER');
                $pass = getenv('DB_PASSWORD');

                self::$conexao = new 
                PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, $options);

            } catch (PDOException $exc) {
                echo "Erro ao conectar ao banco ".$exc->getMessage();
            }
        }
        return self::$conexao;
    }
}
?>