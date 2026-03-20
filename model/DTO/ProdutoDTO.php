<?php
class ProdutoDTO
{
    private $nomePro;
    private $valorCompraPro;
    private $valorVendaPro;
    private $qtdEstoquePro;
    // private $imagemPro;
    private $codigoPro;
    private $marcaPro;
    private $categoriaPro;
    private $descricaoPro;
    private $FORNECEDOR_idFor;

    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }
}
