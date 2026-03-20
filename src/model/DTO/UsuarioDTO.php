<?php
class UsuarioDTO
{
    private $nomeUsu;
    private $cpfUsu;
    private $dtNascimentoUsu;
    private $telefoneUsu;
    private $emailUsu;
    private $perfilUsu;   // 
    private $situacaoUsu; // 
    private $enderecoUsu;
    private $numeroUsu;
    private $complementoUsu;
    private $bairroUsu;
    private $cidadeUsu;
    private $ufUsu;
    private $cepUsu;
    private $senhaUsu;



    public function __set($name, $value)
    {

        if ($name == 'dtNascimentoUsu') {
            
            // Convertendo a data para o formato MySQL 'YYYY-MM-DD'
            $value = DateTime::createFromFormat('d.m.Y', $value)->format('Y-m-d');
            $this->$name = $value;

        } elseif ($name == 'complementoUsu') {

            if ($value == '') {
                $value = null;
                $this->$name = $value;
            } else {
                $this->$name = $value;
            }

        } elseif ($name == 'senhaUsu') {

            $value = password_hash($value, PASSWORD_DEFAULT);
            $this->$name = $value;

        } else {

            $this->$name = $value;

        }
    }
    public function __get($name)
    {
        return $this->$name;
    }
    // public function setNomeUsu($nomeUsu){
    //     $this->nomeUsu = $nomeUsu;
    // }
    // public function getNomeUsu(){
    //     return $this->nomeUsu;
    // }
    // public function setCpfUsu($cpfUsu){
    //     $this->cpfUsu = $cpfUsu;
    // }
    // public function getCpfusu() {
    //     return $this->cpfUsu;
    // }   
}
?>