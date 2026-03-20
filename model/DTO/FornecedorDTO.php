<?php
class FornecedorDTO
{
    private $nomeFornecedor;
    private $telefoneFornecedor;
    private $emailFornecedor;
  



    public function __set($name, $value)
    {

            $this->$name = $value;
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